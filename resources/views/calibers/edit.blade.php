@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit caliber</h1>
  <div class="box">
	<form action="/calibers/{{ $caliber->id }}/update" method="POST">
	  @csrf
       <div class="form-group">
	    <label for="product_id">Product_id:</label>
	    <input type="bigInteger" 
	    class="form-control"
	     placeholder="Enter product_id" 
	     id="product_id"
         value="{{ $caliber->caliber}}"
	     name="product_id">
	   </div>

	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection