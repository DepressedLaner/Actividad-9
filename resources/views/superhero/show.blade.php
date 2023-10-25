@extends('layout.app') 

@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      View superhero 
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

      <div class="form-group"> 
        <label for="real_name">Real Name:</label> 
        <input type="text" class="form-control" name="real_name" value="{{ $superhero->real_name }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="super_name">Super Name:</label> 
        <input type="text" class="form-control" name="super_name" value="{{ $superhero->super_name }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="photo">Photo URL: <br><img style="width: 2em; height: 2em; object-fit: cover;" src="{{ $superhero->photo }}"/></label> 
        <input type="text" class="form-control" name="photo" value="{{ $superhero->photo }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="symptoms">Description:</label> 
        <textarea rows="5" columns="5" class="form-control" name="description" disabled>{{ $superhero->description }}</textarea> 
      </div> 
      <a href="{{ route('superhero.edit', $superhero->id) }}" class="btn btn-primary">Edit</a> 
      <a href="{{ route('superhero.index') }}" class="btn btn-primary">Index</a> 
    </div> 
  </div> 
@endsection 