@extends('admin.index')

@section('title', 'Categories')

@section('content')
<style>
  .btn{
    background-color: #315343;
    color: white;
  }
</style>

<form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field()}}
    <div class="card">
        <div class="card-body">
            <div class="col m-3">
                <label for="" class="">Name Category</label>
                <input type="text" name="name" id="name" class="form-control">

                <label for="" class="">Image Category</label>
                <div class="col-md-6">
                    <input type="file" name="images" id="images" class="form-control">
                </div>

                <label for="" class="">Description Category</label>
                <input type="text" name="description" id="description" class="form-control">
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