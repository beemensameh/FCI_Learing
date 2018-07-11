@extends('layouts.app')

@section('side_bar')
    {{--<li class="header">HEADER</li>--}}
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{ route('home') }}"><i class="fa fa-link"></i> <span>Home Page</span></a></li>
    <li><a href="{{ route('user.courses.index') }}"><i class="fa fa-link"></i> <span>Courses</span></a></li>
    <li class="active"><a href="{{ route('user.register.index') }}"><i class="fa fa-link"></i> <span>Register Course</span></a></li>
    <li><a href="{{ route('user.Grades') }}"><i class="fa fa-link"></i> <span>Grades</span></a></li>
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
    <a href="{{ route('user.profile.edit',Auth::id()) }}" class="btn btn-default btn-flat">Profile</a>
@endsection

@section('content')
    <div>
        <div class="row justify-content-center">
            @if($error != "")
                <h2><i>{{ $error }}</i></h2>
            @else
                <form method="POST" action="{{ route('user.register.store') }}">
                    {{ csrf_field() }}
                    @foreach($ava_courses as $course)
                        <input type="checkbox" name="courses[]" value="{{ $course->id }}"><b style="font-size: 30px;color: #0b58a2;">{{ $course->cname }}</b><br>
                    @endforeach
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            @endif
        </div>
    </div>
@endsection
