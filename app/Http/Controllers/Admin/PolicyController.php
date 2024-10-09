<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PolicyRequest;
use App\Models\Policy;
use App\Services\RepositoryService\PolicyService;

class PolicyController extends Controller
{
    public function __construct(protected PolicyService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.policy.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.policy.form');
    }
    public function store(PolicyRequest $policyRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($policyRequest);
        return redirect()->route('admin.policy.index');
    }
    public function edit(Policy $policy)
    {
        return view('admin.policy.form',['model'=>$policy]);
    }
    public function update(PolicyRequest $policyRequest,Policy $policy)
    {
        $this->service->update($policyRequest,$policy);
        return redirect()->back();
    }
    public function destroy(Policy $policy)
    {
        $this->service->delete($policy);
        return redirect()->back();
    }
}
