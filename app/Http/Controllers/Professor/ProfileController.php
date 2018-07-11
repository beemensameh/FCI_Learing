<?php

namespace App\Http\Controllers\Professor;

use App\Professor;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prof = Professor::find($id);
        return view('professor.profile',compact('prof'));
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
        $prof = Professor::find($id);
        $user = User::find($id);
        if (is_null($prof))
        {
            $prof = new Professor();
            $prof->id = $id;
            $prof->office_hour = $request->office_hour;
            $prof->links = $request->links;
            if (Hash::check($request->old_password, $user->password))
            {
                $user->password = Hash::make($request->password);
                $user->save();
            }
            $prof->save();
            return redirect()->route('prof.profile.edit',$id);
        }
        $prof->office_hour = $request->office_hour;
        $prof->links = $request->links;
        if (Hash::check($request->old_password, $user->password))
        {
            $user->password = Hash::make($request->password);
            $user->save();
        }
        $prof->save();
        return redirect()->route('prof.profile.edit',$id);
    }
}
