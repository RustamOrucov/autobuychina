<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OdometerTranslation extends Model
{
    use HasFactory;

    protected $table='odometers_translations';
    protected $guarded = [];
    public $timestamps=false;
}
