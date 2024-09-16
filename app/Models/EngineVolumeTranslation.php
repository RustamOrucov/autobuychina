<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineVolumeTranslation extends Model
{
    use HasFactory;

    protected $table='engine_volumes_translations';
    protected $guarded = [];
    public $timestamps=false;
}
