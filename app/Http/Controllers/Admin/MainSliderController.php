<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainSliderRequest;
use App\Models\MainSlider;
use App\Services\RepositoryService\MainSliderService;

class MainSliderController extends Controller
{
    public function __construct(protected MainSliderService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.mainslider.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.mainslider.form');
    }
    public function store(MainSliderRequest $mainSliderRequest)
    {
        $this->service->store($mainSliderRequest);
        return redirect()->route('admin.mainslider.index');
    }
    public function edit(MainSlider $mainslider)
    {
        return view('admin.mainslider.form',['model'=>$mainslider]);
    }
    public function update(MainSliderRequest $mainSliderRequest, MainSlider $mainslider)
    {
        $this->service->update($mainSliderRequest,$mainslider);
        return redirect()->back();
    }
    public function destroy(MainSlider $mainslider)
    {
        $this->service->delete($mainslider);
        return redirect()->back();
    }
}
