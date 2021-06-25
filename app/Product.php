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
    	return $this -> belongsTo('App\brand' , 'brand_id');
    }

    public function gauges ()
    {

   	return $this-> hasMany('APP\Gauge' ,'product_id');
   }

   public function photos ()
   {

   	return $this-> hasMany('APP\Photo' ,'product_id');
   }

}
