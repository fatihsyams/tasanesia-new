@extends('layouts.default')

@section('title', 'Categories')

@section('content')

<div class="card">
  <div class="card-body">
    <a href="{{ route('categories.create') }}" class="btn btn-primary">
      ADD DATA
    </a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Image</th>
          <th>Name</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
       @foreach ($categories as $category)
      <tbody>
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td><img
            src="{{$category['images']}}"
            class="card-img-top ms-auto"
            alt="..."
            style="width: 80px; height: 30%;"
            /></td>
          <td>{{ $category->name }}</td>
          <td>{{ $category->description }}</td>
          <td>
            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-info">
              DETAIL
            </a>
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">
              EDIT
            </a>
            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">
                DELETE
              </button>
            </form>
          </td>
        </tr>
      </tbody>
      @endforeach
      
    </table>
  </div>
</div>

@endsection
