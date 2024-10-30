<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Guards;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfilUpdateRequest;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }
    public function loginView()
    {
        return view('admin.login.index');
    }
    public function login()
    {
        if (auth()->guard(Guards::ADMIN->value)->attempt(['email'=> request()->email,'password' => request()->password],request()->remember_me)){
            return view('admin.home');
        }
        return redirect()->back();
    }

    public function logout()
    {
        if (auth()->guard(Guards::ADMIN->value)->check()) {
            auth()->guard(Guards::ADMIN->value)->logout();
        }
        return redirect()->route('admin.login-view');
    }


    public function edit(AdminModel $admin){
    $admin=Auth::guard('admin')->user();
    return view('admin.profile.form',['model'=>$admin]);

    }

    public function update(ProfilUpdateRequest $request, $id)
    {
        $user = AdminModel::where('id', $id)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['User not found.']);
        }

        $updateData = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'number' => $request->input('number'),
            'city' => $request->input('city'),
            'address' => $request->input('address'),
        ];

        if ($request->filled('password')) {
            $updateData['password'] = Hash::make($request->input('password'));
        }


        $user->update($updateData);
        if ($request->filled('password')){
            if (auth()->guard(Guards::ADMIN->value)->check()) {
                auth()->guard(Guards::ADMIN->value)->logout();
            }
            return redirect()->route('admin.login-view');
        }else{
            return redirect()->back()->with('Success','User updated successfully');

        }

    }


    public function homepage()
    {
        return view('admin.home');
    }


}
