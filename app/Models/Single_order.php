<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Single_order extends Model
{
    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }
    public function orderTotal()
    {
        return $this->belongsTo('App\Models\Order_total');
    }
}
