<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriveTranslation extends Model
{
    use HasFactory;

    protected $table='drives_translations';
    protected $guarded = [];
    public $timestamps=false;
}
