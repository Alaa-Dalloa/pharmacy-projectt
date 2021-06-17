@extends('layouts.app')
@section('content')
<div class="container">
	<h1 class="text-center">All Calibers</h1>
	  <div class="box">
      	<table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
               <th>Caliber</th>
              <th>product_id</th>
              <th>Controller</th>
            </tr>
          </thead>
          <tbody>
          	@foreach($calibers as $caliber)
            <tr>
              <td>{{ $caliber->id }}</td>
              <td>{{ $caliber->name }}</td>
              <td>{{ $product_id->product_id }}</td>
              <td>
              	<a href="/calibers/{{ $caliber->id }}/edit" class="btn btn-success">Edit</a>

                  <a href="/calibers/{{ $caliber->id }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
	  </div>
</div>
@endsection