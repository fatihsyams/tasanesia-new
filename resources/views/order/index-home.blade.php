@extends('layouts.default')

@section('title', 'Order')

@section('content')


<form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field()}}
    <div class="card">
        <div class="card-body">
            <div class="col m-3">
                <label for="" class="">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">

                <label for="" class="">email</label>
                <div class="col-md-6">
                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                </div>

                <label for="" class="">No Handphone</label>
                <input type="text" name="no_handphone" id="no_handphone" class="form-control">

                 <label for="" class="">Name Product</label>
                <input type="text" name="name_product" id="name_product" class="form-control" value="{{ $product->name }}">

                <label for="" class="">Quantity</label>
                <input type="text" name="quantity_product" id="quantity_product" class="form-control">

                <label for="" class="">Address</label>
                <input type="text" name="address_product" id="address_product" class="form-control">

                <label for="" class="">Description</label>
                <input type="text" name="description_product" id="description_product" class="form-control">
            </div>
          

            <div class="card-footer">
                <button type="submit btn btn-warning" class="btn btn-success  text-white">
                    SUBMIT
                </button>
            </div>
        </div>
    </div>
</form>


@endsection