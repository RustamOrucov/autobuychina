<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements AuthenticatableContract
{
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'surname',
        'address',
        'fin_code',
        'email',
        'password',
        'phone',
        'wallet',
        'passport_front',
        'passport_back',
        'status',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }
}
