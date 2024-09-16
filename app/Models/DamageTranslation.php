<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DamageTranslation extends Model
{
    use HasFactory;

    protected $table='damages_translations';
    protected $guarded = [];
    public $timestamps=false;
}
