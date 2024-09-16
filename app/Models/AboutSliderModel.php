<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSliderModel extends Model
{
    use HasFactory;
    protected $fillable=['image'];
    protected $table = 'aboutsliderimages';
    public $timestamps=false;
}
