<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catigory extends Model
{
    public function products ()
   {

      return $this-> hasMany('App\Product' ,'catigory_id') ;
   }

}
