<?php

namespace App\Services\RepositoryService;

use App\Repositories\AdminRepository;
use App\Repositories\CarImageRepository;
use App\Services\FileUploadService;

class AdminService
{

    public function __construct(protected AdminRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }

    public function dataAllWithPaginate($carId)
    {
        return $this->repository->query()->where('car_id',$carId)->get();
    }


}
