<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getProducts(){
    	return $this->hasMany("\App\Relation", "category_id", "id");
    }
}
