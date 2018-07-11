@extends('layouts.app')

@section('css')
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('js/DataTables/DataTables-1.10.16/css/jquery.dataTables.css') }}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('js/DataTables/Buttons-1.5.1/css/buttons.dataTables.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
@endsection

@section('side_bar')
    <li><a href="{{ route('prof.courses.index') }}"><i class="fa fa-backward"></i> <span>Back</span></a></li>
    <li><a href="{{ route('prof.courses.show',$id) }}"><i class="fa fa-newspaper-o"></i> <span>News</span></a></li>
    <li><a href="{{ $course->link == null? '#':$course->link }}" target="_blank"><i class="fa fa-google"></i> <span>Drive</span></a></li>
    <li><a href="{{ route('prof.courses.setting',$id) }}"><i class="fa fa-cogs"></i> <span>Setting</span></a></li>
    <li class="active"><a href="{{ route('prof.grades',$id) }}"><i class="fa fa-graduation-cap"></i> <span>Grades</span></a></li>
@endsection

@section('profile')
    <a href="{{ route('prof.profile.edit',Auth::id()) }}" class="btn btn-default btn-flat">Profile</a>
@endsection

@section('content')
    <div>
        <table id="users_table" class="display compact hover order-column row-border stripe">
            <thead>
            <tr>
                <th>Name</th>
                <th>year work 1</th>
                <th>year work 2</th>
            </tr>
            </thead>
            @foreach( $grades as $grade )
                    <tr>
                        <td> {{ $grade->User->name }} </td>
                        <td> {{ $grade->year_work1 }} </td>
                        <td> {{ $grade->year_work2 }} </td>
                    </tr>
            @endforeach
        </table>
        <td><a href="{{ route('prof.grades.edit',$course->id) }}" type="submit" class="btn btn-primary">Edit</a></td>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    {{--<script type="text/javascript" href="{{ asset('js/DataTables/jQuery-3.2.1/jquery-3.2.1.js') }}"></script>--}}
    {{--<script type="text/javascript" src="{{ asset('js/DataTables/DataTables-1.10.16/js/jquery.dataTables.js') }}"></script>--}}
    {{--<script type="text/javascript" src="{{ asset('js/DataTables/Buttons-1.5.1/js/dataTables.buttons.js') }}"></script>--}}
    <script type="text/javascript">
        $(document).ready( function () {
            $('#users_table').DataTable();
        });
    </script>
@endsection