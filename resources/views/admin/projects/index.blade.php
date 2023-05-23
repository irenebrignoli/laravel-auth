@extends('layouts.admin')

@section('page-title', 'Projects')

@section('content')
  
  <h2 class="fs-4 text-secondary mt-4">My projects list</h2>

  <table class="table table-striped my-4">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ( $projects as $project )
      <tr>
        <td>{{$project->title}}</td>
        <td><img class="personal_img_sm" src="{{$project->image}}" alt=""></td>
        <td class="text-wrap">{{substr($project->description, 0, 200,)}}...</td>
        <td>
          <div class="d-flex gap-3">

            <a class="btn btn-info"  href="{{route('admin.projects.show', $project->slug)}}">Show</a>
            <a class="btn btn-warning"  href="{{route('admin.projects.edit', $project->slug)}}">Edit</a>
          
            <form class="form_delete_post" action="{{route('admin.projects.destroy', ['projects' => $project->slug])}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>

          </div>
        
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection