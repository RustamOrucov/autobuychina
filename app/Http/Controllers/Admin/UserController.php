<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\RepositoryService\UserService;

class UserController extends Controller
{
    public function __construct(protected UserService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.user.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.user.form');
    }
    public function store(UserRequest $userRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($userRequest);
        return redirect()->route('admin.user.index');
    }
    public function edit(User $user)
    {
        return view('admin.user.form',['model'=>$user]);
    }
    public function update(UserRequest $categRequest,User $user)
    {
        $this->service->update($categRequest,$user);
        return redirect()->back();
    }
    public function destroy(User $user)
    {
        $this->service->delete($user);
        return redirect()->back();
    }
}
