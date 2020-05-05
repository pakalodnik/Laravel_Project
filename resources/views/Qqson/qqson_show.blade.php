@extends('layouts.dashboard_layout')

@section('content')
    <link href="{{ asset('css/publication.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <div class='publication'>
        <div class="wrap-publication">
        <div class="col-sm-12">
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
        </div>
            <h1>KKSON Publications list</h1>
            <div>
                <a style="margin: 19px; display: inline-block;" href="{{ route('publications.create')}}"  class="btn btn-primary">New publication</a>
                <a style="margin: 19px; display: inline-block;" href="/invoices/download"  class="btn btn-primary">Generate report</a>
             </div>
            <table class="table table-bordered" id="table-publication">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Author name</th>
                <th scope="col">Title</th>
                <th scope="col">Magazine</th> 
                <th scope="col">Year</th>
                <th scope="col">Page</th>
                </tr>
            </thead>
            <tbody>
            @foreach($qqsons as $qqson)
                <tr>
                <td>{{$qqson->id}}</td>
                <td>{{$qqson->FIO}}</td>
                <td>{{$qqson->publication_name}}</td>
                <td>{{$qqson->journal}}</td>
                <td>{{$qqson->date}}</td>
                <td>{{$qqson->page}}</td>
                
                <td>
                    <a href="{{ route('Qqson.qqson_edit',$qqson->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('Qqson.qqson_destroy', $qqson->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
@endsection
