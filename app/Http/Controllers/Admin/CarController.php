<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Ban;
use App\Models\Car;
use App\Models\Carmodel;
use App\Models\Category;
use App\Models\Cylinder;
use App\Models\Damage;
use App\Models\Drive;
use App\Models\EngineType;
use App\Models\EngineVolume;
use App\Models\EngineWork;
use App\Models\FuelType;
use App\Models\Higlit;
use App\Models\Market;
use App\Models\Modeltype;
use App\Models\Odometer;
use App\Models\Region;
use App\Models\Ro;
use App\Models\Subcategory;
use App\Models\Transmission;
use App\Services\RepositoryService\CarService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CarController extends Controller
{
    public function __construct(protected CarService $service)
    {

    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.car.index',['models'=>$models]);
    }
    public function create()
    {

        $categories = Category::all();
        $higlits = Higlit::all();
        $odometers = Odometer::all();
        $carmodels = Carmodel::all();
        $modeltypes = Modeltype::all();
        $engineworks = EngineWork::all();
        $ros = Ro::all();
        $enginevolumes = EngineVolume::all();
        $damages = Damage::all();
        $fueltypes = FuelType::all();
        $transmissions = Transmission::all();
        $enginetypes = EngineType::all();
        $cylinders = Cylinder::all();
        $drives = Drive::all();
        $bans=Ban::all();
        $cities=Region::all();
        $markets=Market::all();

        return view('admin.car.form',compact('categories', 'higlits',  'odometers','carmodels','modeltypes',
            'engineworks','ros', 'enginevolumes','damages','fueltypes','transmissions','enginetypes', 'cylinders','drives','bans','cities','markets'));
    }
        public function store(CarRequest $carRequest)
    {

            Log::info('CarRequest Data:', $carRequest->all());
        $this->service->store($carRequest);
        return redirect()->route('admin.car.index');
    }
    public function edit(Car $car)
    {
        $categories = Category::all();
        $higlits = Higlit::all();
        $odometers = Odometer::all();
        $carmodels = Carmodel::all();
        $modeltypes = Modeltype::all();
        $engineworks = EngineWork::all();
        $ros = Ro::all();
        $enginevolumes = EngineVolume::all();
        $damages = Damage::all();
        $fueltypes = FuelType::all();
        $transmissions = Transmission::all();
        $enginetypes = EngineType::all();
        $cylinders = Cylinder::all();
        $drives = Drive::all();
        $bans=Ban::all();
        $cities=Region::all();
        $markets=Market::all();


        return view('admin.car.form',['model'=>$car],compact('categories', 'higlits',  'odometers','carmodels','modeltypes',
            'engineworks','ros', 'enginevolumes','damages','fueltypes','transmissions','enginetypes', 'cylinders','drives','bans','cities','markets'));
    }
    public function update(CarRequest $carRequest,Car $car)
    {


        $this->service->update($carRequest,$car);
        return redirect()->back();
    }
    public function destroy(Car $car)
    {
        $this->service->delete($car);
        return redirect()->back();
    }
}
