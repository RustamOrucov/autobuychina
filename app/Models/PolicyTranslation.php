<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyTranslation extends Model
{
    use HasFactory;

    protected $table='policys_translations';
    protected $guarded = [];
    public $timestamps=false;
}
