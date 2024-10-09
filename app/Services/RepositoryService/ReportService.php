<?php

namespace App\Services\RepositoryService;

use App\Models\Ban;
use App\Models\ReportModel;
use App\Repositories\BanRepository;
use App\Repositories\ReportRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class ReportService
{
    public function __construct(protected ReportRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }

    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50);
    }

    public function store()
    {
        $data=request()->all();
        $model= $this->repository->save($data,new ReportModel());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }

    public function CachedDrive()
    {
        return Cache::rememberForever('report',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('report');
    }
}
