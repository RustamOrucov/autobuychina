<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Repositories\CarRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class CarService
{
    public function __construct(protected CarRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }

    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50);
    }

    public function store(CarRequest $carRequest)
    {
        $data = $carRequest->all();

        if (isset($data['car_equipment']) && is_array($data['car_equipment'])) {
            $data['car_equipment'] = json_encode($data['car_equipment']);
        }

        $data['car_image'] = $this->fileUploadService->uploadFile($carRequest->car_image, 'car_image');

        $model = $this->repository->save($data, new Car());

        self::clearCached();
        return $model;
    }
    public function update(CarRequest $carRequest, $model)
    {
        $data = $carRequest->all();

        $data['status'] = $carRequest->has('status') ? 1 : 0;
        if ($carRequest->has('car_image')) {
            $data['car_image'] = $this->fileUploadService->replaceFile($carRequest->car_image, $model->car_image, 'car_image');
        }


        $model = $this->repository->save($data, $model);

        self::clearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedCars()
    {
        return Cache::rememberForever('car',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('car');
    }
}
