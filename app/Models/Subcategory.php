<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    protected $table = 'subcategories';
    protected $guarded=[];
    public $translationModel=SubcategoryTranslation::class;
    public $translatedAttributes = ['name'];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $maxPosition = self::max('position');
            $model->position = $maxPosition + 1;
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
