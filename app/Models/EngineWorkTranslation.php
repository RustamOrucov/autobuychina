<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineWorkTranslation extends Model
{
    use HasFactory;

    protected $table='engine_works_translations';
    protected $guarded = [];
    public $timestamps=false;
}
