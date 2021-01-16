<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
    	'name', 'slug', 'description', 'image', 'parent_id', 'status'
    	];

    	public function parents()
    	{
    		return $this->hasMany('App\Category', 'parent_id');
    	}

    	public function parent()
    	{
    		return $this->belongsTo('App\Category', 'parent_id');
    	}

    	public function getPhotoAttribute()
    	{
    		return \Storage::url($this->image);
    	}
}
