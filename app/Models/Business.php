<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
    public function userInfo()
    {
        return $this->belongsTo('App\Models\User_info');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
}
