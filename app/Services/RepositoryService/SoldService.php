<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\SoldRequest;
use App\Models\Sold;
use App\Repositories\SoldRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class SoldService
{
    public function __construct(protected SoldRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(10,);
    }

    public function store(SoldRequest $soldRequest)
    {
        $data=$soldRequest->all();

        $data['image'] = $this->fileUploadService->uploadFile($soldRequest->image, 'sold_image');

        $model= $this->repository->save($data,new Sold());

        self::ClearCached();
        return $model;
    }
    public function update($request,$model)
    {
        $data=$request->all();
        if ($request->has('image')) {
            $data['image'] = $this->fileUploadService->replaceFile($request->image, $model->image, 'sold_image');
        }
        $model=$this->repository->save($data,$model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedSold()
    {
        return Cache::rememberForever('sold',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('sold');
    }
}
