<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odometer extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table='odometers';
    protected $guarded=[];
    public $translationModel=OdometerTranslation::class;
    public $translatedAttributes = ['name'];
}
