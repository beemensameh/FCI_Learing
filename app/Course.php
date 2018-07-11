<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function Profregister(){
        return $this->hasMany('App\Profregister','course_id','id');
    }

    public function Grades(){
        return $this->hasMany('App\Grade','course_id','id');
    }

    public function CoursePre1(){
        return $this->belongsTo('App\Course','prerequisite_1','id');
    }

    public function CoursePre2(){
        return $this->belongsTo('App\Course','prerequisite_2','id');
    }

    public function CoursePre3(){
        return $this->belongsTo('App\Course','prerequisite_3','id');
    }
}
