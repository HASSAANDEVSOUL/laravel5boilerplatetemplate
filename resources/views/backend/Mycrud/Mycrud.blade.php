@extends('backend.layouts.app')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    <script>
        $(document).ready(function()
        {
            $('#myt').DataTable();});
    </script>
    <table class="table bordered" id="myt" style="width: 50%;">

        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Actions</th>
        </thead>
        <tbody>
        @foreach($data as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td><button class="btn btn-danger">Edit</button>
                    <button type="button" class="btn btn-success">Delete</button></td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection