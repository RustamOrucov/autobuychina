<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\EngineTypeRequest;
use App\Models\EngineType;
use App\Repositories\EngineTypeRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class EngineTypeService
{
    public function __construct(protected EngineTypeRepository $repository,
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
        $model= $this->repository->save($data,new EngineType());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(EngineTypeRequest $engineTypeRequest, $model)
    {
        $data = $engineTypeRequest->all();
        $model = $this->repository->save($data, $model);
        self::clearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedEngineType()
    {
        return Cache::rememberForever('enginetype',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('enginetype');
    }
}
