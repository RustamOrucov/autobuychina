<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table='policys';
    protected $guarded=[];
    public $translationModel=PolicyTranslation::class;
    public $translatedAttributes = ['agreement','rules'];
}
