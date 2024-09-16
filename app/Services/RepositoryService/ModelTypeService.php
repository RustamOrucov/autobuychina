<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\ModelTypeRequest;
use App\Models\Modeltype;
use App\Repositories\ModelTypeRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class ModelTypeService
{
    public function __construct(protected ModelTypeRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50,['translations']);
    }

    public function store()
    {
        $data = request()->all();
        $model = $this->repository->save($data, new Modeltype());
        self::clearCached();
        return $model;
    }
    public function update(ModelTypeRequest $modelTypeRequest, $model)
    {
        $data = $modelTypeRequest->all();
        $model = $this->repository->save($data, $model);
        self::clearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedModelType()
    {
        return Cache::rememberForever('modeltype',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('modeltype');
    }
}
