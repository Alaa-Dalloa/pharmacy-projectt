@extends('layouts.app')
@section('content')
<div class="container">
	<h1 class="text-center">All Images</h1>
	  <div class="box">
      	<table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Images</th>
              <th>product_id</th>
              <th>Controller</th>
            </tr>
          </thead>
          <tbody>
          	@foreach( $images as $image)
            <tr>
              <td>{{ $image->id }}</td>
              <td>{{ $image->photoName }}</td>
              <td>{{ $image->product_id }}</td>
              
              <td>
              	<a href="/images/{{ $image->id }}/edit" class="btn btn-success">Edit</a>

                  <a href="/images/{{ $image->id }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
	  </div>
</div>
@endsection