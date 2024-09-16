<?php

namespace App\Services\RepositoryService;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class CategoryService
{
    public function __construct(
        protected CategoryRepository $repository,
        protected FileUploadService $fileUploadService
    ) {
    }

    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(10, ['translations']);
    }

    public function store()
    {
        $data = request()->all();
        $model = $this->repository->save($data, new Category());
        self::ClearCached();
        return $model;
    }

    public function update(CategoryRequest $categoryRequest, $model)
    {
        $data = $categoryRequest->all();
        $data['status'] = $categoryRequest->has('status') ? 1 : 0;

        $model = $this->repository->save($data, $model);
        self::ClearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedCategories()
    {
        return Cache::rememberForever('category', function () {
            return $this->repository->all(['translations'])->sortBy('position');
        });
    }

    public static function ClearCached()
    {
        Cache::forget('category');
    }
}
