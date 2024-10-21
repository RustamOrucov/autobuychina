<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpareTranslation extends Model
{
    use HasFactory;

    protected $table='spares_translations';
    protected $guarded = [];
    public $timestamps=false;
}
