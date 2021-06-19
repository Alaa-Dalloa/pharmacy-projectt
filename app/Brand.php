<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
   public function products (){

   	return this-> hasMany('APP\Product' ,'brand_id');
   }

   

    
}
