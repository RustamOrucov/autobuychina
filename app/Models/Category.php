<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table='categories';
    protected $guarded=[];
    public $translationModel=CategoryTranslation::class;
    public $translatedAttributes = ['name'];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $maxPosition = self::max('position');
            $model->position = $maxPosition + 1;
        });
    }
}
