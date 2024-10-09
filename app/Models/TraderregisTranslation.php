<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraderregisTranslation extends Model
{
    use HasFactory;
    protected $table='traders_translations';
    protected $guarded = [];
    public $timestamps=false;
}
