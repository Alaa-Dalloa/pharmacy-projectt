@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Add Brands</h1>
  <div class="box">
	<form action=" {{ route ('brands.store') }}"  method="POST" enctype="multipart/form-data">
	  @csrf
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter name"  
	     id="name"
	     name="name">
	   </div>
	   <div class="form-group">
	    <label for="adress">Adress:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter adress" 
	     id="adress"
	     name="adress">
	   </div>
	   <div class="form-group">
	    <label for="phone">Phone:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter phone" 
	     id="phone"
	     name="phone">
	   </div>

	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
  </div>
</div>
@endsection