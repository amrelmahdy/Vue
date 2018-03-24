<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $table = 'samples';
    protected $fillable = ['project_name', 'category_id', 'image', 'description', 'link'];

    public function category(){
    	return $this->belongsTo('App\Models\Category');
    }
}
