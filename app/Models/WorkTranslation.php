<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkTranslation extends Model
{
    use HasFactory;

    protected $table='works_translations';
    protected $guarded = [];
    public $timestamps=false;
}
