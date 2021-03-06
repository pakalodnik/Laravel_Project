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
            <h1>Publication list</h1>
            <div>
                <a style="margin: 19px; display: inline-block;" href="{{ route('publications.create')}}"  class="btn btn-primary">New publication</a>
                <a style="margin: 19px; display: inline-block;" href="/invoices/download"  class="btn btn-primary">Generate report</a>
             </div>
            <table class="table table-bordered" id="table-publication">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Magazine</th>
                <th scope="col">Country</th>
                <th scope="col">Organization</th>
                <th scope="col">Year</th>
                <th scope="col">Page</th>
                <th scope="col">URL</th>
                <th scope="col">Impact</th>
                <th scope="col">Index Base</th>
                </tr>
            </thead>
            <tbody>
            @foreach($publications as $publication)
                <tr>
                <td>{{$publication->id}}</td>
                <td>{{$publication->title}}</td>
                <td>{{$publication->magazine}}</td>
                <td>{{$publication->country}}</td>
                <td>{{$publication->university}}</td>
                <td>{{$publication->year}}</td>
                <td>{{$publication->page}}</td>
                <td><a href="{{$publication->url}}">{{$publication->url}}</a></td>
                <td>{{$publication->factor}}</td>
                <td>{{$publication->base}}</td>
                <!--
                    <td>{{$publication->isVerified}}</td>
                -->
                <td>
                    <a href="{{ route('publications.edit',$publication->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('publications.destroy', $publication->id)}}" method="post">
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
