@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('side_bar')
    <li><a href="{{ route('prof.courses.index') }}"><i class="fa fa-backward"></i> <span>Back</span></a></li>
    <li><a href="{{ route('prof.courses.show',$id) }}"><i class="fa fa-newspaper-o"></i> <span>News</span></a></li>
    <li><a href="{{ $course->link == null? '#':$course->link }}" target="_blank"><i class="fa fa-google"></i> <span>Drive</span></a></li>
    <li><a href="{{ route('prof.courses.setting',$id) }}"><i class="fa fa-cogs"></i> <span>Setting</span></a></li>
    <li class="active"><a href="{{ route('prof.grades',$id) }}"><i class="fa fa-graduation-cap"></i> <span>Grades</span></a></li>
@endsection

@section('profile')
    <a href="{{ route('prof.profile.edit',Auth::id()) }}" class="btn btn-default btn-flat">Profile</a>
@endsection

@section('content')
    <div>
        <div class="row justify-content-center">
            <div class="row main">
                <div class="main-login main-center">
                    <form method="Post" action="{{ route('prof.grades.store',$id) }}">
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
                            <label for="year_work1" class="cols-sm-2 control-label">year work 1</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                                    <input type='number' class="form-control" id="year_work1" min="0" name='year_work1' placeholder='Enter grade'>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="year_work2" class="cols-sm-2 control-label">year work 2</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                                    <input type='number' class="form-control" id="year_work2" min="0" name='year_work2' placeholder='Enter grade'>
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
