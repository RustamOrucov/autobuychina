<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\OdometerRequest;
use App\Models\Odometer;
use App\Repositories\OdometerRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class OdometerService
{
    public function __construct(protected OdometerRepository $repository,
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
        $model= $this->repository->save($data,new Odometer());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(OdometerRequest $odometerRequest, $model)
    {
        $data = $odometerRequest->all();
        $model = $this->repository->save($data, $model);
        self::clearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedOdometer()
    {
        return Cache::rememberForever('odometer',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('odometer');
    }
}
