@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit Products</h1>
  <div class="box">
	  	<form action="/products/{{ $product->id}}/update" method="POST">
	  		  @csrf
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="string" class="form-control" placeholder="Enter name"
	    value="{{ $product->name }}"
	     id="name">
	  </div>
	  <div class="form-group">
	    <label for="name_trade">Name Trade:</label>
	    <input type="string" class="form-control" placeholder="Enter name_trade" 
	    value="{{ $product->name_trade }}"
	    id="name_trade">
	  </div>
	  <div class="form-group">
	    <label for="price">Price:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter price"
	      value="{{ $product->price }}"

	       id="price">
	  </div>
	  <div class="form-group">
	    <label for="count">Count:</label>
	    <input type="string" class="form-control" placeholder="Enter count" 
         value="{{ $product->count }}"
	    id="count">
	  </div>
	  <div class="form-group">
	    <label for="size">Size:</label>
	    <input type="string" class="form-control" placeholder="Enter size" 
	    value="{{ $product->size }}"
	     id="size">
	  </div>
	  <div class="form-group">
	    <label for="start_date">Start date:</label>
	    <input type="string" class="form-control" placeholder="Enter start_date"
        value="{{ $product->start_date }}"
	     id="start_date">
	  </div>
	  <div class="form-group">
	    <label for="end_date">End date:</label>
	    <input type="string" class="form-control" placeholder="Enter end_date"
	     value="{{ $product->end_date }}"
        id="end_date">
	  </div>
	  <div class="form-group">
	    <label for="detailes">Detailes:</label>
	    <input type="text" class="form-control" placeholder="Enter detailes"
	    value="{{ $product->detailes }}"

	     id="detailes">
	  </div>
	  <div class="form-group">
	    <label for="warning_using">Warning_using:</label>
	    <input type="string" class="form-control" placeholder="Enter warning_using"
	   value="{{ $product->warning_using }}"
      id="warning_using">
	  </div>
	  <div class="form-group">
	    <label for="offers">Offers:</label>
	    <input type="string" class="form-control" placeholder="Enter offers"
	   value="{{ $product->offers }}"
         id="offers">
	  </div>
	 
	  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection