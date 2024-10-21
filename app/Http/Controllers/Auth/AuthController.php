<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Dealer;
use App\Models\Policy;
use App\Models\Traderregis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function dealerLogin()
    {
        $policys = Policy::all();
        return view('front.pages.dealer-login',compact('policys'));
    }
    public function traderLogin()
    {
        $policys = Policy::all();
        return view('front.pages.trader-login',compact('policys'));
    }

    public function dealerLoginProcess(LoginRequest $request)
    {
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

        return redirect()->route('dealer-detail');
    }
    public function traderLoginProcess(LoginRequest $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $trader = Traderregis::where('email', $request->email)->first();

        if (!$trader) {
            return redirect()->back()->with('error', 'Email or password is incorrect');
        }

        if (!Hash::check($request->password, $trader->password)) {
            return redirect()->back()->with('error', 'Email or password is incorrect');
        }

        Auth::guard('trader')->login($trader, $request->has('remember-me'));

        return redirect()->route('trader-detail');
    }

    public function logout()
    {
       if ( Auth::guard('dealer' )->check()){
           Auth::guard('dealer' )->logout();
       }
        if ( Auth::guard('trader' )->check()){
            Auth::guard('trader' )->logout();
        }
        return redirect()->route('home');
    }

    public function dealer()
    {
        $policys = Policy::all();
        return view('front.pages.dealer',compact('policys'));
    }
}
