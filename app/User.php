<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'is_admin', 'name', 'last_name', 'password', 'number', 'email', 'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function userInfo()
    {
        return $this->hasOne('App\Models\User_info');
    }
    public function shoppingCart()
    {
        return $this->hasOne('App\Models\Shopping_cart');
    }
    public function shoppingSession()
    {
        return $this->hasOne('App\Models\Shopping_session');
    }
    public function userPayments()
    {
        return $this->hasMany('App\Models\User_payment');
    }
}
