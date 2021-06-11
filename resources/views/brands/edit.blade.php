@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit brand</h1>
  <div class="box">
	<form action="/brands/{{ $brand->id }}/update" method="POST">
	  @csrf
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="text" 
	    class="form-control"
	     placeholder="Enter name" 
	     id="name"
        value="{{ $brand->name}}" 
	     name="name">
	   </div>
	   <div class="form-group">
	    <label for="adress">Adress:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter adress" 
	     id="adress"
        value="{{ $brand->adress}}" 
	     name="adress">
	   </div>
	   <div class="form-group">
	    <label for="phone">Phone:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter phone" 
	     id="phone"
        value="{{ $brand->phone}}" 
	     name="phone">
	   </div>

	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection