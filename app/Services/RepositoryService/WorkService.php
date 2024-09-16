<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\WorkRequest;
use App\Models\Work;
use App\Repositories\WorkRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class WorkService
{
    public function __construct(protected WorkRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50,['translations']);
    }

    public function store(WorkRequest $workRequest)
    {
        $data=request()->all();
        $model= $this->repository->save($data,new Work());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(WorkRequest $workRequest, $model)
    {
        $data = $workRequest->all();



        $model = $this->repository->save($data, $model);

        self::clearCached();

        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedWork()
    {
        return Cache::rememberForever('work',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('work');
    }
}
