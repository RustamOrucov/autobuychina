<?php

namespace App\Services\RepositoryService;


use App\Http\Requests\AuctionTimeRequest;
use App\Models\AuctionTime;
use App\Repositories\AuctionTimeRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;

class AuctionTimeService
{
    public function __construct(protected AuctionTimeRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50);
    }

    public function store()
    {
        $data=request()->all();
        $model= $this->repository->save($data,new AuctionTime());
//        dd($model->all());
        self::ClearCached();
        return $model;
    }
    public function update(AuctionTimeRequest $auctionTimeRequest, $model)
    {
        $data = $auctionTimeRequest->all();
        $model = $this->repository->save($data, $model);
        self::clearCached();
        return $model;
    }

    public function delete($model)
    {
        self::ClearCached();
        return $this->repository->delete($model);
    }

    public function CachedAuctionTime()
    {
        return Cache::rememberForever('auctiontime',
            function (){
                return $this->repository->all();
            });
    }

    public static function ClearCached()
    {
        Cache::forget('auctiontime');
    }
}
