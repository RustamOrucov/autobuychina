<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function detail(Dealer $dealer){

        $cars=Car::where('status',1)->where('dealer_id',$dealer->id)->get();
        $dealer=Dealer::where('id',$dealer->id)->first();



         return view('mobile.pages.dealer-detail',compact('dealer','cars'));
    }
}
