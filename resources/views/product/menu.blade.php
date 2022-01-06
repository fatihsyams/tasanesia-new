@extends('layouts.navbar')

@section('title', 'Our Product')

@extends('layouts.default')  

@section('content')

<div class="container hero">
    <div class="row">
            @foreach ($category as $item)
                <h1 class="mt-5" style="text-align: center; font-weight: 700; font-size: 40px">{{ $item->name }}</h1>
                <h6 class="mb-3" style="text-align: center; font-size: 18px; font-weight: 500; color: rgba(68, 68, 68, 1); margin-top: 15px" >{{ $item->description }}</h6>
                <div class="row" style="margin-top: 35px">
                     <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link nav-link1" aria-current="page" href="#nav-category">All Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link1" href="#" style="">Plants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link1" href="#">Fruits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link1">Halal Foods</a>
                        </li>
                    </ul>
                </div>


                <div class="row" style="position: relative">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="semua">
                            <img class="image" src="assets/img/plants.jpg">
                            <div class="info">
                                <div class="over">
                                    <p style="font-size: 34px">Monstera Deliciosa</p>
                                    <p>Rp350.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="semua">
                            <img class="image" src="assets/img/plants.jpg">
                            <div class="info">
                                <div class="over">
                                    <p style="font-size: 34px">Monstera Deliciosa</p>
                                    <p>Rp350.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="semua">
                            <img class="image" src="assets/img/plants.jpg">
                            <div class="info">
                                <div class="over">
                                    <p style="font-size: 34px">Monstera Deliciosa</p>
                                    <p>Rp350.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="semua">
                            <img class="image" src="assets/img/plants.jpg">
                            <div class="info">
                                <div class="over">
                                    <p style="font-size: 34px">Monstera Deliciosa</p>
                                    <p>Rp350.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="semua">
                            <img class="image" src="assets/img/plants.jpg">
                            <div class="info">
                                <div class="over">
                                    <p style="font-size: 34px">Monstera Deliciosa</p>
                                    <p>Rp350.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="semua">
                            <img class="image" src="assets/img/plants.jpg">
                            <div class="info">
                                <div class="over">
                                    <p style="font-size: 34px">Monstera Deliciosa</p>
                                    <p>Rp350.000</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                            
                        </div>
                    </div> 
                    @foreach ($item->product as $prd)
                    
                    @if($loop->index < 4)
                   
                     <!-- <div class="shadow card col-lg-2 col-md-3 col-sm-6 py-3 mx-1 mt-2 text-center"> 
                      
                    <a href="/detail-product/{{ $prd->id }}" style="text-decoration: none; color: black; font-family: 'Signika Negative', sans-serif;">
                    <img
                        class="img-fluid img-border"
                        src="/{{ $prd->images }}"
                        alt=""
                        style="max-height: 194px !important; min-height: 90px"
                    />
                    <h4 class="text-wrap mt-2 mb-3" style="text-align: center">
                        {{ $prd->name }}
                    </h4>
                        <h6 class="p-text">Price : Rp. {{ $prd->price }}</h6>
                        <h6 class="p-text">Stock : {{ $prd->quantity }}</h6>
                        <h6 class="p-text">{{ $prd->descriptions }}</h6>
                        <h6 class="p-text">{{ $prd->status }} typed products</h6>
                    </a> -->
                    </div> 
                    @endif
                    @endforeach 
                    <div class="shadow card col-lg-2 col-md-3 col-sm-6 py-3 mx-1 mt-2 text-center" style="padding-top: 100px !important">    
                    <a href="/all-products/{{ $item->id }}" style="text-decoration: none; color: black; font-family: 'Signika Negative', sans-serif;">
                    <i
                        class="fas fa-arrow-circle-right">
                    </i>
                    <h4 class="text-wrap mt-2 mb-3" style="text-align: center">
                        See more
                    </h4>
                    </a>
                    </div>
            @endforeach
    </div>
</div>

@include('layouts.footer')

@endsection