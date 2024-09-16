<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\TransmissionRequest;
use App\Models\Transmission;
use App\Repositories\TransmissionRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class TransmissionService
{
    public function __construct(protected TransmissionRepository $repository,
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
        $model= $this->repository->save($data,new Transmission());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(TransmissionRequest $transmissionRequest, $model)
    {
        $data = $transmissionRequest->all();
        $model = $this->repository->save($data, $model);
        self::clearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedTransmission()
    {
        return Cache::rememberForever('transmission',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('transmission');
    }
}
