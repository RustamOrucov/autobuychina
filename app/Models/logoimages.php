<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logoimages extends Model
{
    use HasFactory;
    protected $table = 'logoimages';
    protected $fillable = ['icon','d_logo','m_logo','f_logo'];
}
