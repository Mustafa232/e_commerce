<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';

    protected $fillable = [
    	'title', 'image'
    	];

    	public function getPhotoAttribute()
    	{
    		return \Storage::url($this->image);
    	}
}
