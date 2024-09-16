<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\HiglitRequest;
use App\Models\Higlit;
use App\Repositories\HiglitRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class HiglitService
{
    public function __construct(protected HiglitRepository $repository,
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
        $model= $this->repository->save($data,new Higlit());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(HiglitRequest $higlitRequest, $model)
    {
        $data = $higlitRequest->all();

        $data['status'] = $higlitRequest->has('status') ? 1 : 0;


        $model = $this->repository->save($data, $model);

        self::clearCached();

        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedHiglit()
    {
        return Cache::rememberForever('higlit',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('higlit');
    }
}
