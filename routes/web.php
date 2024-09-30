<?php


use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\FavoriteController;
use App\Http\Controllers\Front\FilterController;

;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SecondController;
use Illuminate\Support\Facades\Route;



// home route
Route::get('/',[HomeController::class,'index']);

//load more route
Route::get('/cars', [HomeController::class, 'loadMoreCars'])->name('cars');


// new add listings
Route::get('/new-add-listings', [HomeController::class, 'newAddListings'])->name('newAddListings');

// main filter route
Route::post('/main-filter',[HomeController::class,'filter'])->name('mainFilter');

// favorite list

Route::get('/favorite',[FavoriteController::class,'favorite'])->name('favorite');


//Car Detail
Route::get('/detail/{car}',[HomeController::class,'detail'])->name('detail');
//New Car
Route::get('/new-car',[HomeController::class,'new']);
//All Cars
Route::get('/all-cars',[HomeController::class,'allcars']);
//AvtoSalon
Route::get('/dealership',[HomeController::class,'avtosalon'])->name('dealership');
//AvtoSalon Detail
Route::get('/avtosalon-detail',[HomeController::class,'avtosalondetail']);


Route::get('/login',[AuthController::class,'login'])->name('login');
















