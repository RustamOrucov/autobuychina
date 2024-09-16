<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sold extends Model
{
    protected $table = 'sold';

    protected $fillable = [
        'image',
        'name'
    ];
}
