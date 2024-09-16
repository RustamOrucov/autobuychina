<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ban extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $table='bans';
    protected $guarded=[];
    public $translationModel=BanTranslation::class;
    public $translatedAttributes = ['name'];


    public function cars()
    {
        return $this->hasMany(Car::class, 'ban_id');
    }
}
