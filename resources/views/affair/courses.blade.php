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
    <li class="active"><a href="{{ route('affair.courses.show') }}"><i class="fa fa-link"></i> <span>Courses</span></a></li>
    <li><a href="{{ route('affair.reg_pro.show') }}"><i class="fa fa-link"></i> <span>register Professor</span></a></li>
    <li><a href="{{ route('affair.users') }}"><i class="fa fa-link"></i> <span>Show users</span></a></li>
    <li><a href="{{ route('affair.grades') }}"><i class="fa fa-link"></i> <span>Grades</span></a></li>
@endsection

@section('content')
    <div>
        <table id="users_table" class="display compact hover order-column row-border stripe">
            <thead>
            <tr>
                <th>Course id</th>
                <th>Name</th>
                <th>credit hour</th>
                <th>year</th>
                <th>term</th>
                <th>prerequisite 1</th>
                <th>prerequisite 2</th>
                <th>prerequisite 3</th>
                <th>type</th>
                <th>department</th>
                <th>available</th>
                <th>Options</th>
            </tr>
            </thead>
            @foreach( $courses as $course )
                <tr>
                    <td>{{ $course->course_id }}</td>
                    <td>{{ $course->cname }}</td>
                    <td>{{ $course->credit_hour }}</td>
                    <td>{{ $course->year }}</td>
                    <td>{{ $course->term }}</td>
                    <td>{{ $course->CoursePre1 !== null?$course->CoursePre1->cname:null }}</td>
                    <td>{{ $course->CoursePre2 !== null?$course->CoursePre2->cname:null }}</td>
                    <td>{{ $course->CoursePre3 !== null?$course->CoursePre3->cname:null }}</td>
                    <td>{{ $course->type }}</td>
                    <td>{{ $course->department }}</td>
                    <td>
                        @if($course->available === 0)
                            No
                        @else
                            Yes
                        @endif
                    </td>
                    <td><a href="{{ route('affair.courses.edit', $course->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('affair.courses.destroy', $course->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('affair.courses.create') }}" class="btn btn-primary">Add</a>
        <a href="{{ route('affair.courses.reset') }}" class="btn btn-danger">Reset All</a>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    {{--<script type="text/javascript" href="{{ asset('js/DataTables/jQuery-3.2.1/jquery-3.2.1.js') }}"></script>--}}
    {{--<script type="text/javascript" src="{{ asset('js/DataTables/DataTables-1.10.16/js/jquery.dataTables.js') }}"></script>--}}
    {{--<script type="text/javascript" src="{{ asset('js/DataTables/Buttons-1.5.1/js/dataTables.buttons.js') }}"></script>--}}
    <script type="text/javascript">
        $(document).ready( function () {
            $('#users_table').DataTable({
                buttons: [
                    'edit', 'delete'
                ]
            });
        } );
        table.buttons().container().appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
    </script>
@endsection