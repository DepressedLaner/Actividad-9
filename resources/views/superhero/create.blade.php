@extends('layout.app') 
@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      <h1>
      New Superhero 
      </h1>
    </div> 
    <div class="card-body"> 
      @if ($errors->any()) 
        <div class="alert alert-danger"> 
          <ul> 
            @foreach ($errors->all() as $error) 
              <li>{{ $error }}</li> 
            @endforeach 
          </ul> 
        </div><br /> 
      @endif 
      <form method="post" action="{{ route('superhero.store') }}"> 
        @csrf 
        <div class="form-group"> 
          <label for="real_name">Real Name:</label> 
          <input type="text" class="form-control" name="real_name" /> 
        </div> 
        <div class="form-group"> 
          <label for="super_name">Super Name:</label> 
          <input type="text" class="form-control" name="super_name" /> 
        </div> 
        <div class="form-group"> 
          <label for="photo">Photo URL:</label> 
          <input type="text" class="form-control" name="photo" /> 
        </div> 
        <div class="form-group"> 
          <label for="symptoms">Description :</label> 
          <textarea rows="5" columns="5" class="form-control" name="description"></textarea> 
        </div> 
        <button type="submit" class="btn btn-primary">Save</button> 
        <a href="{{ route('superhero.index') }}" class="btn btn-primary">Return</a> 
      </form> 
    </div> 
  </div> 
@endsection 