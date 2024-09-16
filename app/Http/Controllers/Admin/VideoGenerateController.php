<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class VideoGenerateController extends Controller
{
    public function index()
    {
        return view('admin.youtubevideo.create-video');
    }

}
