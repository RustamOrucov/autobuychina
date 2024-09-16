<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ModelTypeRequest;
use App\Models\Carmodel;
use App\Models\Modeltype;
use App\Services\RepositoryService\ModelTypeService;

class ModelTypeController extends Controller
{
    public function __construct(protected ModelTypeService $service)
    {

    }

    public function index()
    {
//        dd(Modeltype::all()->toArray(),Carmodel::all()->toArray());
        $models = Modeltype::with('carModel')->paginate(50);
        return view('admin.modeltype.index', ['models' => $models]);
    }
    public function create()
    {
        $carmodels = Carmodel::all();
        return view('admin.modeltype.form',compact('carmodels'));
    }
    public function store()
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store();
        return redirect()->route('admin.modeltype.index');
    }
    public function edit(Modeltype $modeltype)
    {
        $carmodels = Carmodel::all();
        return view('admin.modeltype.form',['model'=>$modeltype,'carmodels' => $carmodels]);
    }




    public function update(ModelTypeRequest $modelTypeRequest ,Modeltype $modeltype)
    {
        $this->service->update($modelTypeRequest,$modeltype);
        return redirect()->back();
    }
    public function destroy(Modeltype $modeltype)
    {
        $this->service->delete($modeltype);
        return redirect()->back();
    }
}
