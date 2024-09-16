<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModelTranslation extends Model
{
    use HasFactory;

    protected $table='carmodels_translations';
    protected $guarded = [];
    public $timestamps=false;
}
