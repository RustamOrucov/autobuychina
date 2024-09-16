<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransmissionTranslation extends Model
{
    use HasFactory;

    protected $table='transmissions_translations';
    protected $guarded = [];
    public $timestamps=false;
}
