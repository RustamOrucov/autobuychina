<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransmissionRequest;
use App\Models\Transmission;
use App\Services\RepositoryService\TransmissionService;

class TransmissionController extends Controller
{
    public function __construct(protected TransmissionService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.transmission.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.transmission.form');
    }
    public function store(TransmissionRequest $transmissionRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($transmissionRequest);
        return redirect()->route('admin.transmission.index');
    }
    public function edit(Transmission $transmission)
    {
        return view('admin.transmission.form',['model'=>$transmission]);
    }
    public function update(TransmissionRequest $transmissionRequest,Transmission $transmission)
    {
        $this->service->update($transmissionRequest,$transmission);
        return redirect()->back();
    }
    public function destroy(Transmission $transmission)
    {
        $this->service->delete($transmission);
        return redirect()->back();
    }
}
