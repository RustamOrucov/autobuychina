<?php

namespace App\Services\RepositoryService;

use App\Http\Requests\SpareFrontRequest;
use App\Http\Requests\SpareRequest;
use App\Models\Spare;
use App\Repositories\SpareRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
class SpareFrontService
{

    public function __construct(protected SpareRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }

    public static function ClearCached()
    {
        Cache::forget('spare');
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50);
    }


    public function store(SpareFrontRequest $spareRequest)
    {
        $data = $spareRequest->all();

//        if (isset($data['car_equipment']) && is_array($data['car_equipment'])) {
//            $data['car_equipment'] = json_encode($data['car_equipment']);
//        }

        $spareImages = $spareRequest->file('spareimages');
        $firstImage = array_shift($spareImages);

        $data['spare_image'] = $this->fileUploadService->uploadFile($firstImage, 'spare_image');
        unset($data['spareimages']);
        $spare = $this->repository->save($data, new Spare());

        foreach ($spareImages as $image) {
            $imagePath = $this->fileUploadService->uploadFile($image, 'spare_images');
            DB::table('spare_images')->insert([
                'spare_id' => $spare->id,
                'image' => $imagePath,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        self::clearCached();
        return $spare;
    }




}
