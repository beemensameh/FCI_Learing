@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('profile')
    <a href="{{ route('user.profile.edit',Auth::id()) }}" class="btn btn-default btn-flat">Profile</a>
@endsection

@section('side_bar')
    {{--<li class="header">HEADER</li>--}}
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{ route('home') }}"><i class="fa fa-link"></i> <span>Home Page</span></a></li>
    <li class="active"><a href="{{ route('affair.courses.show') }}"><i class="fa fa-link"></i> <span>Courses</span></a></li>
    <li><a href="{{ route('affair.reg_pro.show') }}"><i class="fa fa-link"></i> <span>register Professor</span></a></li>
    <li><a href="{{ route('affair.users') }}"><i class="fa fa-link"></i> <span>Show users</span></a></li>
    <li><a href="{{ route('affair.grades') }}"><i class="fa fa-link"></i> <span>Grades</span></a></li>
    {{--<li><a href="#"><i class="fa fa-link"></i> <span>Register Course</span></a></li>--}}
    {{--<li><a href="#"><i class="fa fa-link"></i> <span>Grades</span></a></li>--}}
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
            <div class="row main">
                <div class="main-login main-center">
                    <form method="Post" action="{{ route('affair.courses.store') }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="id" class="cols-sm-2 control-label">course id</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                                    <input type='text' class="form-control" name='id' id='id'  placeholder="Enter course id">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cname" class="cols-sm-2 control-label">course name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="cname" id="cname" placeholder="Enter course name"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="year" class="cols-sm-2 control-label">year</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <select class="form-control" name="year" id="year" >
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="credit_hour" class="cols-sm-2 control-label">credit hour</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <select class="form-control" name="credit_hour" id="credit_hour" >
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="term" class="cols-sm-2 control-label">term</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <select class="form-control" name="term" id="term" >
                                        <option value="first">1</option>
                                        <option value="second">2</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="prerequisite_1" class="cols-sm-2 control-label">prerequisite 1</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                                    <select class="form-control" name="prerequisite_1" id="prerequisite_1" >
                                        <option value="">Null</option>
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->course_id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="prerequisite_2" class="cols-sm-2 control-label">prerequisite 2</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                                    <select class="form-control" name="prerequisite_2" id="prerequisite_2" >
                                        <option value="">Null</option>
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->course_id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="prerequisite_3" class="cols-sm-2 control-label">prerequisite 3</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                                    <select class="form-control" name="prerequisite_3" id="prerequisite_3" >
                                        <option value="">Null</option>
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->course_id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="type" class="cols-sm-2 control-label">type</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <select class="form-control" name="type" id="type" >
                                        <option value="require">require</option>
                                        <option value="optional">optional</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="department" class="cols-sm-2 control-label">type</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <select class="form-control" name="department" id="department" >
                                        <option value="is">is</option>
                                        <option value="cs">cs</option>
                                        <option value="it">it</option>
                                        <option value="mm">mm</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="available" class="cols-sm-2 control-label">available</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <select class="form-control" name="available" id="available" >
                                        <option value="1">yes</option>
                                        <option value="0">no</option>
                                    </select>
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
