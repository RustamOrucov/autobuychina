<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carmodel extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table='carmodels';
    protected $guarded=[];
    public $translationModel=CarModelTranslation::class;
    public $translatedAttributes = ['name'];

    public function modelTypes()
    {
        return $this->hasMany(Modeltype::class, 'car_models_id');
    }

    public function cars()
    {
        return $this->hasMany(Car::class, 'car_models_id');
    }
    
}
