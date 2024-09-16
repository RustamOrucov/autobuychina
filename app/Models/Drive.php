<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drive extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table='drives';
    protected $guarded=[];
    public $translationModel=DriveTranslation::class;
    public $translatedAttributes = ['name'];


    public function cars()
    {
        return $this->hasMany(Car::class, 'drive_id');
    }
}
