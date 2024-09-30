<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class MobileController extends Controller
{
    public function home()
    {
        return view('mobile.pages.home');
    }
}
