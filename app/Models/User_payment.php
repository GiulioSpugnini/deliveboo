<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_payment extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
