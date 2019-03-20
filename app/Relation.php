<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    public function getProduct(){
    	return $this->hasOne("\App\Product", "id", "product_id");
    }
}
