<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilterRequest;
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
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
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
        $cars = Car::with('Ro', 'region', 'ModelType', 'carModel')
            ->where('status', '1')
            ->select('id', 'price', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $recentCarCount = Car::where('created_at', '<=', Carbon::now()->subDays(5))->count();

        // Pass filters and cars to view
        return view('front.pages.home', array_merge($filters, compact('cars', 'recentCarCount')));
    }

    public function newAddListings()
    {
        // Fetch filter data
        $filters = $this->getFilterData();

        // Fetch cars, excluding those from the last 3 days
        $cars = Car::with('Ro', 'region', 'ModelType', 'carModel')
            ->where('status', '1')
            ->where('created_at', '<=', Carbon::now()->subDays(5))
            ->select('id', 'price', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image')
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

        $cars = Car::with('Ro', 'region', 'ModelType')
            ->where('status', '1')
            ->select('id', 'price', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id')
            ->paginate(20, ['*'], 'page', $page);

        if ($request->ajax()) {
            return response()->json($cars);
        }

        return abort(404);
    }

    public function filter(Request $request){
        dd($request->all());
    }


//    Car Detail
    public function detail()
    {
        return view('front.pages.detail');
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
        return view('front.pages.avtosalon');
    }
//    AvtoSalon Detail

    public function avtosalondetail()
    {
        return view('front.pages.avtosalon-detail');
    }

}
