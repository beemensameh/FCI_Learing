<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public function Profregister(){
        return $this->hasMany('App\Profregister','prof_id','id');
    }
}
