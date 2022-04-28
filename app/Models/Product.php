<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function shoppingCart()
    {
        return $this->belongsTo('App\Models\Shopping_cart');
    }
    public function business()
    {
        return $this->belongsTo('App\Models\Business');
    }
    public function singleOrder()
    {
        return $this->hasOne('App\Models\Single_Order');
    }
}
