<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shopping_session extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
