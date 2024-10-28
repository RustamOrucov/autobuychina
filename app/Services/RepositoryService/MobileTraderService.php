<?php

namespace App\Services\RepositoryService;

use App\Http\Requests\MobileRegisterRequest;
use App\Models\Traderregis;
use App\Repositories\TraderRegisRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class MobileTraderService
{
    public function __construct(
        protected TraderRegisRepository $repository,
        protected FileUploadService $fileUploadService
    ) {}
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50);
    }

    public function store(MobileRegisterRequest $dealerRequest)
    {
        $data = $dealerRequest->all();
        unset($data['password_confirmation']);
        unset($data['costumer']);
        $data['wallet'] = 0;
        $data['password'] = Hash::make($dealerRequest->password);
        $data['passport_front'] = $this->fileUploadService->uploadFile($dealerRequest->passport_front, 'trader');
        $data['passport_back'] = $this->fileUploadService->uploadFile($dealerRequest->passport_back, 'trader');
        $data['business_foto'] = $this->fileUploadService->uploadFile($dealerRequest->business_foto, 'trader');

        $model = $this->repository->save($data, new Traderregis());

        self::clearCached();
        return redirect()->back()->with('success', 'Registration successful!');
    }
    // public function update(TraderProfileUpdateRequest $traderProfileUpdateRequest, $model)
    // {
    //     $data = $traderProfileUpdateRequest->all();
    //     unset($data['password_confirmation']);

    //     if ($traderProfileUpdateRequest->has('logo')) {
    //         $data['logo'] = $this->fileUploadService->replaceFile($traderProfileUpdateRequest->logo, $model->logo, 'logo');
    //     }
    //     if ($traderProfileUpdateRequest->has('background')) {
    //         $data['background'] = $this->fileUploadService->replaceFile($traderProfileUpdateRequest->background, $model->background, 'background');
    //     }
    //     if ($traderProfileUpdateRequest->filled('password')) {
    //         $data['password'] = bcrypt($traderProfileUpdateRequest->password);
    //     } else {
    //         $data['password'] = $model->password;
    //     }

    //     $model = $this->repository->save($data, $model);

    //     self::clearCached();
    //     return $model;
    // }
    //
    //    public function delete($model)
    //    {
    //        self::ClearCached();
    //        return $this->repository->delete($model);
    //    }
    //
    public function CachedTrader()
    {
        return Cache::rememberForever(
            'trader',
            function () {
                return $this->repository->all();
            }
        );
    }

    public static function ClearCached()
    {
        Cache::forget('trader');
    }
}
