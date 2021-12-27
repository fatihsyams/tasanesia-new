@extends('layouts.navbar')

@section('title', 'Our Product')

@extends('layouts.default')  

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<section>
      <div class="container-fluid p-2 my-0 pb-5"  style="margin-bottom: 100px; background-color: #f1f2f6;">
        <div class="container mt-3 px-5 pb-4">
          <div class="row no-gutters" style="margin-top: 100px">
          <h2
              class="text-center mt-3 mb-4"
              style="font-weight: 700; color: #28a745; font-family: 'EB Garamond', serif;"
            >
              Our Product
            </h2>
            @foreach($data as $product)
            @if($loop->index < 12)
            <div class="col-lg-4 col-xl-3 col-md-6 col-12 col mt-md-3 mt-sm-3 mt-3">
              <a href="detail-product/{{$product->id}}" style="text-decoration: none">
                  <div class="shadow card" style="width: 18rem; border: 2px solid #28a745; min-height: 280px">
                    <img
                    src="{{$product->images}}"
                    class=" img-fluid card-img-top p-3"
                    alt="..."
                    style="width: 100%; max-height: 188px; min-height: 188px; border-radius: 1.25rem"
                    />
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                            <h5 style="color: #28a745">{{$product->name}}</h5>
                          </div>
                          <div class="col-12 text-center">
                            <p style="color: #28a745">Rp. {{$product->price}}</p>
                          </div>
                          <div class="col-12 text-center">
                            <p style="color: #28a745">{{$product->status}}</p>
                          </div>
                        </div>
                    </div>
                  </div>
              </a>
        </div>    
            @endif
         @endforeach
          </div>
        </div>
      </div>
    </section>
</body>
</html>

@endsection