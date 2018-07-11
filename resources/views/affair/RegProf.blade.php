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
    <li class="active"><a href="{{ route('affair.reg_pro.show') }}"><i class="fa fa-link"></i> <span>register Professor</span></a></li>
    <li><a href="{{ route('affair.users') }}"><i class="fa fa-link"></i> <span>Show users</span></a></li>
    <li><a href="{{ route('affair.grades') }}"><i class="fa fa-link"></i> <span>Grades</span></a></li>
@endsection

@section('content')
    <div>
        <table id="users_table" class="display compact hover order-column row-border stripe">
            <thead>
            <tr>
                <th>id</th>
                <th>Name of Professor</th>
                <th>Name of Course</th>
                <th>Options</th>
            </tr>
            </thead>
            @foreach( $prof_reg as $reg )
                <tr>
                    <td>{{ $reg->id }}</td>
                    <td>{{ $reg->User->name }}</td>
                    <td>{{ $reg->Courses->cname }}</td>
                    <td><a href="{{ route('affair.reg_pro.delete', $reg->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('affair.reg_pro.create') }}" class="btn btn-primary">Add</a>
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