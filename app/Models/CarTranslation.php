<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarTranslation extends Model
{
    use HasFactory;

    protected $table='cars_translations';
    protected $guarded = [];
    public $timestamps=false;
}
