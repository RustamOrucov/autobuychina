<?php

namespace App\Services\RepositoryService;

use App\Http\Requests\RegionRequest;
use App\Models\Region;
use App\Repositories\RegionRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class RegionService
{
    public function __construct(protected RegionRepository $repository,
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
        $model= $this->repository->save($data,new Region());
        self::ClearCached();
        return $model;
    }
    public function update(RegionRequest $regionRequest, $model)
    {
        $data = $regionRequest->all();

        $data['status'] = $regionRequest->has('status') ? 1 : 0;


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
        return Cache::rememberForever('region',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('region');
    }
}
