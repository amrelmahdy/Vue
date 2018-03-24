<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function samples(){
    	return $this->hasMany('App\Models\Sample');
    }
}
