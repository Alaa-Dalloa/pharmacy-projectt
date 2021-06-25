@extends('layouts.app')
@section('content')
<div class="container">
	<h1 class="text-center">All Photos</h1>
	  <div class="box">
      	<table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>photo</th>
              <th>product_id</th>
              <th>Controller</th>
            </tr>
          </thead>
          <tbody>
          	@foreach( $photos as $photo)
            <tr>
              <td>{{ $photo->id }}</td>
              <td>{{ $photo->photo }}</td>
              <td>{{ $photo->product_id }}</td>
              <td>
              	<a href="/photos/{{ $photo->id }}/edit" class="btn btn-success">Edit</a>

                  <a href="/photos/{{ $photo->id }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
	  </div>
</div>
@endsection