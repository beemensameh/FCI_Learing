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
    <li><a href="{{ route('user.courses.index') }}"><i class="fa fa-link"></i> <span>Courses</span></a></li>
    <li><a href="{{ route('user.register.index') }}"><i class="fa fa-link"></i> <span>Register Course</span></a></li>
    <li class="active"><a href="{{ route('user.Grades') }}"><i class="fa fa-link"></i> <span>Grades</span></a></li>
@endsection

@section('profile')
    <a href="{{ route('user.profile.edit',Auth::id()) }}" class="btn btn-default btn-flat">Profile</a>
@endsection

@section('content')
    <div>
        <table id="users_table" class="display compact hover order-column row-border stripe">
            <thead>
            <tr>
                <th>Course name</th>
                <th>year work 1</th>
                <th>year work 2</th>
                <th>final</th>
                <th>total</th>
                <th>GPA</th>
            </tr>
            </thead>
            @php ($i = 0)
            @foreach( $student as $data )
                <tr>
{{--                    <td>{{ $courses[($data->course_id)-1]->cname }}</td>--}}
                    <td>{{ $data->courses->cname }}</td>
                    <td>{{ $data->year_work1 }}</td>
                    <td>{{ $data->year_work2 }}</td>
                    <td>{{ $data->final }}</td>
                    <td>{{ $allsum[$i] }}</td>
                    <td>{{ $GPA[$i++] }}</td>
                </tr>
            @endforeach
        </table>
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