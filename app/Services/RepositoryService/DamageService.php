<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\DamageRequest;
use App\Models\Damage;
use App\Repositories\DamageRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class DamageService
{
    public function __construct(protected DamageRepository $repository,
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
        $model= $this->repository->save($data,new Damage());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(DamageRequest $damageRequest, $model)
    {
        $data = $damageRequest->all();
        $model = $this->repository->save($data, $model);
        self::clearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedDamage()
    {
        return Cache::rememberForever('damage',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('damage');
    }
}
