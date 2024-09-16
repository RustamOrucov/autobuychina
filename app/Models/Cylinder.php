<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cylinder extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table='cylinders';
    protected $guarded=[];
    public $translationModel=CylinderTranslation::class;
    public $translatedAttributes = ['name'];
}
