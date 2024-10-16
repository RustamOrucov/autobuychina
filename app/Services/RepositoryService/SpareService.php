<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\SpareRequest;
use App\Models\Spare;
use App\Repositories\SpareRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class SpareService
{
    public function __construct(protected SpareRepository   $repository,
                                protected FileUploadService $fileUploadService)
    {
    }

    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50);
    }

    public function store(SpareRequest $spareRequest)
    {
        $data = $spareRequest->all();

//        if (isset($data['car_equipment']) && is_array($data['car_equipment'])) {
//            $data['car_equipment'] = json_encode($data['car_equipment']);
//        }

        $data['spare_image'] = $this->fileUploadService->uploadFile($spareRequest->spare_image, 'spare_image');

        $model = $this->repository->save($data, new Spare());

        self::clearCached();
        return $model;
    }

    public function update(SpareRequest $spareRequest, $model)
    {
        $data = $spareRequest->all();

        $data['status'] = $spareRequest->has('status') ? 1 : 0;
        if ($spareRequest->has('spare_image')) {
            $data['spare_image'] = $this->fileUploadService->replaceFile($spareRequest->spare_image, $model->spare_image, 'spare_image');
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

    public function CachedSpares()
    {
        return Cache::rememberForever('spare',
            function () {
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('spare');
    }


}
