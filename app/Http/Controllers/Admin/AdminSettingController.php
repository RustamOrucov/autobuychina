<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminSettingRequest;
use App\Models\AdminSetting;
use App\Services\RepositoryService\AdminSettingService;


class AdminSettingController extends Controller
{
    public function __construct(protected AdminSettingService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.adminsetting.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.adminsetting.form');
    }
    public function store(AdminSettingRequest $adminSettingRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($adminSettingRequest);
        return redirect()->route('admin.adminsetting.index');
    }
    public function edit(AdminSetting $adminsetting)
    {
        return view('admin.adminsetting.form',['model'=>$adminsetting]);
    }
    public function update(AdminSettingRequest $adminSettingRequest,Higlit $adminsetting)
    {
        $this->service->update($adminSettingRequest,$adminsetting);
        return redirect()->back();
    }
    public function destroy(AdminSetting $adminsetting)
    {
        $this->service->delete($adminsetting);
        return redirect()->back();
    }
}
