<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilterRequest;
use App\Models\Ban;
use App\Models\Car;
use App\Models\Carmodel;
use App\Models\Cylinder;
use App\Models\Damage;
use App\Models\Dealer;
use App\Models\EngineVolume;
use App\Models\FuelType;
use App\Models\Higlit;
use App\Models\Market;
use App\Models\Modeltype;
use App\Models\Region;
use App\Models\Ro;
use App\Models\Social;
use App\Models\Transmission;
use App\Models\Year;
use App\Services\CarFilterService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __construct(protected CarFilterService $carFilterService) {}
    // Helper method to fetch filter data
    private function getFilterData()
    {
        return [
            'brands' => Carmodel::all(),
            'models' => Modeltype::all(),
            'currencies' => Ro::all(),
            'bans' => Ban::all(),
            'years' => Year::orderBy('year', 'desc')->get(),
            'colors' => Cylinder::all(),
            'fueltypes' => Fueltype::all(),
            'transmissions' => Transmission::all(),
            'damages' => Damage::all(),
            'enginevolumes' => EngineVolume::all(),
            'equipments' => Higlit::all(),
            'regions' => Region::all(),
            'markets' => Market::all(),
        ];
    }

    public function index()
    {
        // Fetch filter data
        $filters = $this->getFilterData();

        // Fetch cars
        $cars = Car::with('Ro', 'region', 'ModelType', 'carModel', 'EngineVolume')
            ->where('status', '1')
            ->select('id', 'price','vincode', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image', 'engine_volume_id')
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        $recentCarCount = Car::where('created_at', '<=', Carbon::now()->subDays(5))->count();

        return view('front.pages.home', array_merge($filters, compact('cars', 'recentCarCount')));
    }

    public function newAddListings()
    {
        // Fetch filter data
        $filters = $this->getFilterData();

        // Fetch cars, excluding those from the last 3 days
        $cars = Car::with('Ro', 'region', 'ModelType', 'carModel', 'EngineVolume')
            ->where('status', '1')
            ->where('created_at', '<=', Carbon::now()->subDays(5))
            ->select('id', 'price', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image', 'engine_volume_id')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $recentCarCount = Car::where('created_at', '<=', Carbon::now()->subDays(5))->count();

        // Pass filters and cars to view
        return view('front.pages.home', array_merge($filters, compact('cars', 'recentCarCount')));
    }

    // Infinite scroll method
    public function loadMoreCars(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = 12;


        $cars = Car::with(['ModelType', 'Ro', 'carModel', 'region'])
        ->select('id', 'price','vincode', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image', 'engine_volume_id')
            ->paginate($perPage);


        return response()->json([
            'data' => $cars->items(),
            'last_page' => $cars->lastPage(),
        ]);
    }

    public function filter(Request $request)
    {

        $filters = $this->getFilterData();

        $recentCarCount = Car::where('created_at', '<=', Carbon::now()->subDays(5))->count();

        $cars = $this->carFilterService
            ->filter($request->all())
            ->with('Ro', 'region', 'ModelType', 'carModel', 'EngineVolume')
            ->where('status', '1')
            ->select('id', 'price', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image', 'engine_volume_id')
            ->orderBy('created_at', 'desc')
            ->paginate(20);



        $selectfilters = $request->all();


        return view('front.pages.home', array_merge($filters, compact('cars', 'recentCarCount', 'selectfilters')));
    }


    //    Car Detail
    public function detail(Car $car)
    {

        $cars = Car::where('car_models_id', $car->car_models_id)
            ->where('id', '!=', $car->id)
            ->with('Ro', 'region', 'ModelType', 'carModel', 'EngineVolume','Dealer')
            ->where('status', '1')
            ->select('id', 'price', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image', 'engine_volume_id')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $car->increment('view_count');

        $equipmentIds = json_decode($car->car_equipment);
        $equipmentIds = array_map('intval', $equipmentIds);
        $equipments = Higlit::whereIn('id', $equipmentIds)->get();

        return view('front.pages.detail', compact('car', 'equipments', 'cars'));
    }

    //    New Car
    public function new()
    {
        return view('front.pages.new-car');
    }

    //    All Cars
    public function allcars()
    {
        // Fetch filter data
        $filters = $this->getFilterData();

        // Fetch cars
        $cars = Car::with('Ro', 'region', 'ModelType', 'carModel')
            ->where('status', '1')
            ->select('id', 'price', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $recentCarCount = Car::where('created_at', '<=', Carbon::now()->subDays(5))->count();
        return view('front.pages.all-cars', array_merge($filters, compact('cars', 'recentCarCount')));
    }

    //    AvtoSalon

    public function avtosalon()
    {
        $dealers=Dealer::where('status',1)->with('cars')->get();
        
        return view('front.pages.avtosalon',['dealers'=>$dealers]);
    }
    //    AvtoSalon Detail

    public function avtosalondetail($id)
    {
        $cars=Car::where('status',1)->where('dealer_id',$id)->get();
        $dealer=Dealer::where('id',$id)->first();
        return view('front.pages.avtosalon-detail',compact('dealer','cars'));

    }


    public function agrement(){
        return view('front.pages.useragrement');
    }
    public function rule(){
        return view('front.pages.rule');
    }

}
