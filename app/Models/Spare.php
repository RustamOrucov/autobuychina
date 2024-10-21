<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spare extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    protected $table = 'spares';
    protected $guarded = [];
    public $translationModel = SpareTranslation::class;
    public $translatedAttributes = ['name', 'item_comment'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function Trader()
    {
        return $this->belongsTo(Traderregis::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);

    }

    public function region(){
        return $this->belongsTo(Region::class,'region_id');
    }

    public function spareImages()
    {
        return $this->hasMany(SpareImage::class);
    }
}
