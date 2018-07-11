<?php

namespace App\Http\Controllers\Affair;

use App\Course;
use App\User;
use App\Profregister;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prof_reg = Profregister::all();
        $course = Course::all('cname');
        $prof = User::all('name');
        return view('affair.RegProf',['prof_reg' =>$prof_reg, 'course' => $course, 'porf' => $prof]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::where('available', 1)->get();
        $users = User::where('type','professor')->get();
//        echo $user;
        return view('affair.add_courseToProf',['courses' => $courses, 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $reg = new Profregister();
            $reg->course_id = $request->course;
            $reg->prof_id = $request->professor;
            $reg->save();
        }
        catch (\Illuminate\Database\QueryException $e)
        {
            return back();
        }

        return back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = Profregister::find($id);
        $reg->delete();
        return back();
    }
}
