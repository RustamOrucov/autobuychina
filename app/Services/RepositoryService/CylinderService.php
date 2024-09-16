<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\CylinderRequest;
use App\Models\Cylinder;
use App\Repositories\CylinderRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class CylinderService
{
    public function __construct(protected CylinderRepository $repository,
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
        $model= $this->repository->save($data,new Cylinder());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(CylinderRequest $cylinderRequest, $model)
    {
        $data = $cylinderRequest->all();

        $data['status'] = $cylinderRequest->has('status') ? 1 : 0;


        $model = $this->repository->save($data, $model);

        self::clearCached();

        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedCylinder()
    {
        return Cache::rememberForever('cylinder',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('cylinder');
    }
}
