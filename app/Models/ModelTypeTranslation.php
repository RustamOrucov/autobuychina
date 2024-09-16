<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTypeTranslation extends Model
{
    use HasFactory;

    protected $table='model_types_translations';
    protected $guarded = [];
    public $timestamps=false;
}
