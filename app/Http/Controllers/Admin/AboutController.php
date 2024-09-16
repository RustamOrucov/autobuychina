<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutPlatformModel;
use App\Models\AboutSliderModel;
use App\Models\AboutTopModel;
use App\Models\GlobalCountModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function editTop(){

        $model=AboutTopModel::first();

        return view('admin.aboutus.topform',compact('model'));
    }

    public function storeTop(Request $request)
    {
        $data = AboutTopModel::first();

        if ($request->hasFile('background')) {
            $background = $request->file('background');

            if ($data->background) {
                Storage::disk('public')->delete($data->background);
            }

            $filename = uniqid() . '.' . $background->getClientOriginalExtension();
            $path = $background->storeAs('topimages', $filename, 'public');
            $data->background = $path;
        }

        foreach ($request->all() as $lang => $topData) {
            if (is_array($topData)) {
                $data->translateOrNew($lang)->header = $topData['header'];
                $data->translateOrNew($lang)->text = $topData['text'];
            }
        }

        $data->save();

        return redirect()->back()->with('success', 'Data stored successfully.');
    }


    public function editPlatform(){
       $model=AboutPlatformModel::first();
        return view('admin.aboutus.platformform',compact('model'));

    }
    public function storePlatform(Request $request) {
        $data = AboutPlatformModel::first();

        if ($request->hasFile('bgone')) {
            $background = $request->file('bgone');

            if ($data->bgone) {
                Storage::disk('public')->delete($data->bgone);
            }

            $filename = uniqid() . '.' . $background->getClientOriginalExtension();
            $path = $background->storeAs('platformimages', $filename, 'public');
            $data->bgone = $path;
        }

        if ($request->hasFile('bgtwo')) {
            $background = $request->file('bgtwo');

            if ($data->bgtwo) {
                Storage::disk('public')->delete($data->bgtwo);
            }

            $filename = uniqid() . '.' . $background->getClientOriginalExtension();
            $path = $background->storeAs('platformimages', $filename, 'public');
            $data->bgtwo = $path;
        }

        if ($request->hasFile('bgthree')) {
            $background = $request->file('bgthree');

            if ($data->bgthree) {
                Storage::disk('public')->delete($data->bgthree);
            }

            $filename = uniqid() . '.' . $background->getClientOriginalExtension();
            $path = $background->storeAs('platformimages', $filename, 'public');
            $data->bgthree = $path;
        }

        foreach ($request->all() as $lang => $topData) {
            if (is_array($topData)) {
                $data->translateOrNew($lang)->header = $topData['header'];
                $data->translateOrNew($lang)->text = $topData['text'];
            }
        }

        $data->save();

        return redirect()->back()->with('success', 'Data stored successfully.');
    }

   public function editGlobalcount(){
     $sliderimages=AboutSliderModel::get();
     $model=GlobalCountModel::first();
    return view('admin.aboutus.globalcountform',['sliderimages'=>$sliderimages,'model'=>$model]);
   }

   public function storeslider(Request $request)
{
    $data = new AboutSliderModel();

    if (isset($request->image) && $request->hasFile('image')) {
        $background = $request->file('image');
        $filename = uniqid() . '.' . $background->getClientOriginalExtension();
        $path = $background->storeAs('aboutslider', $filename, 'public');
        $data->image = $path;

        $data->save();

        return redirect()->back()->with('success', 'Image stored successfully.');
    }

    return redirect()->back()->with('error', 'No image uploaded.');
}
public function destroysliderimage($id)
{
    $image = AboutSliderModel::find($id);

    if ($image) {
        Storage::disk('public')->delete($image->image);
        $image->delete();

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }

    return redirect()->back()->with('error', 'Image not found.');
}


public function storeGlobalcount(Request $request)
{
    $data =GlobalCountModel::first();

    if ($request->hasFile('bgone')) {
        $background = $request->file('bgone');
        if ($data->bgone) {
            Storage::disk('public')->delete($data->bgone);
        }
        $filename = uniqid() . '.' . $background->getClientOriginalExtension();
        $path = $background->storeAs('globalcountsimage', $filename, 'public');
        $data->bgone = $path;
    }

    if ($request->hasFile('bgtwo')) {
        $background = $request->file('bgtwo');
        if ($data->bgtwo) {
            Storage::disk('public')->delete($data->bgtwo);
        }
        $filename = uniqid() . '.' . $background->getClientOriginalExtension();
        $path = $background->storeAs('globalcountsimage', $filename, 'public');
        $data->bgtwo = $path;
    }

    if ($request->hasFile('bgthree')) {
        $background = $request->file('bgthree');
        if ($data->bgthree) {
            Storage::disk('public')->delete($data->bgthree);
        }
        $filename = uniqid() . '.' . $background->getClientOriginalExtension();
        $path = $background->storeAs('globalcountsimage', $filename, 'public');
        $data->bgthree = $path;
    }

    foreach ($request->all() as $lang => $topData) {
        if (is_array($topData)) {
            $translation = $data->translateOrNew($lang);
            $translation->header = $topData['header'] ?? null;
            $translation->title = $topData['title'] ?? null;
            $translation->textone = $topData['textone'] ?? null;
            $translation->texttwo = $topData['texttwo'] ?? null;
            $translation->textthree = $topData['textthree'] ?? null;
            $translation->countone = $topData['countone'] ?? null;
            $translation->counttwo = $topData['counttwo'] ?? null;
            $translation->countthree = $topData['countthree'] ?? null;
        }
    }

    $data->save();

    return redirect()->back()->with('success', 'Data stored successfully.');
}


}
