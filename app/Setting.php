<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
	protected $table = 'settings';

    protected $fillable = [
        'name', 'title', 'value', 'type', 'options', 'sorting_number'
    ];

    public function getOptionsAttribute()
    {
    	$array = [];
    	if ($this->attributes['options'] != null) {
    		$array = explode(',', $this->attributes['options']);
    	}
    	return $array;
    }

    public function getRealValueAttribute()
    {
    	$array = $this->options;
    	return $array == [] ? $this->attributes['value'] : $array[$this->attributes['value']];
    }

    public function getTitleAttribute()
    {
    	return trans('admin.'.$this->attributes['title']);
    }
}
