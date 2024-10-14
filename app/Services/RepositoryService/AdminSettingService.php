<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\AdminSettingRequest;
use App\Models\AdminSetting;
use App\Repositories\AdminSettingRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class AdminSettingService
{
    public function __construct(protected AdminSettingRepository $repository,
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
        $model= $this->repository->save($data,new AdminSetting());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(AdminSettingRequest $adminSettingRequest, $model)
    {
        $data = $adminSettingRequest->all();
        $model = $this->repository->save($data, $model);

        self::clearCached();

        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedAdminSetting()
    {
        return Cache::rememberForever('adminsetting',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('adminsetting');
    }
}
