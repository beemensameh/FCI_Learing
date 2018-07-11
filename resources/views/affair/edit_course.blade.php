@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('side_bar')
    {{--<li class="header">HEADER</li>--}}
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{ route('home') }}"><i class="fa fa-link"></i> <span>Home Page</span></a></li>
    <li class="active"><a href="{{ route('affair.courses.show') }}"><i class="fa fa-link"></i> <span>Courses</span></a></li>
    <li><a href="{{ route('affair.reg_pro.show') }}"><i class="fa fa-link"></i> <span>register Professor</span></a></li>
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
                    <form method="Post" action="{{ route('affair.courses.update',$course->id) }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="id" class="cols-sm-2 control-label">course id</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                                    <input type='text' class="form-control" name='id' id='id'  placeholder="Enter course id" value="{{ $course->course_id }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cname" class="cols-sm-2 control-label">course name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="cname" id="cname" placeholder="Enter course name" value="{{ $course->cname }}"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="year" class="cols-sm-2 control-label">year</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <select class="form-control" name="year" id="year" >
                                        <option value="1" {{ $course == null?'':($course->year === 'first'?'selected':'') }}>1</option>
                                        <option value="2" {{ $course == null?'':($course->year === 'second'?'selected':'') }}>2</option>
                                        <option value="3" {{ $course == null?'':($course->year === 'third'?'selected':'') }}>3</option>
                                        <option value="4" {{ $course == null?'':($course->year === 'forth'?'selected':'') }}>4</option>
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
                                        <option value="1" {{ $course == null?'':($course->credit_hour === 'one'?'selected':'') }}>1</option>
                                        <option value="2" {{ $course == null?'':($course->credit_hour === 'two'?'selected':'') }}>2</option>
                                        <option value="3" {{ $course == null?'':($course->credit_hour === 'three'?'selected':'') }}>3</option>
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
                                        <option value="first" {{ $course == null?'':($course->term === 'first'?'selected':'') }}>1</option>
                                        <option value="second" {{ $course == null?'':($course->term === 'second'?'selected':'') }}>2</option>
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
                                        <option value="" {{ $course == null?'':($course->prerequisite_1 === null?'selected':'') }}>Null</option>
                                        @foreach($courses as $cour)
                                            <option value="{{ $cour->id }}" {{ $course == null?'':($cour->id === $course->prerequisite_1?'selected':'') }}>{{ $cour->course_id }}</option>
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
                                        <option value="" {{ $course == null?'':($course->prerequisite_2 === null?'selected':'') }}>Null</option>
                                        @foreach($courses as $cour)
                                            <option value="{{ $cour->id }}" {{ $cour == null?'':($cour->id === $course->prerequisite_2?'selected':'') }}>{{ $cour->course_id }}</option>
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
                                        <option value="" {{ $course == null?'':($course->prerequisite_3 === null?'selected':'') }}>Null</option>
                                        @foreach($courses as $cour)
                                            <option value="{{ $cour->id }}" {{ $cour == null?'':($cour->id === $course->prerequisite_3?'selected':'') }}>{{ $cour->course_id }}</option>
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
                                        <option value="require" {{ $course == null?'':($course->type === 'require'?'selected':'') }}>require</option>
                                        <option value="optional" {{ $course == null?'':($course->type === 'optional'?'selected':'') }}>optional</option>
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
                                        <option value="is" {{ $course == null?'':($course->department === 'is'?'selected':'') }}>is</option>
                                        <option value="cs" {{ $course == null?'':($course->department === 'cs'?'selected':'') }}>cs<option>
                                        <option value="it" {{ $course == null?'':($course->department === 'it'?'selected':'') }}>it<option>
                                        <option value="mm" {{ $course == null?'':($course->department === 'mm'?'selected':'') }}>mm</option>
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
                                        <option value="1" {{ $course == null?'':($course->available === 1?'selected':'') }}>yes</option>
                                        <option value="0" {{ $course == null?'':($course->available === 0?'selected':'') }}>no</option>
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
