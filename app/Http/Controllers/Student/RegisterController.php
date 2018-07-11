<?php

namespace App\Http\Controllers\Student;

use App\Course;
use App\Grade;
use App\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($error = "")
    {
        $ava_courses = [];
        $allcourses = Course::all();
        $registed = Grade::where('student_id',Auth::id())->get();
        $student = Student::find(Auth::id());
        foreach ($allcourses as $courses)
        {
            if (!is_null($student))
            {
                if ($courses->available === 1 && ($courses->year < $student->year || $courses->year === $student->year))
                {
                    $regisred_course = false;
                    foreach ($registed as $regist)
                    {
                        if ($regist->course_id === $courses->id &&( $regist->in_term != 0 || $regist->GPA != 0 ))
                        {
                            $regisred_course = true;
                        }
                    }

                    if ($regisred_course === false)
                    {
                        $regisred_course =true;
                        if($courses->prerequisite_1!==null){
                            $regisred_course =false;
                            foreach ($registed as $regist) {
                                if($regist->course_id===$courses->prerequisite_1){
                                    if($regist->GPA>=1){
                                        $regisred_course =true;
                                        break;
                                    }
                                    else{
                                        break;
                                    }
                                }
                            }
                            if($regisred_course === true){
                                if($courses->prerequisite_2!==null){
                                    $regisred_course =false;
                                    foreach ($registed as $regist) {
                                        if($regist->course_id===$courses->prerequisite_2){
                                            if($regist->GPA>=1){
                                                $regisred_course =true;
                                                break;
                                            }
                                            else{
                                                break;
                                            }
                                        }
                                    }
                                    if($regisred_course === true){
                                        if($courses->prerequisite_3!==null){
                                            $regisred_course =false;
                                            foreach ($registed as $regist) {
                                                if($regist->course_id===$courses->prerequisite_3){
                                                    if($regist->GPA>=1){
                                                        $regisred_course =true;
                                                        break;
                                                    }
                                                    else{
                                                        break;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        if($regisred_course === true)
                            array_push($ava_courses,$courses);
                    }
                }
            }
            else
            {
                $error = "you should complete your data first";
            }
        }
        return view('student.register_course',['ava_courses' => $ava_courses, 'error' => $error]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $largerThanL = false;
        $sumHour = 0;
        $student = Student::find(Auth::id());
        $error= "";
        if ($student->GPA >= 2.0 || $student->GPA === null)
        {
            $numOfHour = 18;
        }
        else
        {
            $numOfHour = 12;
        }

        foreach ($request->courses as $value)
        {
            $course = Course::find($value);
            $sumHour += (int)$course->credit_hour;
        }
        if(($sumHour > 12 && $numOfHour == 12)||(($sumHour > 18 || $sumHour < 12) && $numOfHour == 18))
        {
            $largerThanL = true;
        }
        if ($largerThanL === true)
        {
            $error = "should be large than or equal 12 and small than or equal 18";
        }
        else
        {
            foreach ($request->courses as $key => $value) {
                $grade = Grade::where('student_id', Auth::id())->where('course_id', $value)->get();
                if (count($grade)) {
                    $grade[0]->studied = $grade[0]->studied + 1;
                    $grade[0]->in_term = 1;
                    $grade[0]->save();
                } else {
                    $new_cou = new Grade();
                    $new_cou->student_id = Auth::id();
                    $new_cou->course_id = $value;
                    $new_cou->save();
                }
            }
        }
        return $this->index($error);
    }
}
