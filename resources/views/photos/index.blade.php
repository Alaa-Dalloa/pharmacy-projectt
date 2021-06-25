@extends('layouts.app')
@section('content')
<div class="container">
	<h1 class="text-center">All Photos</h1>
	  <div class="box">
      	<table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>photos</th>
              <th>product_id</th>
              <th>Controller</th>
            </tr>
          </thead>
          <tbody>
          	@foreach( $photos as $photo)
            <tr>
              <td>{{ $image->id }}</td>
              <td>{{ $photo->photo }}</td>
              <td>{{ $image->product_id }}</td>
              <td>
              	<a href="/photos/{{ $image->id }}/edit" class="btn btn-success">Edit</a>

                  <a href="/photos/{{ $image->id }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
	  </div>
</div>
@endsection