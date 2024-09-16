<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPlatformModelTranslation extends Model
{
    use HasFactory;
    protected $table='aboutplatform_translations';
    protected $guarded = [];
    public $timestamps=false;


}
