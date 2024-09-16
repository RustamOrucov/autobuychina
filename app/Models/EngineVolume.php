<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineVolume extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table='engine_volumes';
    protected $guarded=[];
    public $translationModel=EngineVolumeTranslation::class;
    public $translatedAttributes = ['name'];
}
