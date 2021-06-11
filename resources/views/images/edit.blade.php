@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit image</h1>
  <div class="box">
	<form action="/images/{{ $image->id }}/update" method="POST">
	  @csrf
	  <div class="form-group">
	    <label for="image">Image:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter image" 
	     id="image"
        value="{{ $image->image}}" 
	     name="image">
	   </div>

	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection