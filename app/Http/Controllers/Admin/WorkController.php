<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;
use App\Models\Work;
use App\Services\RepositoryService\WorkService;

class WorkController extends Controller
{
    public function __construct(protected WorkService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.work.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.work.form');
    }
    public function store(WorkRequest $workRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($workRequest);
        return redirect()->route('admin.work.index');
    }
    public function edit(Work $work)
    {
        return view('admin.work.form',['model'=>$work]);
    }
    public function update(WorkRequest $workRequest,Work $work)
    {
        $this->service->update($workRequest,$work);
        return redirect()->back();
    }
    public function destroy(Work $work)
    {
        $this->service->delete($work);
        return redirect()->back();
    }
}
