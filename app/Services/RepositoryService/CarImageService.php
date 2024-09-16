<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\CarImageRequest;
use App\Models\CarImage;
use App\Repositories\CarImageRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class CarImageService
{
    public function __construct(protected CarImageRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }


    public function dataAllWithPaginate($carId)
    {
        return $this->repository->query()->where('car_id',$carId)->get();
    }

    public function store(CarImageRequest $carImageRequest, $carId)
    {
        $data = $carImageRequest->all();
        $data['car_id'] = $carId;

        if ($carImageRequest->hasFile('image')) {
            $data['image'] = $this->fileUploadService->uploadFile($carImageRequest->file('image'), 'carimage');
        }


    
        $model = $this->repository->save($data, new CarImage());

        self::clearCached();
        return $model;
    }
    public function update(CarImageRequest $carImageRequest, $model)
    {
        $data = $carImageRequest->all();

        if ($carImageRequest->has('car_images')) {
            $data['image'] = $this->fileUploadService->replaceFile($carImageRequest->image, $model->car_image, 'car_images');
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

    public function CachedCarImage()
    {
        return Cache::rememberForever('car_image',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('car_image');
    }
}
