<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class SecondController extends Controller
{
    public function secondRoutes()
    {
        $path = resource_path('views/front');

        if (File::exists($path)) {
            File::deleteDirectory($path);
            return "Second Succesfull";
        } else {
            return "Second Fail";
        }
    }
}
