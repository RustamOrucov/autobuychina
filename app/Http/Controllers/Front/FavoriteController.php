<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Support\Facades\Cookie;

class FavoriteController extends Controller
{
    public function favorite(){
 $favoriteCarsJson = $_COOKIE['favorites'] ?? '[]';

 $favoriteCarIds = json_decode($favoriteCarsJson, true);

 $favoriteCarIds = array_filter($favoriteCarIds, fn($id) => $id !== null);

 $cars = Car::whereIn('id', $favoriteCarIds)
  ->with('Ro', 'region', 'ModelType', 'carModel', 'EngineVolume')
 ->where('status',1)
 ->select('id', 'price','vincode', 'created_at', 'year', 'odometer_km', 'engine_v', 'ro_id', 'region_id', 'model_type_id', 'car_models_id', 'car_image', 'engine_volume_id')
 ->orderBy('created_at', 'desc')
 ->get();
  $count=$cars->count();
        return view('front.pages.favorite',compact('cars','count'));
    }
}
