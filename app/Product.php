<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function catigory()
    {
    	return $this -> belongsTo('App\Catigory' ,' catigory_id');
    }
    public function brand()
    {
    	return $this -> belongsTo('App\Brand' , 'brand_id');
    }

   public function photos ()
   {

   	return $this-> hasMany('App\photo' ,'product_id');
   }

}
