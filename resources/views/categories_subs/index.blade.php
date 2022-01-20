@extends('admin.index')

@section('title', 'Subs')

@section('content')
<style>
  .btn{
    background-color: #315343;
    color: white;
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
    #sidebar{
      height: 100% !important;
      width: 100%
    }
    .btn {
    margin:20px
  }
   }
</style>

<div class="card">

  <div class="card-header">
    <a href=" {{ route('categories_subs.create') }} " class="btn btn-primary">
      ADD DATA
    </a>
  </div>

  <div class="card-body" style="">
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
