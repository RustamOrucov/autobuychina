<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuctionTimeController;
use App\Http\Controllers\Admin\BanController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CarImageController;
use App\Http\Controllers\Admin\CarModelController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CylinderController;
use App\Http\Controllers\Admin\DamageController;
use App\Http\Controllers\Admin\DriveController;
use App\Http\Controllers\Admin\EngineTypeController;
use App\Http\Controllers\Admin\EngineVolumeController;
use App\Http\Controllers\Admin\EngineWorkController;
use App\Http\Controllers\Admin\FuelTypeController;
use App\Http\Controllers\Admin\HiglitController;
use App\Http\Controllers\Admin\MainSliderController;
use App\Http\Controllers\Admin\ModelTypeController;
use App\Http\Controllers\Admin\OdometerController;
use App\Http\Controllers\Admin\RoController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\SoldController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\TransmissionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoGenerateController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\YoutubeVideoController;
use App\Http\Controllers\NoticeController;
use Illuminate\Support\Facades\Route;



Route::get('admin/login-view', [AdminController::class, 'loginView'])->name('admin.login-view');
Route::post('/admin/login',[AdminController::class,'login'])->name('admin.login');


Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>['admin']],function () {
    Route::get('admin/login-view', [AdminController::class, 'loginView'])->name('admin.login-view');
    Route::get('admin/edit/{id}',[AdminController::class,'edit'])->name('admin.edit');
    Route::post('admin/update/{id}',[AdminController::class,'update'])->name('admin.update');

    Route::get('/', [AdminController::class, 'index'])->name('home');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::resource('user', UserController::class)->except(['show']);
    Route::resource('category', CategoryController::class)->except(['show']);
    Route::post('category/change-position/{id}', [CategoryController::class, 'changePosition'])->name('admin.category.change-position');
    Route::resource('subcategory', SubCategoryController::class)->except(['show']);
    Route::post('subcategory/change-position/{id}', [SubCategoryController::class, 'changePosition'])->name('admin.subcategory.change-position');
    Route::resource('carmodel', CarModelController::class)->except(['show']);
    Route::resource('modeltype', ModelTypeController::class)->except(['show']);
    Route::resource('fueltype', FuelTypeController::class)->except(['show']);
    Route::resource('cylinder', CylinderController::class)->except(['show']);
    Route::resource('drive', DriveController::class)->except(['show']);
    Route::resource('higlit', HiglitController::class)->except(['show']);
    Route::resource('odometer', OdometerController::class)->except(['show']);
    Route::resource('enginework', EngineWorkController::class)->except(['show']);
    Route::resource('ros', RoController::class)->except(['show']);
    Route::resource('enginevolume', EngineVolumeController::class)->except(['show']);
    Route::resource('damage', DamageController::class)->except(['show']);
    Route::resource('transmission', TransmissionController::class)->except(['show']);
    Route::resource('enginetype', EngineTypeController::class)->except(['show']);
    Route::resource('car', CarController::class)->except(['show']);
    Route::resource('mainslider', MainSliderController::class)->except(['show']);
    Route::resource('work', WorkController::class)->except(['show']);
    Route::resource('youtubevideo', YoutubeVideoController::class)->except(['show']);
    Route::resource('sold', SoldController::class)->except(['show']);
    Route::resource('social', SocialController::class)->except(['show']);
    Route::resource('ban', BanController::class)->except(['show']);




    Route::get('carimage/{carId}', [CarImageController::class, 'index'])->name('carimage.index');
    Route::get('carimage/create/{carId}', [CarImageController::class, 'create'])->name('carimage.create');
    Route::post('carimage/store/{carId}', [CarImageController::class, 'store'])->name('carimage.store');
    Route::put('carimage/edit/{carimage}', [CarImageController::class, 'edit'])->name('carimage.edit');
    Route::put('carimage/update/{carimage}', [CarImageController::class, 'update'])->name('carimage.update');
    Route::delete('carimage/destroy/{carimage}', [CarImageController::class, 'destroy'])->name('carimage.destroy');



//    site setting and meta seo

    Route::get('/logo/form',[\App\Http\Controllers\Admin\SiteSettingController::class,'logoForm'])->name('logo.form');
    Route::post('/logo/update',[\App\Http\Controllers\Admin\SiteSettingController::class,'logoUpdate'])->name('logo.update');
    Route::get('seo/form',[SiteSettingController::class,'seoform'])->name('seo.form');
    Route::post('/seo/update',[SiteSettingController::class,'seoupdate'])->name('seo.update');

//    about us
    Route::get('/top/form', [\App\Http\Controllers\Admin\AboutController::class,'editTop'])->name('top.form');
    Route::post('/top/form/save',[\App\Http\Controllers\Admin\AboutController::class,'storeTop'])->name('top.form.save');

    Route::get('/platform/form', [\App\Http\Controllers\Admin\AboutController::class,'editPlatform'])->name('platform.form');
    Route::post('/platform/form/save',[\App\Http\Controllers\Admin\AboutController::class,'storeplatform'])->name('platform.form.save');

    Route::get('/globalcount/form', [\App\Http\Controllers\Admin\AboutController::class,'editGlobalcount'])->name('globalcount.form');
    Route::post('/slider/form/save',[\App\Http\Controllers\Admin\AboutController::class,'storeslider'])->name('slider.form.save');
    Route::get('/slider/form/destroy/{id}',[\App\Http\Controllers\Admin\AboutController::class,'destroysliderimage'])->name('slider.form.destroy');

    Route::post('/globalcount/form/save',[\App\Http\Controllers\Admin\AboutController::class,'storeGlobalcount'])->name('globalcount.form.save');

    //notice
    Route::get('/notice/index',[NoticeController::class,'index'])->name('notice.index');
    Route::post('/notice/store',[NoticeController::class,'store'])->name('notice.store');
    Route::get('/notice/edit/{id}',[NoticeController::class,'edit'])->name('notice.edit');
    Route::post('/notice/update/{id}',[NoticeController::class,'update'])->name('notice.update');
    Route::get('/notice/destroy/{id}',[NoticeController::class,'destroy'])->name('notice.destroy');


//    Auction Time

    Route::resource('auctiontime', AuctionTimeController::class)->except(['show']);
});

    Route::get('videogenerate', [VideoGenerateController::class,'index'])->name('videogenerate.index');



