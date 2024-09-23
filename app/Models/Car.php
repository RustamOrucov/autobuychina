<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    protected $table = 'cars';
    protected $guarded = [];
    public $translationModel = CarTranslation::class;
    public $translatedAttributes = ['name', 'item_comment'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function Higlit()
    {
        return $this->belongsTo(Higlit::class);
    }
    public function Odometer()
    {
        return $this->belongsTo(Odometer::class);
    }
    public function CarModels()
    {
        return $this->belongsTo(Carmodel::class);
    }
    public function ModelType()
    {
        return $this->belongsTo(Modeltype::class);
    }
    public function EngineWork()
    {
        return $this->belongsTo(EngineWork::class);
    }
    public function Ro()
    {
        return $this->belongsTo(Ro::class);
    }
    public function EngineVolume()
    {
        return $this->belongsTo(EngineVolume::class);
    }
    public function Damage()
    {
        return $this->belongsTo(Damage::class);
    }
    public function FuelType()
    {
        return $this->belongsTo(FuelType::class);
    }
    public function Transmission()
    {
        return $this->belongsTo(Transmission::class);
    }
    public function EngineType()
    {
        return $this->belongsTo(EngineType::class);
    }
    public function Cylinder()
    {
        return $this->belongsTo(Cylinder::class);
    }
    public function Drive()
    {

        return $this->belongsTo(Drive::class);
    }
    public function carImages()
    {
        return $this->hasMany(CarImage::class);
    }


    public function carModel()
    {
        return $this->belongsTo(Carmodel::class, 'car_models_id');
    }
    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);

    }
    public function ban()
    {

        return $this->belongsTo(Ban::class);
    }

     public function region(){
        return $this->belongsTo(Region::class,'region_id');
     }


}
