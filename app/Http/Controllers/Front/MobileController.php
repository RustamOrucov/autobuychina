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
    public function profilepage()
    {
        return view('mobile.pages.profile');
    }
    public function alldealers()
    {
        return view('mobile.pages.all-dealers');
    }
    public function addcars()
    {
        return view('mobile.pages.add-cars');
    }

    public function favorite()
    {
        return view('mobile.pages.favorite');
    }

    public function mquestion()
    {
        return view('mobile.pages.question');
    }

    public function mdealer()
    {
        return view('mobile.pages.dealer');
    }
    public function mtrader()
    {
        return view('mobile.pages.trader');
    }

}
