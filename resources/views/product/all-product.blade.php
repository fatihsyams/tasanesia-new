@extends('layouts.navbar')

@section('title', 'Our Product')

@extends('layouts.default')  

@extends('product.menu')  

@section('product')

@foreach ($category as $item)



<div class="row" style="position: relative">
     @foreach ($data as $product)
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
            <a href="detail-product/{{$product->id}}" style="text-decoration: none;">
            <div class="semua">
                <img class="image" src="{{$product->images}}">
                <div class="info">
                    <div class="over">
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <p style="font-size: 2rem">{{$product->name}}</p>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <p>Rp{{ number_format($product->price) }}</p>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
            </a>
        </div>
                @endforeach
</div>

@endforeach

@endsection