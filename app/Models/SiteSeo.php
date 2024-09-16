<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSeo extends Model implements TranslatableContract
{
    use HasFactory;    use Translatable;
    protected $table='siteseo';
    protected $fillable = ['seo_title', 'seo_description', 'seo_keywords'];

    public $translationModel=SiteSeoTranslations::class;
    public $translatedAttributes = ['seo_title', 'seo_description', 'seo_keywords'];
}
