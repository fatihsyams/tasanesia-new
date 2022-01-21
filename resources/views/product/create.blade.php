@extends('admin.index')

@section('title', 'Product')

@section('content')
<style>
  .btn{
    background-color: #315343;
    color: white;
  }
</style>

<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field()}}

  <div class="card">
    <div class="card-body">
      <div class="col m-3">
        <div class="row mb-3">
          <label for="category" class="col-md-2 col-form-control">Category</label>
          <div class="col-md-2">
            <select class="form-select" name="category_id" id="category">
              <option hidden>Choose Category</option>
              @foreach ($categories as $category)
              <option value="{{ $category->id }}">
                {{ $category->name }}
              </option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="" class="col-md-2 col-form-control">
            Category Sub
          </label>
          <div class="col-md">
            <select class="form-control" name="category_sub_id" id="course"></select>
          </div>
        </div>

        <label for="" class="">Name Product</label>
        <input type="text" name="name" id="name" class="form-control">

        <label for="" class="">Image Product</label>
        <input type="file" name="images" id="images" class="form-control">

        <label for="" class="">Price Product</label>
        <input type="text" name="price" id="price" class="form-control">

        <label for="" class="">Quantity Product</label>
        <input type="text" name="quantity" id="quantity" class="form-control">

        <label for="" class="">Description Product</label>
        <input type="text" name="description" id="description" class="form-control">

        <label for="" class="">Status</label>
        <input type="text" name="status" id="status" class="form-control">
      </div>
      <div class="card-footer">
        <button type="submit" class="btn"> 
          SUBMIT
        </button>
      </div>
    </div>
  </div>
</form>

@endsection