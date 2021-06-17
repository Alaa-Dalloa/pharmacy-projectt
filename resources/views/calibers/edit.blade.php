@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit caliber</h1>
  <div class="box">
	<form action="/calibers/{{ $caliber->id }}/update" method="POST" enctype="multipart/form-data">
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
	    <label for="product_id">Product:</label>
	    <select class="form-control" name="product_id">
	    	@foreach($products as $one)
	    	<option value="{{ $one->id }}">{{ $one->name }}</option>
	    	@endforeach
	    </select>
	  </div>

	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection