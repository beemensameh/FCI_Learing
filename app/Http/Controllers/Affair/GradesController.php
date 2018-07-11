<?php

namespace App\Http\Controllers\Affair;

use App\Course;
use App\Grade;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GradesController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('affair.select_grade',compact('courses'));
    }

    public function show(Request $request)
    {
        $grades = Grade::where('course_id',$request->course_id)->get();
        $student = User::where('type','student')->get();
        return view('affair.grades',['grades' => $grades, 'student' =>$student]);
    }

    public function showback($id)
    {
        $grades = Grade::where('course_id',$id)->get();
        $student = User::where('type','student')->get();
        return view('affair.grades',['grades' => $grades, 'student' =>$student]);
    }

    public function edit($course_id)
    {
        $students = Grade::where('course_id',$course_id)->get();
        $names = User::where('type','student')->get();
        $course = Course::find($course_id);
        return view('affair.edit_grade',['students' => $students, 'names' => $names, 'id' => $course_id, 'course' => $course]);
    }

    public function store(Request $request, $course_id)
    {
        $GPA = 0;
        $GPA1 = 0.0;
        $GPA2 = 0.0;
        $grades = Grade::where('student_id',$request->student_id)->where('course_id',$course_id)->get();
        $allgrades = Grade::where('student_id',$request->student_id)->get();
        $student = Student::find($request->student_id);
        foreach ($grades as $grade)
        {
            $grade->final = $request->final;
            $GPA = $grade->year_work1 + $grade->year_work2 + $request->final;
            if ($GPA >= 90)
                $grade->GPA = 4;
            elseif ($GPA < 90 && $GPA >= 85)
                $grade->GPA = 3.7;
            elseif ($GPA < 85 && $GPA >= 80)
                $grade->GPA = 3.3;
            elseif ($GPA < 80 && $GPA >= 75)
                $grade->GPA = 3.0;
            elseif ($GPA < 75 && $GPA >= 70)
                $grade->GPA = 2.7;
            elseif ($GPA < 70 && $GPA >= 65)
                $grade->GPA = 2.3;
            elseif ($GPA < 65 && $GPA >= 60)
                $grade->GPA = 2;
            elseif ($GPA < 60 && $GPA >= 55)
                $grade->GPA = 1.7;
            elseif ($GPA < 55 && $GPA >= 50)
                $grade->GPA = 1.3;
            elseif ($GPA < 50 && $GPA >= 45)
                $grade->GPA = 1.0;
            elseif ($GPA < 45)
                $grade->GPA = 0.0;
            $grade->save();
        }

        foreach ($allgrades as $grade)
        {
            if ($grade->GPA !== null)
            {
                $GPA1 += $grade->GPA * $grade->Courses->credit_hour;
                $GPA2 += $grade->Courses->credit_hour * $grade->studied;
            }
        }
        $GPA = $GPA1 / $GPA2;
        $student->GPA = $GPA;
        $student->save();
        return back();
    }
}
