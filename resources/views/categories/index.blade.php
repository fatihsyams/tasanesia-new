@extends('admin.index')

@section('title', 'Categories')

@section('content')
<style>
  .btn{
    background-color: #315343;
    color: white;
    margin: 20px
  }
  @media (max-width: 767.98px) { 
    .table {
      display: block;
      overflow: scroll;
     
    }
    .table-striped{
      table-layout: fixed;
      width: 100%;
    }
    .card-body{
      padding: 0px
    }
    .navbar-nav{
      margin-top: 0px !important
    }
    .btn {
    margin:20px
  }
   }
</style>

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
            <form action="{{ route('categories.edit', $category->id) }}" method="POST">
              @csrf
              @method('GET')
                <button type="submit" class="btn btn-sm btn-primary">
                  EDIT
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
