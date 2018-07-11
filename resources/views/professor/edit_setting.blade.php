@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('side_bar')
    {{--<li class="header">HEADER</li>--}}
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{ route('prof.courses.index') }}"><i class="fa fa-backward"></i> <span>Back</span></a></li>
    <li><a href="{{ route('prof.courses.show',$course->id)}}"><i class="fa fa-newspaper-o"></i> <span>News</span></a></li>
    <li><a href="{{ $course->link == null? '#':$course->link }}" target="_blank"><i class="fa fa-google"></i> <span>Drive</span></a></li>
    <li class="active"><a href="{{ route('prof.courses.setting',$course->id) }}"><i class="fa fa-cogs"></i> <span>Setting</span></a></li>
    <li><a href="{{ route('prof.grades',$id) }}"><i class="fa fa-graduation-cap"></i> <span>Grades</span></a></li>
    {{--<li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>--}}
    {{--<li class="treeview">--}}
        {{--<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>--}}
            {{--<span class="pull-right-container">--}}
                {{--<i class="fa fa-angle-left pull-right"></i>--}}
              {{--</span>--}}
        {{--</a>--}}
        {{--<ul class="treeview-menu">--}}
            {{--<li><a href="#">Link in level 2</a></li>--}}
            {{--<li><a href="#">Link in level 2</a></li>--}}
        {{--</ul>--}}
    {{--</li>--}}
@endsection

@section('profile')
    <a href="{{ route('prof.profile.edit',Auth::id()) }}" class="btn btn-default btn-flat">Profile</a>
@endsection

@section('content')
    <div>
        <div class="row justify-content-center">
            <div class="row main">
                <div class="main-login main-center">
                    <form method="Post" action="{{ route('prof.courses.setting_store',$course->id) }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="link" class="cols-sm-2 control-label">drive link</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-link fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="link" id="link" placeholder="Enter whole link" value="{{ $course->link == null?'':$course->link}}" required/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Add link</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
