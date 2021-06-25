<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
        public function Photo()
    {
     return $this -> belongsTo('App\photo' , 'team_id');
    }
}
