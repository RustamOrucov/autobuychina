<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\YoutubeVideoRequest;
use App\Models\YoutubeVideo;
use App\Services\RepositoryService\YoutubeVideoService;

class YoutubeVideoController extends Controller
{
    public function __construct(protected YoutubeVideoService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.youtubevideo.index',['models'=>$models]);
    }


    public function create()
    {
        return view('admin.youtubevideo.form');
    }
    public function store(YoutubeVideoRequest $youtubeVideoRequest)
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store($youtubeVideoRequest);
        return redirect()->route('admin.youtubevideo.index');
    }
    public function edit(YoutubeVideo $youtubevideo)
    {
        return view('admin.youtubevideo.form',['model'=>$youtubevideo]);
    }
    public function update(YoutubeVideoRequest $youtubeVideoRequest,YoutubeVideo $youtubevideo)
    {
        $this->service->update($youtubeVideoRequest,$youtubevideo);
        return redirect()->back();
    }
    public function destroy(YoutubeVideo $youtubevideo)
    {
        $this->service->delete($youtubevideo);
        return redirect()->back();
    }
}
