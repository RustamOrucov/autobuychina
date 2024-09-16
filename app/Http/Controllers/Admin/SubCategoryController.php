<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Models\Category;
use App\Models\Subcategory;
use App\Services\RepositoryService\SubCategoryService;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function __construct(protected SubCategoryService $service)
    {

    }

    public function index()
    {

        $models = Subcategory::with('category.translations')->orderBy('position')->paginate(50);

        return view('admin.subcategory.index', ['models' => $models]);
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategory.form',compact('categories'));
    }
    public function store()
    {
//        dd($homeSliderRequest->toArray());
        $this->service->store();
        return redirect()->route('admin.subcategory.index');
    }
    public function edit(Subcategory $subcategory)
    {
        $categories = Category::all();
        return view('admin.subcategory.form',['model'=>$subcategory,'categories' => $categories]);
    }

    public function changePosition($id, Request $request)
    {
        $category = Subcategory::find($id);
        $direction = $request->input('direction');


        if ($direction === 'up') {
            $previousCategory = Subcategory::where('position', '<', $category->position)->orderBy('position', 'desc')->first();

            if ($previousCategory) {
                $category->position--;
                $previousCategory->position++;
                $category->save();
                $previousCategory->save();
            }


        } else if ($direction === 'down') {
            $nextCategory = Subcategory::where('position', '>', $category->position)->orderBy('position', 'asc')->first();
            if ($nextCategory) {
                $category->position++;
                $nextCategory->position--;
                $category->save();
                $nextCategory->save();
            }
        }

        return response()->json(['success' => true]);
    }


    public function update(SubCategoryRequest $subCategoryRequest ,Subcategory $subcategory)
    {
        $this->service->update($subCategoryRequest,$subcategory);
        return redirect()->back();
    }
    public function destroy(Subcategory $subcategory)
    {
        $this->service->delete($subcategory);
        return redirect()->back();
    }
}
