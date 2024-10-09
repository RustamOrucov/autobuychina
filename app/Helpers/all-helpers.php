<?php


//use App\Models\Page;
use App\Models\StaticModel;

if (!function_exists('sitekey')) {
    function sitekey($key, $field = 'title')
    {
        $staticModel = StaticModel::where('key', $key)->first();
        return $staticModel ? $staticModel->{$field} : null;
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


