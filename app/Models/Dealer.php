<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table='dealers';
    protected $guarded=[];
    public $translationModel=DealTranslation::class;
    public $translatedAttributes = ['title','content'];
}
