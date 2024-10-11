<?php

namespace App\Providers;

use App\Models\logoimages;
use App\Models\ReportModel;
use App\Models\SiteSeoTranslations;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }



    /**
     * Bootstrap any application services.
     */
    public function boot(


    ): void
    {

        $locale = App::getLocale();
        $logoImages = logoimages::find(1);
        $seoData = SiteSeoTranslations::where('locale', $locale)->first();
        $reports=ReportModel::orderBy('created_at', 'desc')->get();


        View::share([
            'logoImages' => $logoImages,
            'seoData' => $seoData,
        ]);

        View::composer('admin.home', function ($view) use ($reports) {
            $view->with('reports', $reports);
        });




    }
}
