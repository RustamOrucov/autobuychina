<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Ban;
use App\Models\Carmodel;
use App\Models\Cylinder;
use App\Models\Damage;
use App\Models\EngineVolume;
use App\Models\FuelType;
use App\Models\Higlit;
use App\Models\Market;
use App\Models\Modeltype;
use App\Models\Region;
use App\Models\Ro;
use App\Models\Transmission;
use App\Models\Year;
use Illuminate\Http\Request;

class CarController extends Controller
{
    private function getFilterData()
    {
        return [
            'brands' => Carmodel::all(),
            'models' => Modeltype::all(),
            'currencies' => Ro::all(),
            'bans' => Ban::all(),
            'years' => Year::orderBy('year', 'desc')->get(),
            'colors' => Cylinder::all(),
            'fueltypes' => FuelType::all(),
            'transmissions' => Transmission::all(),
            'damages' => Damage::all(),
            'enginevolumes' => EngineVolume::all(),
            'higlits' => Higlit::all(),
            'regions' => Region::all(),
            'markets' => Market::all(),
        ];
    }

    public function newcar(){

        $filters = $this->getFilterData();

       return view('front.pages.new-car',array_merge($filters));
    }
}
