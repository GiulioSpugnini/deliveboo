<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment_detail extends Model
{
    public function orderTotal()
    {
        return $this->hasOne('App\Models\Order_total');
    }
}
