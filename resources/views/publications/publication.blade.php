@extends('layouts.dashboard_layout')

@section('content')
    <link href="{{ asset('css/publication.css') }}" rel="stylesheet">
    <div class="publication">
        <h1 id="creating">Create new publication</h1>
        <div class="new-public">
            <!--<form>
                <div class="form-group">
                    <label for="public-title">Publication title</label>
                    <input id="public-title" class="form-control" type="text" placeholder="Title">
                    <small id="titleHelp" class="form-text text-muted">Enter the publication title</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            -->
        </div>
    </div>

@endsection
