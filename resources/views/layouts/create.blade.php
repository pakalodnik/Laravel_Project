@extends('layouts')
@section('content')
<div class="container">
    <h3>Create task</h3>
    <div class="row">
        <div class="col-md-12">
            {!! FORM::open(['route' => ['task.store']]) !!}
            <div class="form-group">
                <input type="text" class="form-control" name="title">
                <br>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                <br>
                <button class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
</div>

