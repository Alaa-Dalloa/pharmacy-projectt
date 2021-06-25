<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
     public function product()
    {
    	return $this -> belongsTo('App\Product' , 'product_id');
    }
     public function Team()
    {
     return $this -> belongsTo('App\Team' , 'team_id');
    }
}
