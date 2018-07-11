@extends('layouts.app')

@section('css')
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('js/DataTables/DataTables-1.10.16/css/jquery.dataTables.css') }}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ asset('js/DataTables/Buttons-1.5.1/css/buttons.dataTables.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
@endsection

@section('side_bar')
    <li><a href="{{ route('home') }}"><i class="fa fa-link"></i> <span>Home Page</span></a></li>
    <li><a href="{{ route('affair.courses.show') }}"><i class="fa fa-link"></i> <span>Courses</span></a></li>
    <li><a href="{{ route('affair.reg_pro.show') }}"><i class="fa fa-link"></i> <span>register Professor</span></a></li>
    <li><a href="{{ route('affair.users') }}"><i class="fa fa-link"></i> <span>Show users</span></a></li>
    {{--<li><a ><i class="fa fa-link"></i> <span>Grades</span></a></li>--}}
    <li class="active" class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Grades</span>
            <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
    </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('affair.grades') }}">Select Course</a></li>
        </ul>
    </li>
@endsection

@section('content')
    <div>
        @if(count($grades))
            <table id="users_table" class="display compact hover order-column row-border stripe">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>final</th>
                </tr>
                </thead>
                @foreach( $grades as $grade )
                        <tr>
                            <td> {{ $grade->User->name }} </td>
                            <td> {{ $grade->final }} </td>
                        </tr>
                @endforeach
            </table>
            <td><a href="{{ route('affair.grades.edit',$grades[0]->course_id) }}" type="submit" class="btn btn-primary">Edit</a></td>
        @else
            <p>No Student</p>
        @endif
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