@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">All Pharmacies</h1>
   <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Adress</th>
        <th>Email</th>
        <th>About_us</th>
        <th>Controle</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($pharmacies as $pharmacy)
      <tr>
        <td>{{ $pharmacy->id}}</td>
        <td>{{ $pharmacy->name}}</td>
        <td>{{ $pharmacy->adress}}</td>
        <td>{{ $pharmacy->email}}</td>
        <td>{{ $pharmacy->about_us}}</td>

        <td><a href="/pharmacies/{{ $pharmacy->id }}/edit" class="btn btn-success">Edit</a></td>
        <td><a href="/pharmacies/{{ $pharmacy->id }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
</div>
@endsection