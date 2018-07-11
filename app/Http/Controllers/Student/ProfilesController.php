<?php

namespace App\Http\Controllers\Student;

use App\student;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfilesController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.profile',compact('student'));
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
        $student = Student::find($id);
        $user = User::find($id);
        if (is_null($student))
        {
            $student = new student();
            $student->id = $id;
            $student->address = $request->address;
            $student->phone = $request->phone;
            $student->mobile = $request->m_phone;
            $student->SSN = $request->SSN;
            $student->year = $request->year;
            if (Hash::check($request->old_password, $user->password))
            {
                $user->password = Hash::make($request->password);
                $user->save();
            }
            $student->save();
            return redirect()->route('user.profile.edit',$id);
        }
        $student->address = $request->address;
        $student->phone = $request->phone;
        $student->mobile = $request->m_phone;
        $student->SSN = $request->SSN;
        $student->year = $request->year;
        if (Hash::check($request->old_password, $user->password))
        {
            $user->password = Hash::make($request->password);
            $user->save();
        }
        $student->save();
        return redirect()->route('user.profile.edit',$id);
    }
}
