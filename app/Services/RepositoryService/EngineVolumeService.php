<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\EngineVolumeRequest;
use App\Models\EngineVolume;
use App\Repositories\EngineVolumeRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class EngineVolumeService
{
    public function __construct(protected EngineVolumeRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50,['translations']);
    }

    public function store()
    {
        $data=request()->all();
        $model= $this->repository->save($data,new EngineVolume());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(EngineVolumeRequest $engineVolumeRequest, $model)
    {
        $data = $engineVolumeRequest->all();
        $model = $this->repository->save($data, $model);
        self::clearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedEngineVolume()
    {
        return Cache::rememberForever('enginevolume',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('enginevolume');
    }
}
