<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MarketRequest;
use App\Http\Requests\RegionRequest;
use App\Models\Market;
use App\Models\Region;
use App\Services\RepositoryService\BanService;
use App\Services\RepositoryService\MarketService;
use App\Services\RepositoryService\RegionService;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function __construct(protected MarketService $service)
    {

    }


    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.market.index',['models'=>$models]);
    }

    public function create()
    {
        return view('admin.market.form');
    }
    public function store(MarketRequest $marketRequest)
    {
        $this->service->store($marketRequest);
        return redirect()->route('admin.market.index');
    }

    public function edit(Market $market)
    {
        return view('admin.market.form',['model'=>$market]);
    }

    public function update(MarketRequest $marketRequest,market $market)
    {
        $this->service->update($marketRequest,$market);
        return redirect()->back();
    }

    public function destroy(Market $market)
    {
        $this->service->delete($market);
        return redirect()->back();
    }


}
