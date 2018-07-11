<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function Courses(){
        return $this->belongsTo('App\Course','course_id','id');
    }

    public function User(){
        return $this->belongsTo('App\User','student_id','id');
    }
}
