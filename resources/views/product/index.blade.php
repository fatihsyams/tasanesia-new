@extends('layouts.default')

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
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      
      
    </table>
  </div>
</div>

@endsection
