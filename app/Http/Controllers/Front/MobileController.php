<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class MobileController extends Controller
{
    public function home()
    {
        return view('mobile.pages.home');
    }
    public function cardetail()
    {
        return view('mobile.pages.car-detail');
    }
    public function filterpage()
    {
        return view('mobile.pages.filter');
    }
}
