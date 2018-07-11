@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('profile')
    <a href="{{ route('prof.profile.edit',Auth::id()) }}" class="btn btn-default btn-flat">Profile</a>
@endsection

@section('side_bar')
    {{--<li class="header">HEADER</li>--}}
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{ route('prof.courses.index') }}"><i class="fa fa-backward"></i> <span>Back</span></a></li>
    <li class="active"><a href="{{ route('prof.courses.show',$id)}}"><i class="fa fa-newspaper-o"></i> <span>News</span></a></li>
    <li><a href="https://drive.google.com/drive/folders/0BzOAP2zbRs4RRmxORHpqVVdDLTA" target="_blank"><i class="fa fa-google"></i> <span>Drive</span></a></li>
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
                    <form method="Post" action="{{ route('prof.courses.store_post',$id) }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="title" class="cols-sm-2 control-label">title</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="title" id="title" maxlength="24" placeholder="Enter title" required/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="cols-sm-2 control-label">description</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="description" id="description" maxlength="128" placeholder="Enter description (optional)"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="post" class="cols-sm-2 control-label">post</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                    <textarea type="text" class="form-control" name="post" id="post" placeholder="Enter post" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <button type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Add post</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
