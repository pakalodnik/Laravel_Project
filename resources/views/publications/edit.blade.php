@extends('layouts.dashboard_layout') 
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a publication</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('publications.update', $publication->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value={{ $publication->title }} />
            </div>

            <div class="form-group">
                <label for="year">Year:</label>
                <input type="text" class="form-control" name="year" value={{ $publication->year }} />
            </div>

            <div class="form-group">
                <label for="page">Page:</label>
                <input type="text" class="form-control" name="page" value={{ $publication->page }} />
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" name="city" value={{ $publication->city }} />
            </div>
            <!--
            <div class="form-group">
                <label for="isVerified">Is Verified:</label>
                <input type="text" class="form-control" name="isVerified" value={{ $publication->isVerified }} />
            </div>
            -->
            <div class="form-group">
                <label for="url">URL:</label>
                <input type="text" class="form-control" name="url" value={{ $publication->url }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection