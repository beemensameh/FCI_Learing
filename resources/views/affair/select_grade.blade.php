@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('side_bar')
    <li><a href="{{ route('home') }}"><i class="fa fa-link"></i> <span>Home Page</span></a></li>
    <li><a href="{{ route('affair.courses.show') }}"><i class="fa fa-link"></i> <span>Courses</span></a></li>
    <li><a href="{{ route('affair.reg_pro.show') }}"><i class="fa fa-link"></i> <span>register Professor</span></a></li>
    <li><a href="{{ route('affair.users') }}"><i class="fa fa-link"></i> <span>Show users</span></a></li>
    <li class="active"><a href="{{ route('affair.grades') }}"><i class="fa fa-link"></i> <span>Grades</span></a></li>
@endsection

@section('content')
    <div>
        <div class="row justify-content-center">
            <div class="row main">
                <div class="main-login main-center">
                    <form method="Post" action="{{ route('affair.grades.show') }}">
                        @csrf

                        <div class="form-group">
                            <label for="course_id" class="cols-sm-2 control-label">Course</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <select class="form-control" name="course_id" id="course_id" >
                                        @foreach($courses as $course)
                                            <option value=" {{ $course->id }}">{{ $course->cname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Select</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
