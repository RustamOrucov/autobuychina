<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\FuelTypeRequest;
use App\Models\FuelType;
use App\Repositories\FuelTypeRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class FuelTypeService
{
    public function __construct(protected FuelTypeRepository $repository,
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
        $model= $this->repository->save($data,new FuelType());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(FuelTypeRequest $fuelTypeRequest, $model)
    {
        $data = $fuelTypeRequest->all();

        $data['status'] = $fuelTypeRequest->has('status') ? 1 : 0;


        $model = $this->repository->save($data, $model);

        self::clearCached();

        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedFuelType()
    {
        return Cache::rememberForever('fueltype',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('fueltype');
    }
}
