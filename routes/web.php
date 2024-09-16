<?php

use App\Http\Controllers\Admin\AuctionTimeController;
use App\Http\Controllers\Auction\BidController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\AuctionLineController;
use App\Http\Controllers\Front\CarsCategoryController;
use App\Http\Controllers\Front\FiltersController;
use App\Http\Controllers\Front\NoticeController;
use App\Http\Controllers\Front\SiteController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Mobile\MobileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SecondController;
use Illuminate\Support\Facades\Route;

Route::middleware('detect.mobile')->group(function () {



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



});








