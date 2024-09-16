<?php

namespace App\Services\RepositoryService;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function __construct(protected UserRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50);
    }

    public function store(UserRequest $userRequest)
    {
        $data = $userRequest->all();
        $data['wallet'] = 0;
        $data['password'] = Hash::make($userRequest->password);
        $data['passport_front'] = $this->fileUploadService->uploadFile($userRequest->passport_front, 'user');
        $data['passport_back'] = $this->fileUploadService->uploadFile($userRequest->passport_back, 'user');

        $model = $this->repository->save($data, new User());

        self::clearCached();
        return $model;
    }
    public function update(UserRequest $userRequest, $model)
    {
        $data = $userRequest->all();

        $data['status'] = $userRequest->has('status') ? 1 : 0;
        if ($userRequest->has('passport_front')) {
            $data['passport_front'] = $this->fileUploadService->replaceFile($userRequest->passport_front, $model->passport_front, 'passport');
        }
        if ($userRequest->has('passport_back')) {
            $data['passport_back'] = $this->fileUploadService->replaceFile($userRequest->passport_back, $model->passport_back, 'passport');
        }

        $model = $this->repository->save($data, $model);

        self::clearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedUser()
    {
        return Cache::rememberForever('user',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('user');
    }
}
