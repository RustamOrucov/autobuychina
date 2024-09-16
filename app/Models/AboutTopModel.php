<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTopModel extends Model implements TranslatableContract
{
    use HasFactory;use Translatable;
    protected $guarded=[];
    protected $table = 'abouttop';
    public $translationModel=AboutTopModelTranslation::class;
    public $translatedAttributes = ['header','text'];

    public $timestamps = false;
}
