<?php

namespace App\Services\RepositoryService;


use App\Models\StaticModel;
use App\Repositories\StaticRepository;
use Illuminate\Support\Facades\Cache;

class TranslationService
{
    public function __construct(protected StaticRepository $repository)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(30,['translations']);
    }

    public function store()
    {
//        dd($sliderRequest);
        $data=request()->all();
        $model= $this->repository->save($data,new StaticModel());

        self::ClearCached();
        return $model;
    }
    public function update($model)
    {
        $data=request()->all();
        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedStatics()
    {
        return Cache::rememberForever('statics',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('statics');
    }
}
