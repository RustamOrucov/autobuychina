<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelTypeTranslation extends Model
{
    use HasFactory;

    protected $table='fuel_types_translations';
    protected $guarded = [];
    public $timestamps=false;
}
