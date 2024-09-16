<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticeRequest;
use App\Models\NoticeModel;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestStatus\Notice;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = NoticeModel::all();
        return view('admin.notice.notice', compact('notices'));
    }

    public function store(NoticeRequest $request)
    {


        $data = new NoticeModel();
        foreach ($request->all() as $lang => $topData) {
            if (is_array($topData)) {
                $translation = $data->translateOrNew($lang);


                $translation->header = $topData['header'] ?? null;
                $translation->title = $topData['title'] ?? null;
                $translation->content = $topData['content'] ?? null;
            }
        }


        $data->save();

        return redirect()->back()->with('success', 'Notice saved successfully.');
    }


    public function edit($id)
    {
        $model = NoticeModel::with('translations')->findOrFail($id);
        $notices = NoticeModel::all();
        return view('admin.notice.notice', ['notices' => $notices, 'model' => $model]);
    }


    public function update(NoticeRequest $request, $id)
    {
        $data = NoticeModel::findOrFail($id);

        foreach ($request->all() as $lang => $topData) {
            if (is_array($topData)) {

                $data->translateOrNew($lang)->title = $topData['title'];
                $data->translateOrNew($lang)->header = $topData['header'];
                $data->translateOrNew($lang)->content = $topData['content'];
            }
        }

        $data->save();

        return redirect()->route('admin.notice.index')->with('success', 'Notice updated successfully.');
    }

    public function destroy($id)
    {
        $data = NoticeModel::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.notice.index')->with('success', 'Notice deleted successfully.');
    }


}
