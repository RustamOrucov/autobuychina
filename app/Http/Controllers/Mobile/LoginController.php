<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Http\Requests\MobileLoginRequest;
use App\Models\Car;
use App\Models\Dealer;
use App\Models\Spare;
use App\Models\Traderregis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){
        return view('mobile.pages.login');
    }

   public function authMobile(MobileLoginRequest $request){
    $request->validate([
        'email' => 'required|string',
        'password' => 'required|string',
    ]);

    $dealer = Dealer::where('email', $request->email)->first();

    if (!$dealer) {
        return redirect()->back()->with('error', 'Email or password is incorrect');
    }

    if (!Hash::check($request->password, $dealer->password)) {
        return redirect()->back()->with('error', 'Email or password is incorrect');
    }

    Auth::guard('dealer')->login($dealer, $request->has('remember-me'));

   $dealer=Dealer::find(Auth::guard('dealer')->id());
   $cars=Car::where('dealer_id', $dealer->id)->get();


    return view('mobile.pages.cabinet', compact('dealer', 'cars')  );
   }


   public function logout()
   {
      if ( Auth::guard('dealer' )->check()){
          Auth::guard('dealer' )->logout();
      }
       if ( Auth::guard('trader' )->check()){
           Auth::guard('trader' )->logout();
       }
       return redirect()->route('mobile.home');
   }

    public function cabinet(){
        $dealer=Dealer::find(Auth::guard('dealer')->id());
        $cars=Car::where('dealer_id', $dealer->id)->get();
         return view('mobile.pages.cabinet', compact('dealer', 'cars')  );
    }

}
