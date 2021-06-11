@extends('layouts.app')
@section('content')
<div class="container">
	<h1 class="text-center">All Brands</h1>
	  <div class="box">
	  	<table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Adress</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
    	@foreach ($brands as $brand)
      <tr>
        <td>{{$brand->id}}</td>
        <td>{{$brand->name}}</td>
        <td>{{$brand->adress}}</td>
        <td>{{$brand->phone}}</td>
        <td>
        	<a href="/brands/{{ $brand->id }}/edit" class="btn btn-success">Edit</a>

            <a href="/brands/{{ $brand->id}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
	  </div>
	</div>
@endsection	
