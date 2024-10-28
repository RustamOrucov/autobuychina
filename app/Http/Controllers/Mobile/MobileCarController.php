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
use Illuminate\Http\Request;

class MobileCarController extends Controller
{
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

    public function cardetail(Car $car){

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

    return view('mobile.pages.car-detail',compact('car', 'equipments', 'cars'));
    }


    public function loadMoreCars(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = 6;


        $cars = Car::with(['ModelType', 'Ro', 'carModel', 'region'])
        ->select('id', 'price','vincode', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image', 'engine_volume_id')
            ->paginate($perPage);


        return response()->json([
            'data' => $cars->items(),
            'last_page' => $cars->lastPage(),
        ]);
    }


    public function addForm(){
        $properties= $this->getFilterData();
        return view('mobile.pages.add-cars',compact('properties'));
    }

   public function agrement(){

    return view('mobile.pages.agrement');
   }

   public function rules(){

    return view('mobile.pages.rules');
   }

}
