<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\RoRequest;
use App\Models\Ro;
use App\Repositories\RoRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class RoService
{
    public function __construct(protected RoRepository $repository,
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
        $model= $this->repository->save($data,new Ro());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(RoRequest $roRequest, $model)
    {
        $data = $roRequest->all();
        $model = $this->repository->save($data, $model);
        self::clearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedRos()
    {
        return Cache::rememberForever('ros',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('ros');
    }
}
