<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SeoUpdateRequest;
use App\Models\logoimages;
use App\Models\SiteSeo;
use App\Services\RepositoryService\ModelTypeService;
use App\Services\RepositoryService\SiteSeoService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\LogoUpdateRequest;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function __construct(protected SiteSeoService $service)
    {

    }
    public function logoForm(){
        $logoimages=logoimages::first();
        return view('admin.sitesettings.logoform',compact('logoimages'));
    }

    public function logoUpdate(LogoUpdateRequest $request)
    {


        $settings =logoimages::find(1);

        if (!$settings) {
            return redirect()->back()->with('error', 'Not found !');
        }
        if ($request->hasFile('icon')) {
            if ($settings->icon) {
                Storage::disk('public')->delete($settings->icon);
            }
            $iconName = Str::random(10) . '.' . $request->file('icon')->extension();
            $iconPath = $request->file('icon')->storeAs('logoimages', $iconName, 'public');
            $settings->icon = $iconPath;
        }

        if ($request->hasFile('d_logo')) {
            if ($settings->d_logo) {
                Storage::disk('public')->delete($settings->d_logo);
            }
            $dLogoName = Str::random(10) . '.' . $request->file('d_logo')->extension();
            $dLogoPath = $request->file('d_logo')->storeAs('logoimages', $dLogoName, 'public');
            $settings->d_logo = $dLogoPath;
        }

        if ($request->hasFile('m_logo')) {
            if ($settings->m_logo) {
                Storage::disk('public')->delete($settings->m_logo);
            }
            $mLogoName = Str::random(10) . '.' . $request->file('m_logo')->extension();
            $mLogoPath = $request->file('m_logo')->storeAs('logoimages', $mLogoName, 'public');
            $settings->m_logo = $mLogoPath;
        }

        if ($request->hasFile('f_logo')) {
            if ($settings->f_logo) {
                Storage::disk('public')->delete($settings->f_logo);
            }
            $fLogoName = Str::random(10) . '.' . $request->file('f_logo')->extension();
            $fLogoPath = $request->file('f_logo')->storeAs('logoimages', $fLogoName, 'public');
            $settings->f_logo = $fLogoPath;
        }

        $settings->save();

        return redirect()->back()->with('success', 'Logo update successfuly.');
    }


    public function seoForm(){
       $model=SiteSeo::first();
        return view('admin.sitesettings.seoform',['model'=>$model]);
    }


    public function  seoupdate(SeoUpdateRequest $request)

    {
        $seo =SiteSeo::first();
        $seo->save();

        foreach ($request->all() as $lang => $seoData) {
            if (is_array($seoData)) {
                $seo->translateOrNew($lang)->seo_title = $seoData['seo_title'];
                $seo->translateOrNew($lang)->seo_description = $seoData['seo_description'];
                $seo->translateOrNew($lang)->seo_key = $seoData['seo_key'];
            }
        }


        $seo->save();

        return redirect()->back()->with('success', 'Seo data update successfuly.');
    }



}
