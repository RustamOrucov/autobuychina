<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoRequest;
use App\Models\Ro;
use App\Services\RepositoryService\RoService;

class RoController extends Controller
{
    public function __construct(protected RoService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.ros.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.ros.form');
    }
    public function store(RoRequest $roRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($roRequest);
        return redirect()->route('admin.ros.index');
    }
    public function edit(Ro $ro)
    {
        return view('admin.ros.form',['model'=>$ro]);
    }
    public function update(RoRequest $roRequest,Ro $ro)
    {
        $this->service->update($roRequest,$ro);
        return redirect()->back();
    }
    public function destroy(Ro $ro)
    {
        $this->service->delete($ro);
        return redirect()->back();
    }
}
