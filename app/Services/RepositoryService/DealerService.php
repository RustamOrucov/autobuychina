<?php

namespace App\Services\RepositoryService;

use App\Http\Requests\DelaerProfileUpdateRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRequest;
use App\Models\Dealer;
use App\Models\User;
use App\Repositories\DealerRepository;
use App\Repositories\UserRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class DealerService
{
    public function __construct(
        protected DealerRepository $repository,
        protected FileUploadService $fileUploadService
    ) {}
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50);
    }

    public function store(RegisterRequest $dealerRequest)
    {
        $data = $dealerRequest->all();
        unset($data['password_confirmation']);
        $data['wallet'] = 0;
        $data['password'] = Hash::make($dealerRequest->password);
        $data['passport_front'] = $this->fileUploadService->uploadFile($dealerRequest->passport_front, 'dealer');
        $data['passport_back'] = $this->fileUploadService->uploadFile($dealerRequest->passport_back, 'dealer');

        $model = $this->repository->save($data, new Dealer());

        self::clearCached();
        return $model;
    }
    public function update(DelaerProfileUpdateRequest $profilerequest, $model)
    {
        $data = $profilerequest->all();
        unset($data['password_confirmation']);
        if ($profilerequest->has('logo')) {
            $data['logo'] = $this->fileUploadService->replaceFile($profilerequest->logo, $model->logo, 'logo');
        }
        if ($profilerequest->has('background')) {
            $data['background'] = $this->fileUploadService->replaceFile($profilerequest->background, $model->background, 'background');
        }
        if ($profilerequest->filled('password')) {
            $data['password'] = bcrypt($profilerequest->password);
        } else {
            $data['password'] = $model->password; 
        }

        $model = $this->repository->save($data, $model);

        self::clearCached();
        return $model;
    }
    //
    //    public function delete($model)
    //    {
    //        self::ClearCached();
    //        return $this->repository->delete($model);
    //    }
    //
    public function CachedUser()
    {
        return Cache::rememberForever(
            'dealer',
            function () {
                return $this->repository->all();
            }
        );
    }

    public static function ClearCached()
    {
        Cache::forget('dealer');
    }
}