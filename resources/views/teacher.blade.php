@extends('layouts.dashboard_layout')

@section('content')
    <link href="{{ asset('css/publication.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <div class='publication'>
        <div class="wrap-publication">
            <h1>Publication list</h1>
            <table class="table table-bordered" id="table-publication">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Year</th>
                <th scope="col">City</th>
                <th scope="col">Page</th>
                <th scope="col">URL</th>
                </tr>
            </thead>
            <tbody>
            @foreach($teachers as $teacher)
                <tr>
                <td>{{$teacher->first_name}}</td>
                <td>{{$teacher->last_name}}</td>
                <td>{{$teacher->patronymic}}</td>
                <td>{{$teacher->email}}</td>
                <td>{{$teacher->description}}</td>
                <td>{{$teacher->own}}</td>
                </tr>
            @endforeach
            </tbody>
            </table>   
        </div>     
    </div>
@endsection