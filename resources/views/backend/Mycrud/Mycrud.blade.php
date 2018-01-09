@extends('backend.layouts.app')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function()
        {
            $('#myt').DataTable();});
    </script>
    <table class="table bordered" id="myt">

        <thead>
        <th>Id</th>
        <th>Name</th>
        </thead>
        <tbody>
        @foreach($data as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
            </tr>
        @endforeach
        <tr>
            <td>1</td>
            <td>2</td>
        </tr>

        </tbody>
    </table>

@endsection