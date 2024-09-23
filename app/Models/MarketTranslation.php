<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketTranslation extends Model
{
    use HasFactory;

    protected $table='markets_translations';
    protected $guarded = [];
    public $timestamps=false;

}
