@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('side_bar')
    {{--<li class="header">HEADER</li>--}}
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{ route('home') }}"><i class="fa fa-link"></i> <span>Home Page</span></a></li>
    <li><a href="{{ route('prof.courses.index') }}"><i class="fa fa-link"></i> <span>Courses</span></a></li>
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
                    <form method="Post" action="{{ route('prof.profile.update',Auth::id()) }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="office_hour" class="cols-sm-2 control-label">Office hour</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="office_hour" id="office_hour" placeholder="Enter your home phone" value="{{ $prof == null?'':$prof->office_hour }}"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="links" class="cols-sm-2 control-label">links</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-link fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="links" id="links" placeholder="Enter your home phone" value="{{ $prof == null?'':$prof->links }}"/>
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
