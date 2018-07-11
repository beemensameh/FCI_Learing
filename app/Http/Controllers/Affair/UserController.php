<?php

namespace App\Http\Controllers\Affair;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('affair.users',compact('users'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }
}
