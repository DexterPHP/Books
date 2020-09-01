@extends('adminlte::page')

@section('title', 'Books List ')

@section('content_header')
    <h1>Books List</h1>
@stop




@section('content')
    @if(isset($Books))

        <div class="card-body table-responsive p-0">
            <table class="table table-hover display" id="table_id" >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Control</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Books as $book)
                    <tr>
                        <td>{{$book->id}}</td>
                        <td>{{$book->title}}</td>
                        <td>{{$book->description}}</td>
                        <td><span class="tag tag-success">{{ \App\Models\Cater::find($book->category)->title  }}</span></td>
                        <td>
                            <a href="edit/{{$book->id}}"><i class="fa fa-edit btn btn-success"></i> </a>
                            <a href="delete/{{$book->id}}"><i class="fa fa-eye btn btn-danger"></i> </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



    @endif
@stop
@section('js')
<script src="{{asset('js/jquery.dataTables.min.js')}}" ></script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@stop
@section('css')
<link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
@stop

