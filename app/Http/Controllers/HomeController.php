<?php

namespace App\Http\Controllers;

use App\News_affair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $type = $user['type'];
        $posts = News_affair::orderBy('updated_at', 'desc')->get();
        $post_body = null;
        if ($type == 'student')
        {
            return view('student.home',['posts' => $posts, 'post_body' => $post_body]);
        }
        elseif ($type == 'affair')
        {
            return view('affair.home',['posts' => $posts, 'post_body' => $post_body]);
        }
        elseif ($type == 'professor')
        {
            return view('professor.home',['posts' => $posts, 'post_body' => $post_body]);
        }
    }

    public function ShowPostsHome($post_id)
    {
        $user = Auth::user();
        $type = $user['type'];
        $posts = News_affair::orderBy('updated_at', 'desc')->get();
        $post_body = News_affair::find($post_id);
        if ($type == 'affair')
            return view('affair.home',['posts' => $posts, 'post_body' => $post_body]);
        elseif ($type == 'professor')
            return view('professor.home',['posts' => $posts, 'post_body' => $post_body]);
        elseif ($type == 'student')
            return view('student.home',['posts' => $posts, 'post_body' => $post_body]);
    }
}
