<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialRequest;
use App\Models\Social;
use App\Services\RepositoryService\SocialService;

class SocialController extends Controller
{
    public function __construct(protected SocialService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.social.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.social.form');
    }
    public function store(SocialRequest $socialRequest)
    {
        $this->service->store($socialRequest);
        return redirect()->route('admin.social.index');
    }
    public function edit(Social $social)
    {
        return view('admin.social.form',['model'=>$social]);
    }
    public function update(SocialRequest $socialRequest, Social $social)
    {
        $this->service->update($socialRequest,$social);
        return redirect()->back();
    }
    public function destroy(Social $social)
    {
        $this->service->delete($social);
        return redirect()->back();
    }
}
