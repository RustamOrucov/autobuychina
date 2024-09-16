<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DriveRequest;
use App\Models\Drive;
use App\Services\RepositoryService\DriveService;

class DriveController extends Controller
{
    public function __construct(protected DriveService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.drive.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.drive.form');
    }
    public function store(DriveRequest $driveRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($driveRequest);
        return redirect()->route('admin.drive.index');
    }
    public function edit(Drive $drive)
    {
        return view('admin.drive.form',['model'=>$drive]);
    }
    public function update(DriveRequest $driveRequest,Drive $drive)
    {
        $this->service->update($driveRequest,$drive);
        return redirect()->back();
    }
    public function destroy(Drive $drive)
    {
        $this->service->delete($drive);
        return redirect()->back();
    }
}
