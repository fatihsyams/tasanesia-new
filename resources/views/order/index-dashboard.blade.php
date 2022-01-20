@extends('admin.index')

@section('title', 'Orders')

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
    
   }
</style>
<div class="card">
  <div class="card-body">
    <!-- <a href="" class="btn btn-primary">
      ADD DATA
    </a> -->
    <table class="table table-striped table-bordered mt-4">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Email</th>
          <th>No Handphone</th>
          <th>Product Name</th>
          <th>Quantity Product</th>
          <th>Address Product</th>
          <th>Description Product</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $ord)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $ord->name }}</td>
          <td>{{ $ord->email }}</td>
          <td>{{ $ord->no_handphone }}</td>
          <td>{{ $ord->name_product }}</td>
          <td>{{ $ord->quantity_product }}</td>
          <td>{{ $ord->address_product }}</td>
          <td>{{ $ord->description_product }}</td>
          <td>
            <a href="{{ route('order.edit', $ord->id) }}" class="btn btn-primary">Update</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection