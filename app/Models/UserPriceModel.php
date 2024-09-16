<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPriceModel extends Model
{
    use HasFactory;
    protected $table = 'users_prices';

     protected  $fillable=['user_id','price','car_id'];


     public function user(){
         return $this->belongsTo('App\Models\UserModel');
     }
     public function car(){
         return $this->belongsTo('App\Models\CarModel');
     }
}
