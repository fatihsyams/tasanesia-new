@extends('admin.index')

@extends('layouts.editProduct')

@section('title', 'Categories')

@section('content')

<div class="card">
  <div class="card-body">
    <a href="{{ route('product.create') }}" class="btn btn-primary">
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
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
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