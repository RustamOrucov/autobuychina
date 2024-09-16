<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HiglitRequest;
use App\Models\Higlit;
use App\Services\RepositoryService\HiglitService;

class HiglitController extends Controller
{
    public function __construct(protected HiglitService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.higlit.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.higlit.form');
    }
    public function store(HiglitRequest $higlitRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($higlitRequest);
        return redirect()->route('admin.higlit.index');
    }
    public function edit(Higlit $higlit)
    {
        return view('admin.higlit.form',['model'=>$higlit]);
    }
    public function update(HiglitRequest $higlitRequest,Higlit $higlit)
    {
        $this->service->update($higlitRequest,$higlit);
        return redirect()->back();
    }
    public function destroy(Higlit $higlit)
    {
        $this->service->delete($higlit);
        return redirect()->back();
    }
}
