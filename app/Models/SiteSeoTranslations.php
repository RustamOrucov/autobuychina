<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSeoTranslations extends Model
{
    use HasFactory;
    protected $table='siteseo_translations';
    protected $guarded = [];
    public $timestamps=false;
}
