@extends('layouts.app')
@section('content')
<div class= "container">
   <h1 class="text-center">All Teams</h1>
   <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Count</th>
        <th>Position</th>
        <th>Bio</th>
        <th>Photo</th>
        <th>Controle</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($teams as $team)
      <tr>
        <td>{{ $team->id}}</td>
        <td>{{ $team->name}}</td>
        <td>{{ $team->phone}}</td>
        <td>{{ $team->email}}</td>
        <td>{{ $team->position}}</td>
        <td>{{ $team->bio}}</td>
        <td>{{ $team->photo}}</td>
        <td><a href="/teams/{{ $team->id }}/edit" class="btn btn-success">Edit</a></td>
        <td><a href="/teams/{{ $team->id }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
</div>
@endsection