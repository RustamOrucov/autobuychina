<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HiglitTranslation extends Model
{
    use HasFactory;

    protected $table='higlits_translations';
    protected $guarded = [];
    public $timestamps=false;
}
