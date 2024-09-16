<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('setLocale')->group(function () {


});
Route::get('/lang/{lang}', function ($lang) {
    if (in_array($lang, config('app.languages'))) {
        app()->setLocale($lang);
        return "lang".$lang;
    } else {
        app()->setLocale(config('app.fallback_locale'));
        return "lang".$lang;
    }
})
    ->withoutMiddleware('auth');

