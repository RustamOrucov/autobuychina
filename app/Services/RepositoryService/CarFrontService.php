<?php

namespace App\Services\RepositoryService;

use App\Http\Requests\CarFrontRequest;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Repositories\CarRepository;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
class CarFrontService
{

    public function __construct(protected CarRepository $repository,
                                protected FileUploadService $fileUploadService)
    {
    }

    public static function ClearCached()
    {
        Cache::forget('car');
    }
    public function dataAllWithPaginate()
    {
        return $this->repository->paginate(50);
    }


    public function store(CarFrontRequest $carRequest)
    {
        $data = $carRequest->all();

        if (isset($data['car_equipment']) && is_array($data['car_equipment'])) {
            $data['car_equipment'] = json_encode($data['car_equipment']);
        }

        $carImages = $carRequest->file('carimages');
        $firstImage = array_shift($carImages);

        $data['car_image'] = $this->fileUploadService->uploadFile($firstImage, 'car_image');
        unset($data['carimages']);
        $car = $this->repository->save($data, new Car());

        foreach ($carImages as $image) {
            $imagePath = $this->fileUploadService->uploadFile($image, 'car_images');
            DB::table('car_images')->insert([
                'car_id' => $car->id,
                'image' => $imagePath,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        self::clearCached();
        return $car;
    }




}
