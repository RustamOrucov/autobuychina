<?php

namespace App\Services\RepositoryService;

use App\Http\Requests\MarketRequest;
use App\Http\Requests\RegionRequest;
use App\Models\Market;
use App\Models\Region;
use App\Repositories\MarketRepository;
use App\Repositories\RegionRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class MarketService
{
    public function __construct(protected MarketRepository $repository,
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
        $model= $this->repository->save($data,new Market());
        self::ClearCached();
        return $model;
    }
    public function update(MarketRequest $marketRequest, $model)
    {
        $data = $marketRequest->all();

        $data['status'] = $marketRequest->has('status') ? 1 : 0;


        $model = $this->repository->save($data, $model);

        self::clearCached();

        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedDrive()
    {
        return Cache::rememberForever('market',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('market');
    }
}
