<?php


use App\Http\Controllers\Auth\AuthController;
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




//Car Detail
Route::get('/detail',[HomeController::class,'detail']);
//New Car
Route::get('/new-car',[HomeController::class,'new']);
//All Cars
Route::get('/all-cars',[HomeController::class,'allcars']);
//AvtoSalon
Route::get('/avtosalon',[HomeController::class,'avtosalon']);
//AvtoSalon Detail
Route::get('/avtosalon-detail',[HomeController::class,'avtosalondetail']);






Route::get('/register',[UserController::class,'register'])->name('register');
Route::post('/register',[UserController::class,'storeClient']);

// Login Proccess
Route::post('/loginProcess', [AuthController::class, 'loginProcess'])->name('login.process');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Second
Route::get('/second-route', [SecondController::class, 'secondRoutes']);

//user active root
Route::post('/change-status', [UserController::class, 'changeStatus'])->name('change.status');


// search route
Route::get('/search',[SearchController::class,'index'])->name('search.index');


//keyword search
Route::post('key_search',[SearchController::class,'keySearch'])->name('key_search');












