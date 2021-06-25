@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">All Products</h1>
   <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Name_trade</th>
        <th>Price</th>
        <th>Count</th>
        <th>Size</th>
        <th>Start_date</th>
        <th>End_date</th>
        <th>Detailes</th>
        <th>Warning_using</th>
        <th>Offers</th>
        <th>Catigory_id</th>
        <th>Brand_id</th>
        <th>gauge_id</th>
        <th>Controle</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($products as $product)
      <tr>
        <td>{{ $product->id}}</td>
        <td>{{ $product->name}}</td>
        <td>{{ $product->name_trade}}</td>
        <td>{{ $product->price}}</td>
        <td>{{ $product->count}}</td>
        <td>{{ $product->size}}</td>
        <td>{{ $product->start_date}}</td>
        <td>{{ $product->end_date}}</td>
        <td>{{ $product->detailes}}</td>
        <td>{{ $product->warning_using}}</td>
        <td>{{ $product->offers}}</td>
        <td>{{ $product->catigory_id}}</td>
        <td>{{ $product->brand_id}}</td>
        <td>{{ $product->gauge_id}}</td>
        <td><a href="/products/{{ $product->id }}/edit" class="btn btn-success">Edit</a></td>
        <td><a href="/products/{{ $product->id }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
</div>
@endsection