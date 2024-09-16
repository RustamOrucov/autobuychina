<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\CarModelRequest;
use App\Models\Carmodel;
use App\Repositories\CarModelRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class CarModelService
{
    public function __construct(protected CarModelRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50,['translations']);
    }

    public function store(CarModelRequest $carModelRequest)
    {
        $data=request()->all();
        $data['image'] = $this->fileUploadService->uploadFile($carModelRequest->image, 'car_model_image');
        $model= $this->repository->save($data,new Carmodel());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(CarModelRequest $carModelRequest, $model)
    {
        $data = $carModelRequest->all();

        $data['status'] = $carModelRequest->has('status') ? 1 : 0;

        if ($carModelRequest->has('image')) {
            $data['image'] = $this->fileUploadService->replaceFile($carModelRequest->image, $model->image, 'car_model_image');
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

    public function CachedCarModel()
    {
        return Cache::rememberForever('carmodel',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('carmodel');
    }
}
