<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubcategoryTranslation extends Model
{
    use HasFactory;

    protected $table='subcategories_translations';
    protected $guarded = [];
    public $timestamps=false;
}
