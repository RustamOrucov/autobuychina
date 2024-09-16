<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarImageRequest;
use App\Models\CarImage;
use App\Services\RepositoryService\CarImageService;
use Flasher\Laravel\Http\Request;

class CarImageController extends Controller
{
    public function __construct(protected CarImageService $service)
    {
    }

    public function index($carId)
    {
        $models = $this->service->dataAllWithPaginate($carId);
        return view('admin.carimage.index',['models'=>$models,'carId'=>$carId]);
    }
    public function create($carId)
    {
        return view('admin.carimage.form',['carId'=>$carId]);
    }
    public function store(CarImageRequest $carImageRequest, $carId)
    {

        $model = $this->service->store($carImageRequest, $carId);
        return redirect()->route('admin.carimage.index', ['carId' => $model->car_id]);
    }

    public function edit(CarImage $carimage)
    {
        
        return view('admin.carimage.form',['model'=>$carimage]);
    }

    public function update(CarImageRequest $carImageRequest, CarImage $carimage)
    {
        $this->service->update($carImageRequest,$carimage);
        return redirect()->back();
    }
    public function destroy(CarImage $carimage)
    {
        $this->service->delete($carimage);
        return redirect()->back();
    }
}
