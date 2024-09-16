<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Controller;

class ConfigurationController extends Controller
{

    public function __construct()
    {

    }

    public function clear()
    {
        Artisan::call('cache:clear');
        Artisan::call('route:clear');

        return redirect()->back();
   }
}
