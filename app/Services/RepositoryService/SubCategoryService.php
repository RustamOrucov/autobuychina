<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\SubCategoryRequest;
use App\Models\Subcategory;
use App\Repositories\SubCategoryRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class SubCategoryService
{
    public function __construct(protected SubCategoryRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50,['translations']);
    }

    public function store()
    {
        $data = request()->all();
        $model = $this->repository->save($data, new Subcategory());
        self::clearCached();
        return $model;
    }
    public function update(SubCategoryRequest $subCategoryRequest, $model)
    {
        $data = $subCategoryRequest->all();
        $data['status'] = $subCategoryRequest->has('status') ? 1 : 0;

        $model = $this->repository->save($data, $model);
        self::clearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedSubCategory()
    {
        return Cache::rememberForever('subcategory',
            function (){
                return $this->repository->all(with:['translations']);
            });
    }

    public static function ClearCached()
    {
        Cache::forget('subcategory');
    }
}
