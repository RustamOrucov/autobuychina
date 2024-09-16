<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SoldRequest;
use App\Models\Sold;
use App\Services\RepositoryService\SoldService;

class SoldController extends Controller
{
    public function __construct(protected SoldService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.sold.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.sold.form');
    }
    public function store(SoldRequest $soldRequest)
    {
        $this->service->store($soldRequest);
        return redirect()->route('admin.sold.index');
    }
    public function edit(Sold $sold)
    {
        return view('admin.sold.form',['model'=>$sold]);
    }
    public function update(SoldRequest $soldRequest, Sold $sold)
    {
        $this->service->update($soldRequest,$sold);
        return redirect()->back();
    }
    public function destroy(Sold $sold)
    {
        $this->service->delete($sold);
        return redirect()->back();
    }
}
