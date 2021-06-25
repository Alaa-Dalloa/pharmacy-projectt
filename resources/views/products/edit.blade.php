@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit Products</h1>
  <div class="box">
	  	<form action="/products/{{ $product->id}}/update" method="POST" enctype="multipart/form-data">
	  	@csrf
	  <div class="form-group">
	    <label for="name">Name:</label>
	    <input type="string" class="form-control" placeholder="Enter name" id="name" name="name" value="{{ $product->name }}">
	  </div>
	  <div class="form-group">
	    <label for="name_trade">Name Trade:</label>
	    <input type="string" class="form-control" placeholder="Enter name_trade" id="name_trade" name="name_trade" value="{{ $product->name_trade }}">
	  </div>
	  <div class="form-group">
	    <label for="price">Price:</label>
	    <input type="string"
	     class="form-control"
	      placeholder="Enter price" id="price" name="price" value="{{ $product->price }}">
	  </div>
	  <div class="form-group">
	    <label for="count">Count:</label>
	    <input type="string" class="form-control" placeholder="Enter count" id="count" name="count" value="{{ $product->count }}">
	  </div> 
	  <div class="form-group">
	    <label for="size">Size:</label>
	    <input type="string" class="form-control" placeholder="Enter size" id="size" name="size" value="{{ $product->size }}">
	  </div>
	  <div class="form-group">
	    <label for="start_date">Start date:</label>
	    <input type="string" class="form-control" placeholder="Enter start_date" id="start_date" name="start_date" value="{{ $product->start_date }}">
	  </div>
	  <div class="form-group">
	    <label for="end_date">End date:</label>
	    <input type="string" class="form-control" placeholder="Enter end_date" id="end_date" name="end_date" value="{{ $product->end_date }}">
	  </div>
	  <div class="form-group">
	    <label for="detailes">Detailes:</label>
	    <input type="text" class="form-control" placeholder="Enter detailes" id="detailes" name="detailes" value="{{ $product->detailes }}">
	  </div>
	  <div class="form-group">
	    <label for="warning_using">Warning_using:</label>
	    <input type="string" class="form-control" placeholder="Enter warning_using" id="warning_using" name="warning_using" value="{{ $product->warning_using }}">
	  </div>
	  <div class="form-group">
	    <label for="offers">Offers:</label>
	    <input type="string" class="form-control" placeholder="Enter offers" id="offers"  name="offers" value="{{ $product->offers }}">
	  </div>
	  <div class="form-group">
	    <label for="catigory_id">Catigory:</label>
	    <select class="form-control" name="catigory_id">
	    	@foreach($categories as $one)
	    	<option value="{{ $one->id }}">{{ $one->name }}</option>
	    	@endforeach
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="brand_id">Brand:</label>
	    <select class="form-control" name="brand_id">
	    	@foreach($brands as $one)
	    	<option value="{{$one->id}}">{{$one->name}}</option>
	    	@endforeach
	    </select>
	  <button type="submit" class="btn btn-primary">Updat</button>
	</form>
  </div>
</div>
@endsection