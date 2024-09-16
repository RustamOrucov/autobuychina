<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Carmodel;
use App\Models\Category;
use App\Models\Cylinder;
use App\Models\Drive;
use App\Models\FuelType;
use App\Models\Higlit;
use App\Models\Modeltype;
use App\Models\Transmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $key = $request->input('key');
        $keywords = explode(' ', strtolower($key));
        $year = null;
        $filteredKeywords = [];

        foreach ($keywords as $word) {
            if (is_numeric($word) && strlen($word) == 4) {
                $year = $word;
            } else {
                $filteredKeywords[] = $word;
            }
        }


        $carmodelIds = Carmodel::where(function ($query) use ($keywords) {
            foreach ($keywords as $keyword) {
                $query->orWhereHas('translations', function ($subQuery) use ($keyword) {
                    $subQuery->where(DB::raw('LOWER(name)'), 'like', '%' . strtolower($keyword) . '%');
                });
            }
        })->pluck('id');

        $modeltypeIds = Modeltype::where(function ($query) use ($keywords) {
            foreach ($keywords as $keyword) {
                $query->orWhereHas('translations', function ($subQuery) use ($keyword) {
                    $subQuery->where(DB::raw('LOWER(name)'), 'like', '%' . strtolower($keyword) . '%');
                });
            }
        })->pluck('id');

        $cars = Car::where(function ($query) use ($carmodelIds, $modeltypeIds, $year) {
            if ($carmodelIds->isNotEmpty()) {
                $query->whereIn('car_models_id', $carmodelIds);
            }
            if ($modeltypeIds->isNotEmpty()) {
                $query->whereIn('model_type_id', $modeltypeIds);
            }
            if ($year) {
                $query->where(DB::raw('year'), 'like', '%' . $year . '%');
            }
        })->with('translation')->paginate(40);




        return view('front.pages.search', [
            'categories' => $categories,
            'key' => $key,
             'cars'=>$cars,
        ]);
    }


    public function keySearch(Request $request){


        $id=$request->input('cat_id');
        $ksearch=$request->input('ksearch');
        $cat_id=$id;
        $categories = Category::all();
        $cars = Car::whereHas('translations', function ($query) use ($request) {
            $query->where('name', 'like', '%' . $request->input('ksearch') . '%');
        })->where('status', 1)->orderBy('created_at', 'desc')->with('fuelType')->paginate(40);

        $carsCategory = Category::where('id', $id)->first();

       

        //   filter data
        $highlights = Higlit::with('translations')->get();
        $carmodels = Carmodel::with(['translations', 'cars' => function ($query) use ($id) {
            $query->where('category_id', $id);
        }])->get();



        $modeltypes = Modeltype::with('translations')->with('carModel')->get();
        $fueltypes = FuelType::with('translation')->get();
        $cylinders = Cylinder::with('translations')->get();
        $drives = Drive::with('translations')->get();
        $transmisions = Transmission::with('translations')->get();




        return view('front.pages.cars', compact('cars', 'categories', 'carsCategory', 'highlights', 'carmodels', 'modeltypes', 'fueltypes', 'cylinders', 'drives', 'transmisions','cat_id','ksearch'));

    }


}
