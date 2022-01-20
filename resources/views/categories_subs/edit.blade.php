@extends('admin.index')

@section('title', 'Update Sub Category')

@section('content')
<style>
    .btn{
        background-color:#315343;
        color:white
        
    }
    @media (max-width: 767.98px) { 
        .edit_product{
            font-size: 30px;
            margin: 20px
        }
        .card-body{
            padding:0px
        }
    }
</style>

<h1 class="edit_product">Edit Sub category data</h1>

<form action="/categories_subs/{{ $data->id }}/update" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-body"> 

        <div class="row m-3">               
                <div class="col-sm">
                <img src="{{ asset($data['images']) }}" alt="" style="width: 80px;height: 100%;">
                </div>
            </div>

        <div class="row m-3">               
                <div class="col-sm">
                <label for="" class="">Image Sub Category</label>
                <input type="file" name="images" id="images" class="form-control">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $data->name}}">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Name</label>
                    <input type="text" name="description" class="form-control" value="{{ $data->description}}">
                </div>
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn">
                SUBMIT
            </button>
        </div>
    </div>
</form>

@endsection