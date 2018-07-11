<?php

namespace App\Http\Controllers\Affair;

use App\Course;
use App\Grade;
use App\News_affair;
use App\News_course;
use App\Profregister;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('affair.courses',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('affair.create_course',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();
        $course->course_id=$request->id;
        $course->cname=$request->cname;
        $course->year=$request->year;
        $course->credit_hour=$request->credit_hour;
        $course->term=$request->term;
        $course->prerequisite_1=$request->prerequisite_1;
        $course->prerequisite_2=$request->prerequisite_2;
        $course->prerequisite_3=$request->prerequisite_3;
        $course->type=$request->type;
        $course->department=$request->department;
        $course->available=$request->available;
        $course->save();
        return redirect()->route('affair.courses.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $courses = Course::all();
        // echo $course->prerequisite_1;
        return view('affair.edit_course',['course' => $course, 'courses' => $courses]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->course_id=$request->id;
        $course->cname=$request->cname;
        $course->year=$request->year;
        $course->credit_hour=$request->credit_hour;
        $course->term=$request->term;
        $course->prerequisite_1=$request->prerequisite_1;
        $course->prerequisite_2=$request->prerequisite_2;
        $course->prerequisite_3=$request->prerequisite_3;
        $course->type=$request->type;
        $course->department=$request->department;
        $course->available=$request->available;
        $course->save();
        return redirect()->route('affair.courses.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('affair.courses.show');
    }

    public function reset()
    {
        $students = Grade::all();
        $courses = Course::all();
        News_affair::query()->truncate();
        News_course::query()->truncate();
        Profregister::query()->truncate();
        foreach ($courses as $course)
        {
            $course->available = 0;
            $course->save();
        }
        foreach ($students as $student)
        {
            $student->in_term = 0;
            $student->save();
        }
        return back();
    }
}
