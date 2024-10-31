<?php

namespace App\Http\Controllers\Mobile;


use App\Http\Controllers\Controller;
use App\Models\Ban;
use App\Models\Car;
use App\Models\Carmodel;
use App\Models\Cylinder;
use App\Models\Damage;
use App\Models\EngineVolume;
use App\Models\FuelType;
use App\Models\Higlit;
use App\Models\Market;
use App\Models\Modeltype;
use App\Models\Region;
use App\Models\Ro;
use App\Models\Transmission;
use App\Models\Year;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Services\CarFilterService;



class MobileHomeController extends Controller
{
    public function __construct(protected CarFilterService $carFilterService) {}
    private function getFilterData()
    {
        return [
            'brands' => Carmodel::all(),
            'models' => Modeltype::all(),
            'currencies' => Ro::all(),
            'bans' => Ban::all(),
            'years' => Year::orderBy('year', 'desc')->get(),
            'colors' => Cylinder::all(),
            'fueltypes' => FuelType::all(),
            'transmissions' => Transmission::all(),
            'damages' => Damage::all(),
            'enginevolumes' => EngineVolume::all(),
            'equipments' => Higlit::all(),
            'regions' => Region::all(),
            'markets' => Market::all(),
        ];
    }




    public function home()
    {
        $brands = Carmodel::all();
        $cars = Car::with('Ro', 'region', 'ModelType', 'carModel', 'EngineVolume', 'carImages')
            ->where('status', '1')
            ->select('id', 'price', 'vincode', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image', 'engine_volume_id')
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        $recentCarCount = Car::where('created_at', '<=', Carbon::now()->subDays(5))->count();
        return view('mobile.pages.home', compact('brands', 'cars', 'recentCarCount'));
    }



    public function filter(Request $request)
    {

        $brands = Carmodel::all();

        $recentCarCount = Car::where('created_at', '<=', Carbon::now()->subDays(5))->count();
        $cars = $this->carFilterService
            ->filter($request->all())
            ->with('Ro', 'region', 'ModelType', 'carModel', 'EngineVolume')
            ->where('status', '1')
            ->select('id', 'price', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image', 'engine_volume_id')
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        $selectfilters = $request->all();
        $models = Modeltype::all();
        $selectModel = Modeltype::where('id',$request->input('q.model'))->first();
        $selectBrand = Carmodel::where('id', $request->input('q.make'))->first();


        return view('mobile.pages.home', compact('brands', 'cars', 'recentCarCount','selectBrand','selectModel','models','selectfilters' ));
    }


    public function filterBrand($id)
    {
        $brands = Carmodel::all();

        $selectBrand = Carmodel::where('id', $id)->first();
        $models = Modeltype::where('car_models_id', $id)->get();
        $cars = Car::with('Ro', 'region', 'ModelType', 'carModel', 'EngineVolume')
            ->where('status', '1')
            ->where('car_models_id', $id)
            ->select('id', 'price', 'vincode', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image', 'engine_volume_id')
            ->orderBy('created_at', 'desc')
            ->paginate(6);



        return view('mobile.pages.home', compact('brands', 'selectBrand', 'cars', 'models'));
    }

    public function filterModel($brandId, $modelId)
    {
        $brands = Carmodel::all();
        $models = Modeltype::where('car_models_id', $brandId)->get();
        $selectModel = Modeltype::where('id', $modelId)->first();
        $selectBrand = Carmodel::where('id', $brandId)->first();
        $cars = Car::with('Ro', 'region', 'ModelType', 'carModel', 'EngineVolume')
            ->where('status', '1')
            ->where('car_models_id', $brandId)
            ->where('model_type_id', $modelId)
            ->select('id', 'price', 'vincode', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image', 'engine_volume_id')
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        return view('mobile.pages.home', compact('brands', 'selectBrand', 'cars', 'models', 'selectModel'));
    }

    public function filterpage(Request $request)
    {
        $selectfilters = $request->get('selectfilters', []);
        $selectModel = $request->get('model_id');
        $selectModel = Modeltype::where('id', $selectModel)->first();
        $selectBrand = $request->get('brand_id');
        $selectBrand = Carmodel::where('id', $selectBrand)->first();

        $filters = $this->getFilterData();
    //    dd(  $selectfilters);
        return view('mobile.pages.filter', compact('filters', 'selectBrand', 'selectModel', 'selectfilters'));
    }





    public function cardetail()
    {
        return view('mobile.pages.car-detail');
    }

    public function profilepage()
    {
        return view('mobile.pages.profile');
    }

    public function addcars()
    {
        return view('mobile.pages.add-cars');
    }
}
