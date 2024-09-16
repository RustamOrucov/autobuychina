<?php

namespace App\Services\RepositoryService;

use App\Http\Requests\BanRequest;
use App\Http\Requests\DriveRequest;
use App\Models\Ban;
use App\Models\Drive;
use App\Repositories\BanRepository;
use App\Repositories\DriveRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class BanService
{
    public function __construct(protected BanRepository $repository,
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
        $model= $this->repository->save($data,new Ban());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(BanRequest $banRequest, $model)
    {
        $data = $banRequest->all();

        $data['status'] = $banRequest->has('status') ? 1 : 0;


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
        return Cache::rememberForever('ban',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('ban');
    }
}
