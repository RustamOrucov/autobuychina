<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SpareImage extends Model
{
    use HasFactory;
    protected $table = 'spare_images';
    protected $fillable = ['image','spare_id'];

    public function car() : BelongsTo
    {
        return $this->belongsTo(Spare::class,'spare_id','id');
    }
}
