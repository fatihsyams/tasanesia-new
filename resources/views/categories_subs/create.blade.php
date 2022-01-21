@extends('admin.index')

@section('title', 'Subs')

@section('content')
.container
<style>
  .btn{
    background-color: #315343;
    color: white;
  }
</style>
<div class="card" style="width: 90%"> 
    <div class="card-body">
        <form action="{{ route('categories_subs.store') }} " method="POST"  enctype="multipart/form-data">
            {{ csrf_field()}}
            <div class="row mb-3">
                <label class="col-md-2 col-form-select" for="">
                    Category
                </label>
                <select name="category_id" id="" class="col-md form-select">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> 
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="row mb-3">
                <label class="col-md-2 col-form-select" for="">
                    Name Sub Category
                </label>
                <input type="text" name="name" class="col-md form-control">
            </div>

            <div class="row mb-3">
                <label class="col-md-2 col-form-select" for="">
                    Images Sub Category
                </label>
                <input type="file" name="images" id="images" class="col-md form-control">
            </div>

             <div class="row mb-3">
                <label class="col-md-2 col-form-select" for="">
                    Description Sub Category
                </label>
                <input type="text" name="description" class="col-md form-control">
            </div>
            <button type="submit" class="btn" style="background-color: #315343; color: white ">
                Submit
            </button>
        </form>
    </div>
</div>
</div>


@endsection