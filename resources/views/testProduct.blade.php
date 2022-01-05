@extends('layouts.navbar')

@section('title', 'Detail Category')

@extends('layouts.default')

@extends('layouts.order')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Page</title>
</head>
<body>
    <div class="container hero">
        <div class="row">
          <div class="col-lg-6">
            <img
              src="/{{ $product->images }}"
              alt=""
              style="width: 100%; border-radius: 10px"
            />
          </div>
          <div class="col-lg-6 mt-5">
            <h2 style="color: #28a745">{{  $product->name }}</h2>
            <p class="mt-4" style="margin-bottom: 10px">Stock : {{  $product->quantity }}</p>
            <p style="margin-bottom: 10px; margin-top: 10px">Price : Rp. {{  $product->price }}</p>
            <p style="margin-bottom: 10px; margin-top: 10px">Category : {{ $product->status }}</p>

            <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn" style="background-color: #28a745; color:white" >Order Now</a>
          </div>
          <h2 style="color: #28a745" class="mt-4">Description</h2>
          <hr style="width: 13%;" class="ms-3">
          <p class="mt-2">{{ $product->description }}</p>
        </div>
      </div>
<!-- Navbar -->
@include('layouts.footer')
<!-- End Navbar -->
</body>
</html>

@endsection