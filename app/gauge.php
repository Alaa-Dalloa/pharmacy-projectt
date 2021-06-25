<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gauge extends Model
{
    public function products ()
   {

    return $this-> hasMany('APP\product' ,'gauge_id') ;
   }
}
