@extends('layouts.navbar')

@section('title', 'Our Product')

@extends('layouts.default')  

@extends('product.menu')  

@section('product')

@foreach ($category as $item)

<div class="row" style="position: relative">
                @foreach ($data as $product)
                  <div class="col-lg-4 col-md-6 col-sm-12">
                      <a href="/detail-product/{{$product->id}}">
                      <div class="semua">
                          <img class="image" src="{{asset($product->images)}}">
                          <div class="info">
                              <div class="over">
                                  <p style="font-size: 34px">{{$product->name}}</p>
                                  <p>Rp{{number_format($product->price)}}</p>
                              </div>
                          </div>
                      </div>
                      </a>
                  </div>
                @endforeach
</div>

@endforeach

@endsection