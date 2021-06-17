@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Add pharmacy</h1>
  <div class="box">
	  	<form action="{{ route ('pharmacies.store') }}" method="POST" enctype="multipart/form-data">
	  	@csrf
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="string" class="form-control" placeholder="Enter name" id="name" name="name">
	  </div>
	  <div class="form-group">
	    <label for="adress">Adress:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter adress" id="adress" name="adress">
	  </div>
	  <div class="form-group">
	    <label for="email">Email:</label>
	    <input type="string" class="form-control" placeholder="Enter email" id="email" name="email">
	  </div>
	  <div class="form-group">
	    <label for="about_us">About_us:</label>
	    <input type="string" class="form-control" placeholder="Enter about_us" id="about_us" name="about_us">
	  </div>
	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
  </div>
</div>
@endsection