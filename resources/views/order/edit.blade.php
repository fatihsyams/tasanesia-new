@extends('layouts.default')

@section('title', 'Update')

@section('content')
<style>
  .btn{
    background-color: #315343;
    color: white;
  }
  .label-text{
    margin: 10px
  }
  @media (max-width: 575.98px) { 
      .card{
          width: 100% !important
      }
      .row  {
          padding-top: 0px !important;
          padding-bottom: 0px !important;

      }
   }
</style>

<form action="{{ route('order.update', $order->id) }}" method="post" enctype="multipart/form-data">
       @method('PUT')
    {{ csrf_field() }}
    <div class="row d-flex justify-content-center" style="padding-top: 50px; padding-bottom: 50px; background-color:  #315343">
    <div class="card" style="padding: 30px; width: 60%; justify-content: center">
        <div class="card-body">
            <div class="col">
                <label for="" class="label-text">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $order->name }}">

                <label for="" class="label-text">email</label>
                <div class="col-md-6">
                    <input type="email" name="email" id="email" class="form-control" value="{{ $order->email }}">
                </div>

                <label for="" class="label-text">No Handphone</label>
                <input type="text" name="no_handphone" id="no_handphone" class="form-control" value="{{ $order->no_handphone }}">

                 <label for="" class="label-text">Name Product</label>
                <input type="text" name="name_product" id="name_product" class="form-control" value="{{ $order->name_product }}">

                <label for="" class="label-text">Quantity</label>
                <input type="text" name="quantity_product" id="quantity_product" class="form-control" value="{{ $order->quantity_product }}">

                <label for="" class="label-text">Address</label>
                <input type="text" name="address_product" id="address_product" class="form-control" value="{{ $order->address_product }}">

                <label for="" class="label-text">Description</label>
                <input type="text" name="description_product" id="description_product" class="form-control" value="{{ $order->description_product }}">
            </div>
          

            <div class="card-footer">
                <button type="submit btn btn-warning" class="btn btn-success  text-white">
                    SUBMIT
                </button>
            </div>
        </div>
    </div>
    </div>
</form>


@endsection