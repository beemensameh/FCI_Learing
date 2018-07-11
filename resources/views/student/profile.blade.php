@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('side_bar')
    {{--<li class="header">HEADER</li>--}}
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{ route('home') }}"><i class="fa fa-link"></i> <span>Home Page</span></a></li>
    <li><a href="{{ route('user.courses.index') }}"><i class="fa fa-link"></i> <span>Courses</span></a></li>
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

@section('profile')
    <a href="{{ route('user.profile.edit',Auth::id()) }}" class="btn btn-default btn-flat">Profile</a>
@endsection

@section('content')
    <div>
        <div class="row justify-content-center">
            <div class="row main">
                <div class="main-login main-center">
                    <form method="Post" action="{{ route('user.profile.update',Auth::id()) }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="phone" class="cols-sm-2 control-label">Home phone</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter your home phone" value="{{ $student == null?'':$student->phone }}"/>
                                </div>
                            </div>
                        </div>
{{-- 
                        <div class="form-group">
                            <label for="seat" class="cols-sm-2 control-label">Home phone</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
                                    <input type="number" class="form-control" name="seat" id="seat" disabled value="{{ $student == null?'':$student->seat_number }}"/>
                                </div>
                            </div>
                        </div>
 --}}
                        <div class="form-group">
                            <label for="m_phone" class="cols-sm-2 control-label">mobile</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="m_phone" id="m_phone" pattern="\d*" maxlength="11" placeholder="Enter your mobile phone" value="{{ $student == null?'':$student->mobile}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="SSN" class="cols-sm-2 control-label">National ID</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="SSN" id="SSN" pattern="\d*" maxlength="14" placeholder="Enter your National ID card" value="{{ $student == null?'':$student->SSN}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="cols-sm-2 control-label">address</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter your Address" value="{{ $student == null?'':$student->address}}"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="year" class="cols-sm-2 control-label">Year</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <select class="form-control" name="year" id="year" >
                                        <option value="1" {{ $student == null?'':($student->year === 'first'?'selected':'') }}>first</option>
                                        <option value="2" {{ $student == null?'':($student->year === 'second'?'selected':'') }}>second</option>
                                        <option value="3" {{ $student == null?'':($student->year === 'third'?'selected':'') }}>third</option>
                                        <option value="4" {{ $student == null?'':($student->year === 'fourth'?'selected':'') }}>fourth</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="old_password" class="cols-sm-2 control-label">Old password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Enter your old Password"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">New password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your new Password"/>
                                </div>
                            </div>
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<label for="password-confirm" class="cols-sm-2 control-label">Confirm new password</label>--}}
                            {{--<div class="cols-sm-10">--}}
                                {{--<div class="input-group">--}}
                                    {{--<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>--}}
                                    {{--<input type="password" class="form-control" name="password-confirm" id="password-confirm" placeholder="Confirm your new Password"/>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group ">
                            <button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
