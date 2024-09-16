<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FuelTypeRequest;
use App\Models\FuelType;
use App\Services\RepositoryService\FuelTypeService;

class FuelTypeController extends Controller
{
    public function __construct(protected FuelTypeService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.fueltype.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.fueltype.form');
    }
    public function store(FuelTypeRequest $fuelTypeRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($fuelTypeRequest);
        return redirect()->route('admin.fueltype.index');
    }
    public function edit(FuelType $fueltype)
    {
        return view('admin.fueltype.form',['model'=>$fueltype]);
    }
    public function update(FuelTypeRequest $fuelTypeRequest,FuelType $fueltype)
    {
        $this->service->update($fuelTypeRequest,$fueltype);
        return redirect()->back();
    }
    public function destroy(FuelType $fueltype)
    {
        $this->service->delete($fueltype);
        return redirect()->back();
    }
}
