@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Add Teams</h1>
  <div class="box">
	  	<form action="{{ route ('teams.store') }}" method="POST" 
	  	enctype="multipart/form-data">
	  		  @csrf
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="string" class="form-control" placeholder="Enter name" id="name" name="name">
	  </div>
	  <div class="form-group">
	    <label for="phone">Phone:</label>
	    <input type="string" class="form-control" placeholder="Enter phone" id="phone" name="phone">
	  </div>
	  <div class="form-group">
	    <label for="email">Email:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter email" id="email" name="email">
	  </div>
	  <div class="form-group">
	    <label for="position">Position:</label>
	    <input type="string" class="form-control" placeholder="Enter position" id="position" name="position">
	  </div>
	  <div class="form-group">
	    <label for="bio">Bio:</label>
	    <input type="string" class="form-control" placeholder="Enter bio" id="bio" name="bio">
	  </div>
	  <div class="form-group">
	    <label for="photo">photo:</label>
	    <input type="file" class="form-control" name="photo" id="photo">
	  </div>
	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
  </div>
</div>
@endsection