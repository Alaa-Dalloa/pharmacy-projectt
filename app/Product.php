<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function catigory()
    {
    	return $this -> belongsTo('App\catigory' ,' catigory_id');
    }
    public function brand()
    {
    	return $this -> belongsTo('App\Brand' , 'brand_id');
    }

    public function calibers (){

   	return this-> hasMany('APP\Caliber' ,'product_id');
   }

   public function images (){

   	return this-> hasMany('APP\Image' ,'product_id');
   }
}
