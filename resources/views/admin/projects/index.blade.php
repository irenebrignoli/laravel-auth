@extends('layouts.admin')

@section('content')

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ( $projects as $project )
      <tr>
        <td>{{$project->title}}</td>
        <td>{{$project->description}}</td>
        <td>{{$project->image}}</td>
        <td>Show</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection