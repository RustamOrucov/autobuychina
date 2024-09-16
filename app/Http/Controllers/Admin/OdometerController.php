<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OdometerRequest;
use App\Models\Odometer;
use App\Services\RepositoryService\OdometerService;

class OdometerController extends Controller
{
    public function __construct(protected OdometerService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.odometer.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.odometer.form');
    }
    public function store(OdometerRequest $odometerRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($odometerRequest);
        return redirect()->route('admin.odometer.index');
    }
    public function edit(Odometer $odometer)
    {
        return view('admin.odometer.form',['model'=>$odometer]);
    }
    public function update(OdometerRequest $odometerRequest,Odometer $odometer)
    {
        $this->service->update($odometerRequest,$odometer);
        return redirect()->back();
    }
    public function destroy(Odometer $odometer)
    {
        $this->service->delete($odometer);
        return redirect()->back();
    }
}
