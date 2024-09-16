<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuctionTimeRequest;
use App\Models\AuctionTime;
use App\Services\RepositoryService\AuctionTimeService;

class AuctionTimeController extends Controller
{
    public function __construct(protected AuctionTimeService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.auctiontime.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.auctiontime.form');
    }
    public function store(AuctionTimeRequest $auctionTimeRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($auctionTimeRequest);
        return redirect()->route('admin.auctiontime.index');
    }
    public function edit(AuctionTime $auctiontime)
    {
        return view('admin.auctiontime.form',['model'=>$auctiontime]);
    }
    public function update(AuctionTimeRequest $auctionTimeRequest,AuctionTime $auctiontime)
    {
        $this->service->update($auctionTimeRequest,$auctiontime);
        return redirect()->back();
    }
    public function destroy(AuctionTime $auctiontime)
    {
        $this->service->delete($auctiontime);
        return redirect()->back();
    }
}
