@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Add Calibers</h1>
  <div class="box">
	<form action=" {{ route('calibers.store') }}"method="POST">
	  @csrf
	  <div class="form-group">
	    <label for="caliber">caliber:</label>
	    <input type="string" 
	    class="form-control"
	     placeholder="Enter caliber" 
	     id="caliber"
         
	     name="caliber">
	   </div>
	  <div class="form-group">
	    <label for="product_id">Product_id:</label>
	    <input type="bigInteger" 
	    class="form-control"
	     placeholder="Enter product_id" 
	     id="product_id"
         
	     name="product_id">
	   </div>

	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
  </div>
</div>
@endsection