<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Damage extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table='damages';
    protected $guarded=[];
    public $translationModel=DamageTranslation::class;
    public $translatedAttributes = ['name'];
}
