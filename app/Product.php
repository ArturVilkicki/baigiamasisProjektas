<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
		'name', 'detail'
	];
    public function categoriesId(){
    	return $this->hasMany('App\Category', 'product_id', 'id');
    	
    }
}
