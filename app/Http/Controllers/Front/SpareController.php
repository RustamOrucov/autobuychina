<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\SpareFrontRequest;
use App\Models\Ban;
use App\Models\Carmodel;
use App\Models\Category;
use App\Models\Cylinder;
use App\Models\Damage;
use App\Models\Drive;
use App\Models\EngineVolume;
use App\Models\FuelType;
use App\Models\Higlit;
use App\Models\Market;
use App\Models\Modeltype;
use App\Models\Region;
use App\Models\Ro;
use App\Models\Transmission;
use App\Models\Year;
use App\Services\RepositoryService\SpareFrontService;
use App\Services\RepositoryService\SpareService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class SpareController extends Controller
{

    public function __construct(protected SpareFrontService $service)
    {

    }


    private function getFilterData()
    {
        return [
            'categories' => Category::all(),
            'regions' => Region::all(),
            'ro' => Ro::all(),
        ];
    }

    public function newspare()
    {

        $filters = $this->getFilterData();

        return view('front.pages.new-spare', array_merge($filters));
    }

    public function storeSpare(SpareFrontRequest $spareRequest)
    {

        Log::info('SpareRequest Data:', $spareRequest->all());
        $this->service->store($spareRequest);

        return redirect()->route('home')->with('success', 'Post add successfuly');
    }
}
