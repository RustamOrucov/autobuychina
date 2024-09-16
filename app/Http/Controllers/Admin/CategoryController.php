<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Services\RepositoryService\CategoryService;

class CategoryController extends Controller
{
    public function __construct(protected CategoryService $service)
    {
    }

    public function index()
    {
        $models = Category::orderBy('position')->paginate(50);
        return view('admin.category.index', ['models' => $models]);
    }

    public function create()
    {
        return view('admin.category.form');
    }

    public function store()
    {
        $this->service->store();
        return redirect()->route('admin.category.index');
    }

    public function edit(Category $category)
    {
        return view('admin.category.form', ['model' => $category]);
    }

    public function changePosition($id, Request $request)
    {
        $category = Category::find($id);
        $direction = $request->input('direction');

        if ($direction === 'up') {
            $previousCategory = Category::where('position', '<', $category->position)->orderBy('position', 'desc')->first();

            if ($previousCategory) {
                $category->position--;
                $previousCategory->position++;
                $category->save();
                $previousCategory->save();
            }
        } else if ($direction === 'down') {
            $nextCategory = Category::where('position', '>', $category->position)->orderBy('position', 'asc')->first();

            if ($nextCategory) {
                $category->position++;
                $nextCategory->position--;
                $category->save();
                $nextCategory->save();
            }
        }

        return response()->json(['success' => true]);
    }

    public function update(CategoryRequest $categoryRequest, Category $category)
    {
        $this->service->update($categoryRequest, $category);
        return redirect()->back();
    }

    public function destroy(Category $category)
    {
        $this->service->delete($category);
        return redirect()->back();
    }
}
