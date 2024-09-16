<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\YoutubeVideoRequest;
use App\Models\YoutubeVideo;
use App\Repositories\YoutubeVideoRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class YoutubeVideoService
{
    public function __construct(protected YoutubeVideoRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50);
    }

    public function store(YoutubeVideoRequest $youtubeVideoRequest)
    {
        $data=$youtubeVideoRequest->all();
        $data['image'] = $this->fileUploadService->uploadFile($youtubeVideoRequest->image, 'ytb_image');
        $model= $this->repository->save($data,new YoutubeVideo());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(YoutubeVideoRequest $youtubeVideoRequest, $model)
    {
        $data = $youtubeVideoRequest->all();
        if ($youtubeVideoRequest->has('image')) {
            $data['image'] = $this->fileUploadService->replaceFile($youtubeVideoRequest->image, $model->image, 'ytb_image');
        }
        $model = $this->repository->save($data, $model);

        self::clearCached();

        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedYoutubeVideo()
    {
        return Cache::rememberForever('youtubevideo',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('youtubevideo');
    }
}
