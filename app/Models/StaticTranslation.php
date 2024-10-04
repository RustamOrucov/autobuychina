<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaticTranslation extends Model
{
    protected $table='statics_translations';
    protected $guarded=[];
    public $timestamps=false;
}
