@extends('layouts.navbar')

@section('title', 'Our Product')

@extends('layouts.default')  

@section('content')
<div class="container-fluid hero p-2 pb-5"  style="margin-bottom: 100px; background-color: #f1f2f6;">
        <div class="container mt-3 px-5 pb-4">
          <div class="row no-gutters">
          <h2
              class="text-center mt-3 mb-4"
              style="font-weight: 700; color: #28a745; font-family: 'EB Garamond', serif;"
            >
              Our Product
            </h2>
            @foreach($data as $product)
            <div class="col-lg-4 col-xl-3 col-md-6 col-12 col mt-md-3 mt-sm-3 mt-3">
              <a href="detail-product/{{$product->id}}" style="text-decoration: none">
                  <div class="shadow card" style="width: 18rem; border: 2px solid #28a745; min-height: 280px">
                    <img
                    src="{{ asset($product->images)}}"
                    class=" img-fluid card-img-top p-3"
                    alt="..."
                    style="width: 100%; min-height: 188px; border-radius: 1.25rem"
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
         @endforeach
          </div>
        </div>
      </div>
      @include('layouts.footer')
