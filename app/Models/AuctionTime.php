<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionTime extends Model
{
    use HasFactory;
    protected $table = 'auction_time';
    protected $fillable = ['time'];
}
