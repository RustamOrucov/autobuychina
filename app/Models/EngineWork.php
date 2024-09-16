<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineWork extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table='engine_works';
    protected $guarded=[];
    public $translationModel=EngineWorkTranslation::class;
    public $translatedAttributes = ['name'];
}
