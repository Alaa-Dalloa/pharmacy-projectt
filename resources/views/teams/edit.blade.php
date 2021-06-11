@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit Teams</h1>
  <div class="box">
	  	<form action="/teams/{{ $team->id}}/update" method="POST">
	  		  @csrf
	   <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="string" class="form-control" placeholder="Enter name" id="name">
	  </div>
	  <div class="form-group">
	    <label for="phone">Phone:</label>
	    <input type="string" class="form-control" placeholder="Enter phone" id="phone">
	  </div>
	  <div class="form-group">
	    <label for="email">Email:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter email" id="email">
	  </div>
	  <div class="form-group">
	    <label for="position">Position:</label>
	    <input type="string" class="form-control" placeholder="Enter position" id="position">
	  </div>
	  <div class="form-group">
	    <label for="bio">Bio:</label>
	    <input type="string" class="form-control" placeholder="Enter bio" id="bio">
	  </div>
	  <div class="form-group">
	    <label for="image">Image:</label>
	    <input type="string" class="form-control" placeholder="Enter image" id="image">
	  </div>
	 
	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection