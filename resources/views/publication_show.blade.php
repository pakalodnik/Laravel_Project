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
            @foreach($publications as $publication)
                <tr>
                <td>{{$publication->id}}</td>
                <td>{{$publication->title}}</td>
                <td>{{$publication->year}}</td>
                <td>{{$publication->city}}</td>
                <td>{{$publication->page}}</td>
                <td><a href="{{$publication->url}}">{{$publication->url}}</a></td>
                </tr>
            @endforeach
            </tbody>
            </table>   
        </div>     
    </div>
@endsection