<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'category_id', 'brand_id', 'user_id', 'name', 'image', 'slug', 'price', 'original_price', 'details', 'seo_desc', 'seo_keys'
    ];

    public function stocks()
    {
    	return $this->hasMany('App\Stock');
    }

    public function orders()
    {
    	return $this->hasMany('App\OrderDetail');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function brand()
    {
    	return $this->belongsTo('App\Brand');
    }
}
