<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginProcess(Request $request)
    {
        $request->validate([
            'fin_code' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('fin_code', $request->fin_code)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Fin code is incorrect');
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Password is incorrect');
        }

        Auth::login($user, $request->has('remember-me'));
        return redirect()->route('home.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
