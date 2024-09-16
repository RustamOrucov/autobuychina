<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoTranslations extends Model
{
    use HasFactory;

    protected $table='ros_translations';
    protected $guarded = [];
    public $timestamps=false;
}
