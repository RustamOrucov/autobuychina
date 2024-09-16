<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EngineVolumeRequest;
use App\Models\EngineVolume;
use App\Services\RepositoryService\EngineVolumeService;

class EngineVolumeController extends Controller
{
    public function __construct(protected EngineVolumeService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.enginevolume.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.enginevolume.form');
    }
    public function store(EngineVolumeRequest $engineVolumeRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($engineVolumeRequest);
        return redirect()->route('admin.enginevolume.index');
    }
    public function edit(EngineVolume $enginevolume)
    {
        return view('admin.enginevolume.form',['model'=>$enginevolume]);
    }
    public function update(EngineVolumeRequest $engineVolumeRequest,EngineVolume $enginevolume)
    {
        $this->service->update($engineVolumeRequest,$enginevolume);
        return redirect()->back();
    }
    public function destroy(EngineVolume $enginevolume)
    {
        $this->service->delete($enginevolume);
        return redirect()->back();
    }
}
