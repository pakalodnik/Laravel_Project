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
              <label for="title">Author:</label>
              <input type="text" class="form-control" name="FIO"/>
          </div>

          <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="publication_name"/>
          </div>
          <div class="form-group">
              <label for="title">Magazine:</label>
              <input type="text" class="form-control" name="journal"/>
          </div>
          <div class="form-group">
              <label for="title">Year:</label>
              <input type="text" class="form-control" name="date"/>
          </div>
          <div class="form-group">
              <label for="title">Page:</label>
              <input type="text" class="form-control" name="page"/>
          </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection