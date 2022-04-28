<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shopping_cart extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
