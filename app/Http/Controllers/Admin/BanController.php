<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BanRequest;
use App\Models\Ban;
use App\Services\RepositoryService\BanService;
use Illuminate\Http\Request;

class BanController extends Controller
{
    public function __construct(protected BanService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.ban.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.ban.form');
    }
    public function store(BanRequest $banRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($banRequest);
        return redirect()->route('admin.ban.index');
    }
    public function edit(Ban $ban)
    {
        return view('admin.ban.form',['model'=>$ban]);
    }
    public function update(BanRequest $banRequest,ban $ban)
    {
        $this->service->update($banRequest,$ban);
        return redirect()->back();
    }
    public function destroy(Ban $ban)
    {
        $this->service->delete($ban);
        return redirect()->back();
    }
}
