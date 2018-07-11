<?php

namespace App\Http\Controllers\Student;

use App\Course;
use App\Grade;
use App\News_course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = [];
        $registed = Grade::where('student_id',Auth::id())->where('in_term',1)->pluck('course_id');
        foreach ($registed as $course_id)
        {
            array_push($courses,Course::find($course_id));
        }
        return view('student.courses',compact('courses'));
    }

    public function ShowPostsCourses($id,$post_id)
    {
        $posts = News_course::where('course_id',$id)->orderBy('updated_at', 'desc')->get();
        $post_body = News_course::find($post_id);
        return view('student.course',['id' => $id,  'posts' => $posts, 'post_body' => $post_body]);
    }

    public function show($id)
    {
        $posts = News_course::where('course_id',$id)->orderBy('updated_at', 'desc')->get();
        $post_body = null;
        return view('student.course',['id' => $id,  'posts' => $posts, 'post_body' => $post_body]);
    }

    public function Grades()
    {
        $student = Grade::where('student_id',Auth::id())->get();
        $courses = Course::all();
        $allsum = [];
        $GPA = [];
        foreach ($student as $data)
        {
            $sum = 0;
            if ($data->year_work1 !== null)
            {
                $sum += $data->year_work1;
                if ($data->year_work2 !== null)
                {
                    $sum += $data->year_work2;
                    if ($data->final !== null)
                    {
                        $sum += $data->final;
                        if ($data->GPA == 4.0)
                            array_push($GPA, 'A');
                        elseif ($data->GPA == 3.7)
                            array_push($GPA, 'A-');
                        elseif ($data->GPA == 3.3)
                            array_push($GPA, 'B+');
                        elseif ($data->GPA == 3.0)
                            array_push($GPA, 'B');
                        elseif ($data->GPA == 2.7)
                            array_push($GPA, 'B-');
                        elseif ($data->GPA == 2.3)
                            array_push($GPA, 'C+');
                        elseif ($data->GPA == 2.0)
                            array_push($GPA, 'C');
                        elseif ($data->GPA == 1.7)
                            array_push($GPA, 'C-');
                        elseif ($data->GPA == 1.3)
                            array_push($GPA, 'D+');
                        elseif ($data->GPA == 1.0)
                            array_push($GPA, 'D');
                        elseif ($data->GPA == 0.0)
                            array_push($GPA, 'F');
                        array_push($allsum,$sum);
                        continue;
                    }
                }
            }
            array_push($GPA,null);
            array_push($allsum,$sum);
        }
        return view('student.grades',['student' => $student, 'courses' => $courses, 'allsum' => $allsum, 'GPA' => $GPA]);
    }
}
