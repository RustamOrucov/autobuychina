<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CylinderTranslation extends Model
{
    use HasFactory;

    protected $table='cylinders_translations';
    protected $guarded = [];
    public $timestamps=false;
}
