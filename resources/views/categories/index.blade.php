@extends('layouts.app')
@section('content')
<div class="container">
	<h1 class="text-center">All Categories</h1>
	  <div class="box">
	  	<table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Controller</th>
      </tr>
    </thead>
    <tbody>
    	@foreach ($categories as $catigory)
      <tr>
        <td>{{$catigory->id}}</td>
        <td>{{$catigory->name}}</td>
        <td>
        	<a href="/categories/{{ $catigory->id }}/edit" class="btn btn-success">Edit</a>

            <a href="/categories/{{$catigory->id}}" class="btn btn-danger">Delete</a>


        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
	  </div>
</div>
@endsection