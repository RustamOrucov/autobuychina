<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\SocialRequest;
use App\Models\Social;
use App\Repositories\SocialRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class SocialService
{
    public function __construct(protected SocialRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(10);
    }

    public function store(SocialRequest $socialRequest)
    {
        $data=$socialRequest->all();

        $data['image'] = $this->fileUploadService->uploadFile($socialRequest->image, 'social');

        $model= $this->repository->save($data,new Social());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();
        if ($request->has('image')) {
            $data['image'] = $this->fileUploadService->replaceFile($request->image, $model->image, 'social');
        }
        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedSocial()
    {
        return Cache::rememberForever('social',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('social');
    }
}
