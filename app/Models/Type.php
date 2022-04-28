<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function businesses()
    {
        return $this->hasMany('App\Models\Business');
    }
}
