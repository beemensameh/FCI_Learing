@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/courses/direction-reveal.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cutive+Mono|Lato:300,400">
    <style>
        .mycard {
            margin: 5px;
            margin-left: 30px;
            margin-right: 30px;
            width: 300px;
        }

        .myimage{
            height: 300px;
            width: 300px;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection

@section('profile')
    <a href="{{ route('user.profile.edit',Auth::id()) }}" class="btn btn-default btn-flat">Profile</a>
@endsection

@section('side_bar')
    {{--<li class="header">HEADER</li>--}}
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{ route('home') }}"><i class="fa fa-link"></i> <span>Home Page</span></a></li>
    <li class="active"><a href="{{ route('user.courses.index') }}"><i class="fa fa-link"></i> <span>Courses</span></a></li>
    <li><a href="{{ route('user.register.index') }}"><i class="fa fa-link"></i> <span>Register Course</span></a></li>
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

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="direction-reveal direction-reveal--grid-bootstrap direction-reveal--demo-bootstrap">
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-sm-4 mycard">
                        <a href="{{ route('user.courses.show',$course->id) }}" class="direction-reveal__card">
                            <img src="{{ asset('image/mountain-1.jpg') }}" alt="Image" class="img-fluid myimage">
                            <div class="direction-reveal__overlay direction-reveal__anim--in">
                                <h3 class="direction-reveal__title">{{ $course->cname }}</h3>
                                <p class="direction-reveal__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore eritatis et quasi.</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('js/courses/bundle.js') }}"></script>
@endsection