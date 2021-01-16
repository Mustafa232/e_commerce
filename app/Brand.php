<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

    protected $fillable = [
    	'name', 'slug', 'description', 'image', 'status'
    	];

    	

    	public function getPhotoAttribute()
    	{
    		return \Storage::url($this->image);
    	}
}
