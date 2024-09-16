<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPlatformModel extends Model implements TranslatableContract
{
    use HasFactory;use Translatable;
    protected $guarded=[];
    protected $table = 'aboutplatform';
    public $translationModel=AboutPlatformModelTranslation::class;
    public $translatedAttributes = ['header','text'];

    public $timestamps = false;

}

