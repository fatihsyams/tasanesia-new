@extends('admin.index')

@extends('layouts.editProduct')

@section('title', 'Categories')

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
  .btn {
    margin:20px
  }
   }
</style>

<div class="card">
  <div class="card-body">
    <a href="{{ route('product.create') }}" class="btn">
      ADD DATA
    </a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Image</th>
          <th>Name</th>
          <th>Category</th>
          <th>Sub Category</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Status</th>
          <th>Description</th>

          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($product as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td><img src="{{$item['images']}}" class="card-img-top ms-auto" alt="..." style="width: 80px; height: 30%;" /></td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->category->name }} </td>
          <td>{{ $item->sub_category->name }} </td>
          <td>{{ $item->price }}</td>
          <td>{{ $item->quantity }}</td>
          <td>{{ $item->status }}</td>
          <td>{{ $item->description }}</td>
          <td>
            <form action="{{ route('product.edit', $item->id) }}" method="POST">
              @csrf
              @method('GET')
                <button type="submit" class="btn btn-sm btn-primary">
                  EDIT
                </button>
            </form>
          </td>
          <td>
          <form action="{{ route('product.destroy', $item->id) }}" method="POST">
              @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger" style="background-color: red;"onclick="return confirm('Are you sure for delete this data?')">
            DELETE
            </button>
          </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection