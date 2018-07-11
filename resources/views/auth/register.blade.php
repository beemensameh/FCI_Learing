@extends('layouts.applaravel')

{{--@section('side_bar')--}}
    {{--<li class="header">HEADER</li>--}}
    {{--<!-- Optionally, you can add icons to the links -->--}}
    {{--<li class="active"><a href="{{ route('home') }}"><i class="fa fa-link"></i> <span>Home Page</span></a></li>--}}
    {{--<li><a href="{{ route('affair.courses.show') }}"><i class="fa fa-link"></i> <span>Courses</span></a></li>--}}
    {{--<li><a href="{{ route('affair.reg_pro.show') }}"><i class="fa fa-link"></i> <span>register Professor</span></a></li>--}}
    {{--<li><a href="{{ route('affair.auth.reg') }}"><i class="fa fa-link"></i> <span>register User</span></a></li>--}}
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
{{--@endsection--}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{--<div class="card-header">{{ __('Register') }}</div>--}}

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                            <div class="col-md-6">
                                <select id="type" class="form-control" name="type" required>
                                    <option value="professor">professor</option>
                                    <option value="affair">affair</option>
                                    <option value="student">student</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirmation_key" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation Key') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="confirmation_key" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection