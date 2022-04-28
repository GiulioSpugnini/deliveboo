<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shopping_cart extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
