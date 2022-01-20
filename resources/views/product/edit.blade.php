@extends('admin.index')

@section('title', 'Update Product')

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

<h1 class="edit_product" style="color:#315343;">Edit product data</h1>

<form action="/product/{{ $data->id }}/update" method="POST" enctype="multipart/form-data">
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
                <label for="" class="">Image Product</label>
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
                    <label for="" class="col-sm-2 col-form-label">Price</label>
                    <input type="text" name="price" class="form-control"  value="{{ $data->price}}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Quantity</label>
                    <input type="text" name="quantity" class="form-control"  value="{{ $data->quantity }}">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Description</label>
                    <input type="text" name="description" class="form-control" value="{{ $data->description }}">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-3 col-form-label">Status</label>
                    <input type="text" name="status" class="form-control" value="{{ $data->status }}">
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