@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit Category</h1>
  <div class="box">
	<form action="/categories/{{ $catigory->id }}/update" method="POST" enctype="multipart/form-data">
	  @csrf
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter name" 
	     id="name"
        value="{{ $catigory->name}}" 
	     name="name">
	   </div>

	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection