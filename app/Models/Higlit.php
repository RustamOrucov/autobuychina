<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Higlit extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table='higlits';
    protected $guarded=[];
    public $translationModel=HiglitTranslation::class;
    public $translatedAttributes = ['name'];
}
