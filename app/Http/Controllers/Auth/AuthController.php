<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Dealer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
     public function login(){
        return view('front.pages.login');
     }




    public function loginProcess(LoginRequest $request)
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

        Auth::login($dealer, $request->has('remember-me'));
        return redirect()->route('home.index');
    }




    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }



    public function registerview(){
        return view('front.pages.register');
    }

}
