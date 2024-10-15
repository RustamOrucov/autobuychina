<?php

namespace App\Providers;

use App\Models\AdminSetting;
use Illuminate\Support\ServiceProvider;

class AdminSettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $settings = AdminSetting::with('translations')->first();
        view()->share('adminSettings', $settings);
    }
}
