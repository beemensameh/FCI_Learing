@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home_course/email.css') }}">
@endsection

@section('side_bar')
    {{--<li class="header">HEADER</li>--}}
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="{{ route('home') }}"><i class="fa fa-link"></i> <span>Home Page</span></a></li>
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
        <div id="layout" class="content pure-g" style="padding-left: 325px;">
            <div id="list" class="pure-u-1" style="padding-top: 50px;">
                @foreach($posts as $post)
                    <div class="email-item email-item-selected pure-g">
                        <a href="{{ route('prof.change',$post->id) }}">
                            <div class="pure-u">
                                <img width="64" height="64" alt="Tilo Mitra&#x27;s avatar" class="email-avatar" src="{{ asset('image/home_course/tilo-avatar.png') }}">
                            </div>

                            <div class="pure-u-3-4">
                                <h5 class="email-name">Affair</h5>
                                <h4 class="email-subject">{{ $post->title }}</h4>
                                <p class="email-desc">
                                    {{ $post->description }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            @if($post_body !== null)
                <div id="main" class="pure-u-1">
                    <div class="email-content">

                        <div class="email-content-header pure-g">
                            <div class="pure-u-1-2">
                                <h1 class="email-content-title">{{ $post_body->title }}</h1>
                                <p class="email-content-subtitle">
                                    From Affair at <span>{{ $post_body->created_at }}</span>
                                </p>
                            </div>
                        </div>

                        <div class="email-content-body">
                            <p>
                                {!! $post_body->post !!}
                            </p>
                        </div>
                    </div>
                </div>
            @else
                <div id="main" class="pure-u-1" style="width: inherit;">
                    <div class="email-content">

                        <div class="email-content-header pure-g">
                            <div class="pure-u-1-2">
                                <h1 class="email-content-title">No posts</h1>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('js')
    {{--<script src="https://yui-s.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>--}}
    <script>
        YUI().use('node-base', 'node-event-delegate', function (Y) {

            var menuButton = Y.one('.nav-menu-button'),
                nav        = Y.one('#nav');

            // Setting the active class name expands the menu vertically on small screens.
            menuButton.on('click', function (e) {
                nav.toggleClass('active');
            });

            // Your application code goes here...

        });
    </script>
@endsection
