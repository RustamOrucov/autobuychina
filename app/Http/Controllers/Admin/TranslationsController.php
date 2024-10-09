<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StaticModel;
use App\Services\RepositoryService\TranslationService;

class TranslationsController extends Controller
{
    public function __construct(protected TranslationService $service)
    {

    }

    public function getTranslationsData($key)
    {
        $translation = StaticModel::where('key', $key)->first();

        if (!$translation) {
            return response()->json(['error' => 'Translation not found'], 404);
        }

        return response()->json($translation);
    }

    public function index()
    {
        $models=$this->service->dataAllWithPaginate();
        return view('admin.staticModel.index',['models'=>$models]);
    }
    public function create()
    {
        return view('admin.staticModel.form');
    }
    public function store()
    {
//        dd($sliderRequest->toArray());
        $this->service->store();
        return redirect()->route('admin.staticModel.index');
    }
    public function edit(StaticModel $staticModel)
    {
        return view('admin.staticModel.form',['model'=>$staticModel]);
    }
    public function update(StaticModel $staticModel)
    {
        $this->service->update($staticModel);
        return redirect()->back();
    }
    public function destroy(StaticModel $staticModel)
    {
        $this->service->delete($staticModel);
        return redirect()->back();
    }
}
