@extends('layouts.default')

@section('title', 'Update')

@section('content')


<form action="{{ route('order.update', $order->id) }}" method="post" enctype="multipart/form-data">
       @method('PUT')
    {{ csrf_field() }}
    <div class="card">
        <div class="card-body">
            <div class="col">
                <label for="" class="">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $order->name }}">

                <label for="" class="">email</label>
                <div class="col-md-6">
                    <input type="email" name="email" id="email" class="form-control" value="{{ $order->email }}">
                </div>

                <label for="" class="">No Handphone</label>
                <input type="text" name="no_handphone" id="no_handphone" class="form-control" value="{{ $order->no_handphone }}">

                 <label for="" class="">Name Product</label>
                <input type="text" name="name_product" id="name_product" class="form-control" value="{{ $order->name_product }}">

                <label for="" class="">Quantity</label>
                <input type="text" name="quantity_product" id="quantity_product" class="form-control" value="{{ $order->quantity_product }}">

                <label for="" class="">Address</label>
                <input type="text" name="address_product" id="address_product" class="form-control" value="{{ $order->address_product }}">

                <label for="" class="">Description</label>
                <input type="text" name="description_product" id="description_product" class="form-control" value="{{ $order->description_product }}">
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