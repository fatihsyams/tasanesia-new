@extends('layouts.navbar')

@section('title', 'Our Product')

@extends('product.menu')

@section('sub_category')
  <h6 class="text-tengah" style="font-weight: 500;color: #315343; text-align: center; font-size: 2.5rem !important; margin-top: 25px" >{{$data_category->sub_category->name}}</h6>
  <p class="text-tengah" style="font-size: 1.3vw; font-weight: 300; text-align: center; margin-top: 10px; margin-bottom: 30px" >{{$data_category->sub_category->description}}</p>
  <hr>
@endsection

@section('product')

@foreach ($category as $item)

<div class="row no-gutters" style="position: relative; margin-top: 30px">
     @foreach ($data as $product)
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
            <a href="/detail-product/{{$product->id}}" style="text-decoration: none;">
            <div class="semua">
                <img class="image" src="{{asset($product->images)}}">
                <div class="info">
                    <div class="over">
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <p style="font-size: 2rem">{{$product->name}}</p>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <p>Rp{{ number_format(($product->price), 0, '.', '.')}}</p>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
            </a>
        </div>
    @endforeach
        <div class="row d-flex justify-content-center mx-auto" style="margin-top:60px">
          <a class="btn account-auth-login" href="/menu-products/category/{{$data_category_increment}}" type="button" style="color:#315343; font-size: 15px; border: 2px solid #315343; width: 200px">See next product</a>
        </div>  
</div>

@endforeach

@endsection