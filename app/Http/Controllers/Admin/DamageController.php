<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DamageRequest;
use App\Models\Damage;
use App\Services\RepositoryService\DamageService;

class DamageController extends Controller
{
    public function __construct(protected DamageService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.damage.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.damage.form');
    }
    public function store(DamageRequest $damageRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($damageRequest);
        return redirect()->route('admin.damage.index');
    }
    public function edit(Damage $damage)
    {
        return view('admin.damage.form',['model'=>$damage]);
    }
    public function update(DamageRequest $damageRequest,Damage $damage)
    {
        $this->service->update($damageRequest,$damage);
        return redirect()->back();
    }
    public function destroy(Damage $damage)
    {
        $this->service->delete($damage);
        return redirect()->back();
    }
}
