<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\MainSliderRequest;
use App\Models\MainSlider;
use App\Repositories\MainSliderRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class MainSliderService
{
    public function __construct(protected MainSliderRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(10,);
    }

    public function store(MainSliderRequest $mainSliderRequest)
    {
        $data=$mainSliderRequest->all();

        $data['image'] = $this->fileUploadService->uploadFile($mainSliderRequest->image, 'mainslider');

        $model= $this->repository->save($data,new MainSlider());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();
        if ($request->has('image')) {
            $data['image'] = $this->fileUploadService->replaceFile($request->image, $model->image, 'mainslider');
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

    public function CachedMainSlider()
    {
        return Cache::rememberForever('mainslider',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('mainslider');
    }
}
