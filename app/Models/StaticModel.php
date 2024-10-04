<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class StaticModel extends Model implements TranslatableContract
{
    use Translatable;

    protected $table='statics';
    protected $guarded=[];
    public $timestamps=false;

    public $translationModel=StaticTranslation::class;
    public $translatedAttributes = ['title','text','desc','name'];
}
