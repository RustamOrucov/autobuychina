<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineType  extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table='engine_types';
    protected $guarded=[];
    public $translationModel=EngineTypeTranslation::class;
    public $translatedAttributes = ['name'];
}
