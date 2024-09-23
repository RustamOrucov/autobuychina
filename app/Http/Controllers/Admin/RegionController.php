<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegionRequest;
use App\Models\Region;
use App\Services\RepositoryService\BanService;
use App\Services\RepositoryService\RegionService;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function __construct(protected RegionService $service)
    {

    }


    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.region.index',['models'=>$models]);
    }

    public function create()
    {
        return view('admin.region.form');
    }
    public function store(RegionRequest $regionRequest)
    {
        $this->service->store($regionRequest);
        return redirect()->route('admin.region.index');
    }

    public function edit(Region $region)
    {
        return view('admin.region.form',['model'=>$region]);
    }

    public function update(RegionRequest $regionRequest,region $region)
    {
        $this->service->update($regionRequest,$region);
        return redirect()->back();
    }

    public function destroy(Region $region)
    {
        $this->service->delete($region);
        return redirect()->back();
    }


}
