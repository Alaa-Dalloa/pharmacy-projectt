@extends('layouts.app')
@section('content')
<div class="container">
	<h1 class="text-center">All Calibers</h1>
	  <div class="box">
      	<table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
               <th>Gauge</th>
              <th>product_id</th>
              <th>Controller</th>
            </tr>
          </thead>
          <tbody>
          	@foreach($gauges as $gauge)
            <tr>
              <td>{{ $gauge->id }}</td>
              <td>{{ $gauge->value }}</td>
              <td>{{ $product_id->product_id }}</td>
              <td>
              	<a href="/gauges/{{ $gauge->id }}/edit" class="btn btn-success">Edit</a>

                  <a href="/gauges/{{ $gauge->id }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
	  </div>
</div>
@endsection