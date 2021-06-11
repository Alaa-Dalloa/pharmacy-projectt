@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Add Products</h1>
  <div class="box">
	  	<form action="{{ route ('products.store') }}" method="POST">
	  		  @csrf
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="string" class="form-control" placeholder="Enter name" id="name">
	  </div>
	  <div class="form-group">
	    <label for="name_trade">Name Trade:</label>
	    <input type="string" class="form-control" placeholder="Enter name_trade" id="name_trade">
	  </div>
	  <div class="form-group">
	    <label for="price">Price:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter price" id="price">
	  </div>
	  <div class="form-group">
	    <label for="count">Count:</label>
	    <input type="string" class="form-control" placeholder="Enter count" id="count">
	  </div>
	  <div class="form-group">
	    <label for="size">Size:</label>
	    <input type="string" class="form-control" placeholder="Enter size" id="size">
	  </div>
	  <div class="form-group">
	    <label for="start_date">Start date:</label>
	    <input type="string" class="form-control" placeholder="Enter start_date" id="start_date">
	  </div>
	  <div class="form-group">
	    <label for="end_date">End date:</label>
	    <input type="string" class="form-control" placeholder="Enter end_date" id="end_date">
	  </div>
	  <div class="form-group">
	    <label for="detailes">Detailes:</label>
	    <input type="text" class="form-control" placeholder="Enter detailes" id="detailes">
	  </div>
	  <div class="form-group">
	    <label for="warning_using">Warning_using:</label>
	    <input type="string" class="form-control" placeholder="Enter warning_using" id="warning_using">
	  </div>
	  <div class="form-group">
	    <label for="offers">Offers:</label>
	    <input type="string" class="form-control" placeholder="Enter offers" id="offers">
	  </div>
	  <div class="form-group">
	    <label for="catigory_id">Catigory_id:</label>
	    <input type="bigInteger" class="form-control" placeholder="Enter catigory_id" id="catigory_id">
	  </div>
	  <div class="form-group">
	    <label for="brand_id">Brand_id:</label>
	    <input type="bigInteger" class="form-control" placeholder="Enter brand_id" id="brand_id">
	  </div>
	  <button type="submit" class="btn btn-primary">Add</button>
	</form>
  </div>
</div>
@endsection