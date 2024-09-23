<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;
    use Translatable;
    protected $table='markets';
    protected $guarded=[];
    public $translationModel=MarketTranslation::class;
    public $translatedAttributes = ['name'];





}
