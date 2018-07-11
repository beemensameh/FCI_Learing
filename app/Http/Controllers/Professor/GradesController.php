<?php

namespace App\Http\Controllers\Professor;

use App\Course;
use App\Grade;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GradesController extends Controller
{
    public function index($id)
    {
        $grades = Grade::where('course_id',$id)->get();
        $student = User::where('type','student')->get();
        $course = Course::find($id);
        return view('professor.grades',['id' => $id, 'grades' => $grades, 'student' =>$student, 'course' => $course]);
    }

    public function edit($course_id)
    {
        $students = Grade::where('course_id',$course_id)->get();
        $names = User::where('type','student')->get();
        $course = Course::find($course_id);
        return view('professor.edit_grade',['students' => $students, 'names' => $names, 'id' => $course_id, 'course' => $course]);
    }

    public function store(Request $request, $course_id)
    {
        $grades = Grade::where('student_id',$request->student_id)->where('course_id',$course_id)->get();
        foreach ($grades as $grade)
        {
            $grade->year_work1 = $request->year_work1;
            $grade->year_work2 = $request->year_work2;
            $grade->save();
        }
        return back();
    }
}
