<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EngineWorkRequest;
use App\Models\EngineWork;
use App\Services\RepositoryService\EngineWorkService;

class EngineWorkController extends Controller
{
    public function __construct(protected EngineWorkService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.enginework.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.enginework.form');
    }
    public function store(EngineWorkRequest $engineWorkRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($engineWorkRequest);
        return redirect()->route('admin.enginework.index');
    }
    public function edit(EngineWork $enginework)
    {
        return view('admin.enginework.form',['model'=>$enginework]);
    }
    public function update(EngineWorkRequest $engineWorkRequest,EngineWork $enginework)
    {
        $this->service->update($engineWorkRequest,$enginework);
        return redirect()->back();
    }
    public function destroy(EngineWork $enginework)
    {
        $this->service->delete($enginework);
        return redirect()->back();
    }
}
