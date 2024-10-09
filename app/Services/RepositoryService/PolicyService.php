<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\PolicyRequest;
use App\Models\Policy;
use App\Repositories\PolicyRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class PolicyService
{
    public function __construct(protected PolicyRepository $repository,
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
        $model= $this->repository->save($data,new Policy());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(PolicyRequest $policyRequest, $model)
    {
        $data = $policyRequest->all();



        $model = $this->repository->save($data, $model);

        self::clearCached();

        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedPolicy()
    {
        return Cache::rememberForever('policy',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('policy');
    }
}
