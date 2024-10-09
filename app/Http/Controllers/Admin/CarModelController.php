<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarModelRequest;
use App\Models\Carmodel;
use App\Services\RepositoryService\CarModelService;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    public function __construct(protected CarModelService  $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.carmodel.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.carmodel.form');
    }
    public function store(CarModelRequest $carModelRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($carModelRequest);
        return redirect()->route('admin.carmodel.index');
    }
    public function edit(Carmodel $carmodel)
    {
        return view('admin.carmodel.form',['model'=>$carmodel]);
    }
    public function update(CarModelRequest $carModelRequest,Carmodel $carmodel)
    {
        $this->service->update($carModelRequest,$carmodel);
        return redirect()->back();
    }
    public function destroy(Carmodel $carmodel)
    {
        $this->service->delete($carmodel);
        return redirect()->back();
    }
}
