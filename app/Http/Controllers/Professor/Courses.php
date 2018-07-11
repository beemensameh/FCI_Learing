<?php

namespace App\Http\Controllers\Professor;

use App\Course;
use App\Profregister;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\News_course;

class Courses extends Controller
{
    public function index()
    {
        $courses = [];
        $courses_id = Profregister::where('prof_id', Auth::id())->pluck('course_id');
        foreach ($courses_id as $course_id)
            array_push($courses, Course::where('id',$course_id)->get());
        return view('professor.courses',compact('courses'));
    }

    public function show($id)
    {
        $posts = News_course::where('course_id',$id)->orderBy('updated_at', 'desc')->get();
        $course = Course::find($id);
        $post_body = null;
        return view('professor.course',['id' => $id,  'posts' => $posts, 'course' => $course, 'post_body' => $post_body]);
    }

    public function ShowPostsCourses($id,$post_id)
    {
        $posts = News_course::where('course_id',$id)->orderBy('updated_at', 'desc')->get();
        $course = Course::find($id);
        $post_body = News_course::find($post_id);
        return view('professor.course',['id' => $id,  'posts' => $posts, 'course' => $course, 'post_body' => $post_body]);
    }

    public function create_post($id)
    {
        return view('professor.create_post',compact('id'));
    }

    public function store_post(Request $request,$id)
    {
        $post = new News_course();
        $name = User::find(Auth::id());
        $post->by_who_prof = Auth::id();
        $post->name = $name->name;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->post = $request->post;
        $post->course_id = $id;
        $post->save();
        return redirect()->route('prof.courses.show',$id);
    }

    public function delete_post($id,$id2)
    {
        $post = News_course::find($id);
        $post->delete();
        return redirect()->route('prof.courses.show',$id2);
    }

    public function setting($id)
    {
        $course = Course::find($id);
        return view('professor.edit_setting',['course' => $course, 'id' => $id]);
    }

    public function setting_store(Request $request, $id)
    {
        $course = Course::find($id);
        $course->link = $request->link;
        $course->save();
        return $this->show($id);
    }
}
