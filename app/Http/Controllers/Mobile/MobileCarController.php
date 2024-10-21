<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Higlit;
use Illuminate\Http\Request;

class MobileCarController extends Controller
{
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
}
