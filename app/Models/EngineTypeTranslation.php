<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineTypeTranslation extends Model
{
    use HasFactory;

    protected $table='engine_types_translations';
    protected $guarded = [];
    public $timestamps=false;
}
