<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    use Translatable;
    protected $table='regions';
    protected $guarded=[];
    public $translationModel=RegionTranslation::class;
    public $translatedAttributes = ['name'];



    public function children()
    {
        return $this->hasMany(Region::class, 'parent_id');
    }


    public function cars(){
        return $this->hasMany(Car::class,'region_id');
    }


}
