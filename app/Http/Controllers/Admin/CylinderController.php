<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CylinderRequest;
use App\Models\Cylinder;
use App\Services\RepositoryService\CylinderService;

class CylinderController extends Controller
{
    public function __construct(protected CylinderService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.cylinder.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.cylinder.form');
    }
    public function store(CylinderRequest $cylinderRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($cylinderRequest);
        return redirect()->route('admin.cylinder.index');
    }
    public function edit(Cylinder $cylinder)
    {
        return view('admin.cylinder.form',['model'=>$cylinder]);
    }
    public function update(CylinderRequest $cylinderRequest,Cylinder $cylinder)
    {
        $this->service->update($cylinderRequest,$cylinder);
        return redirect()->back();
    }
    public function destroy(Cylinder $cylinder)
    {
        $this->service->delete($cylinder);
        return redirect()->back();
    }
}
