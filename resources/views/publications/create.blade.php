@extends('layouts.dashboard_layout')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a publication</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('publications.store') }}">
          @csrf
          <div class="form-group">    
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title"/>
          </div>

          <div class="form-group">
              <label for="year">Year:</label>
              <input type="text" class="form-control" name="year"/>
          </div>

          <div class="form-group">
              <label for="url">URL:</label>
              <input type="text" class="form-control" name="url"/>
          </div>
          <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" name="city"/>
          </div>
          <div class="form-group">
              <label for="page">Page:</label>
              <input type="text" class="form-control" name="page"/>
          </div>                     
          <button type="submit" class="btn btn-primary-outline">Add publication</button>
      </form>
  </div>
</div>
</div>
@endsection