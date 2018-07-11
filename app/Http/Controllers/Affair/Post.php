<?php

namespace App\Http\Controllers\Affair;

use App\News_affair;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Post extends Controller
{
    public function create_post($id)
    {
        return view('affair.create_post',compact('id'));
    }

    public function store_post(Request $request,$id)
    {
        $post = new News_affair();
        $post->by_who_affair = Auth::id();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->post = $request->post;
        $post->save();
        return redirect()->route('home',$id);
    }

    public function delete_post($id)
    {
        $post = News_affair::find($id);
        $post->delete();
        return redirect()->route('home');
    }
}
