@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">Edit Pharmacy</h1>
  <div class="box">
	<form action="/pharmacies/{{ $pharmacy->id}}/update" method="POST" enctype="multipart/form-data">
		@csrf
		<div class= "form-group">
			    <label for="name">Name:</label>
			    <input type="string" 
			    class="form-control" 
			    placeholder="Enter name" 
			    id="name" 
			    value="{{ $pharmacy->name }}"></div>
      <div class= "form-group">		
            <label for="adress">Adress:</label>
			   <input type="string" 
			    class="form-control" 
			    placeholder="Enter adress" 
			    id="adress" 
			    value="{{ $pharmacy->adress }}" >
			 </div>
			  <div class=" form-group" >
			    <label for="email">Email:</label>
			    <input type="string" 
			     class="form-control" placeholder="Enter email" 
			     id="email"
			      value="{{ $pharmacy->email}}">
			  </div>
			  <div class= " form-group" ><label for="about_us">About_us:</label>
			    <input type="string" 
			    class="form-control"
			     placeholder="Enter about_us" 
			     id="about_us" 
			     value="{{ $pharmacy->about_us}}"> 
		</div>
			 
			  <button type="submit" class="btn btn-primary">Update</button>
	</form>
  </div>
</div>
@endsection