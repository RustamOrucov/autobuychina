<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modeltype extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $table = 'model_types';
    protected $fillable = ['name', 'car_models_id'];
    public $translationModel=ModelTypeTranslation::class;
    public $translatedAttributes = ['name'];

    public function carModel()
    {
        return $this->belongsTo(Carmodel::class, 'car_models_id');
    }
}
