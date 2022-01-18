@extends('admin.index')

@section('title', 'Subs')

@section('content')

<div class="card">

  <div class="card-header">
    <a href=" {{ route('categories_subs.create') }} " class="btn btn-primary">
      ADD DATA
    </a>
  </div>

  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Category</th>
          <th>image</th>
          <th>Name</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($category_subs as $sub)
        <tr>
          <td> {{ $loop->iteration }} </td>
          <td> {{ $sub->category->name }} </td>
          <td><img
            src="{{$sub['images']}}"
            class="card-img-top ms-auto"
            alt="..."
            style="width: 80px; height: 30%;"
            /></td>
          <td> {{ $sub->name }} </td>
          <td> {{ $sub->description }} </td>
          <td>
            <form action="{{ route('categories_subs.edit', $sub->id) }}" method="POST">
              @csrf
              @method('GET')
                <button type="submit" class="btn btn-sm btn-primary">
                  EDIT
                </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
     
  </div>
</div>

@endsection
