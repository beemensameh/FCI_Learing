<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profregister extends Model
{
    public function Professor(){
        return $this->belongsTo('App\Professor','prof_id','id');
    }

    public function Courses(){
        return $this->belongsTo('App\Course','course_id','id');
    }

    public function User(){
        return $this->belongsTo('App\User','prof_id','id');
    }
}