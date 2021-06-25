@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit Teams</h1>
  <div class="box">
	  	<form action="/teams/{{ $team->id}}/update" method="POST" 
	  		enctype="multipart/form-data">
	  		  @csrf
	   <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="string" class="form-control" placeholder="Enter name" id="name"
	    value="{{ $team->name}}" name="name">
	  </div>
	  <div class="form-group">
	    <label for="phone">Phone:</label>
	    <input type="string" class="form-control" placeholder="Enter phone" id="phone" 
	    value="{{ $team->phone}}"
	     name="phone">
	  </div>
	  <div class="form-group">
	    <label for="email">Email:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter email" id="email"  value="{{ $team->email}}" name="email">
	  </div>
	  <div class="form-group">
	    <label for="position">Position:</label>
	    <input type="string" class="form-control" placeholder="Enter position" id="position"  value="{{ $team->position}}" name="position">
	  </div>
	  <div class="form-group">
	    <label for="bio">Bio:</label>
	    <input type="string" class="form-control" placeholder="Enter bio" id="bio"  value="{{ $team->bio}} " name="bio">
	  </div>
	 <div class="form-group">
	    <label for="photo">photo:</label>
	    <input type="file" class="form-control" name="photo" value="{{ $team->photo}} ">
	  </div>
	 
	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection