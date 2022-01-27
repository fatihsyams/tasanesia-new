@extends('admin.index')

@extends('layouts.editProduct')

@section('title', 'Categories')

@section('content')

<style>
  .btn{
    background-color: #315343;
    color: white;

  }
  .search-container {
  float: right;
  }

  .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  cursor: pointer;
}
.search-container button:hover {
  background: #ccc;
}

  input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border-left: solid 1px #315343;
  border-top: solid 1px #315343;
  border-bottom: solid 1px #315343;
  border-right: none;
  border-radius: 10px 0px 0px 10px
  
}
.btn_search{
  height: 35px;
  border-right: solid 1px #315343;
  border-top: solid 1px #315343;
  border-bottom:solid 1px #315343;
  border-left:none;
  border-radius: 0px 10px 10px 0px
}

  @media (max-width: 767.98px) { 
    .search-container {
      float: left;
      margin: 0px 20px
      }
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
  }
  .btn {
    margin:20px
  }
   }
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <a href="{{ route('product.create') }}" class="btn">
        ADD DATA
        </a>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="search-container">
          <form action="/product/search" type="GET">
            <input type="text" placeholder="Search.." name="query">
            <button type="submit" class="btn_search"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
    </div>
    
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