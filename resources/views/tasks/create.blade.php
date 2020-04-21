@extends('layout')
@section('content')
    @include('error')
<div class="container">
    <h3>Create task</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="title">
                <br>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                <br>
                <a href="{{route('tasks.store')}}" class="btn btn-success">Submit</a>
            </div>
        </div>
    </div>
</div>

