@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('side_bar')
    <li><a href="{{ route('home') }}"><i class="fa fa-link"></i> <span>Home Page</span></a></li>
    <li><a href="{{ route('affair.courses.show') }}"><i class="fa fa-link"></i> <span>Courses</span></a></li>
    <li><a href="{{ route('affair.reg_pro.show') }}"><i class="fa fa-link"></i> <span>register Professor</span></a></li>
    <li><a href="{{ route('affair.users') }}"><i class="fa fa-link"></i> <span>Show users</span></a></li>
    <li class="active" class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Grades</span>
            <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
    </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('affair.grades.show.back',$id) }}">Back</a></li>
            <li><a href="{{ route('affair.grades') }}">Select Course</a></li>
        </ul>
    </li>
@endsection

@section('content')
    <div>
        <div class="row justify-content-center">
            <div class="row main">
                <div class="main-login main-center">
                    <form method="Post" action="{{ route('affair.grades.store',$id) }}">
                        @csrf

                        <div class="form-group">
                            <label for="student_id" class="cols-sm-2 control-label">Student Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <select class="form-control" name="student_id" id="student_id" >
                                        @foreach($students as $student)
                                            <option value=" {{ $student->student_id }}">{{ $student->User->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="final" class="cols-sm-2 control-label">Final Grade</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                                    <input type='number' class="form-control" id="final" name='final' max="50" min="0" placeholder='Enter grade'>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
