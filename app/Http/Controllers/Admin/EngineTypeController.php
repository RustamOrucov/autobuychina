<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EngineTypeRequest;
use App\Models\EngineType;
use App\Services\RepositoryService\EngineTypeService;


class EngineTypeController extends Controller
{
    public function __construct(protected EngineTypeService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.enginetype.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.enginetype.form');
    }
    public function store(EngineTypeRequest $engineTypeRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($engineTypeRequest);
        return redirect()->route('admin.enginetype.index');
    }
    public function edit(EngineType $enginetype)
    {
        return view('admin.enginetype.form',['model'=>$enginetype]);
    }
    public function update(EngineTypeRequest $engineTypeRequest,EngineWork $enginetype)
    {
        $this->service->update($engineTypeRequest,$enginetype);
        return redirect()->back();
    }
    public function destroy(EngineType $enginetype)
    {
        $this->service->delete($enginetype);
        return redirect()->back();
    }
}
