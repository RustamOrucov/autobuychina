<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\EngineWorkRequest;
use App\Models\EngineWork;
use App\Repositories\EngineWorkRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class EngineWorkService
{
    public function __construct(protected EngineWorkRepository $repository,
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
        $model= $this->repository->save($data,new EngineWork());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(EngineWorkRequest $engineWorkRequest, $model)
    {
        $data = $engineWorkRequest->all();
        $model = $this->repository->save($data, $model);
        self::clearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedEngineWork()
    {
        return Cache::rememberForever('enginework',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('enginework');
    }
}
