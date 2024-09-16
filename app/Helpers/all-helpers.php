<?php


//use App\Models\Page;
use App\Models\StaticModel;

if (!function_exists('smkey')) {

    function smkey($key)
    {
        $smkey = StaticModel::where('key',$key)->first()->title ?? null;
        return $smkey;
    }

}
//if (!function_exists('pages_')) {
//
//    function pages_($slug)
//    {
//        $page = Page::whereTranslation('slug',$slug)->first() ?? null;
//        return $page;
//    }
//
//}


