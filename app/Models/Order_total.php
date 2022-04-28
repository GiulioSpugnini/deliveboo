<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_total extends Model
{
    public function singleOrders()
    {
        return $this->hasMany('App\Models\Single_Order');
    }
    public function paymentDetail()
    {
        return $this->belongsTo('App\Models\Payment_detail');
    }
}
