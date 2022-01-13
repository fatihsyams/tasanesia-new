@extends('layouts.navbar')

@section('title', 'Our Product')

@extends('layouts.default')
<div class="container-fluid px-0 product_page" style="">
<img src=" {{asset('img/bg-ornamental-plants.jpeg')}}" class="d-block " style="width:100%; max-width: 100%; max-height: 100vh; object-fit: fill" alt="...">
    <div class="carousel-caption d-md-block pt-0" style="text-align: center; responsive-font-size: 10px; top: 50%">
        <span style="font-size: 5vw">Ornamental Plants</span>
        <h6 class="mb-3" style="text-align: center; font-size: 1.5vw; font-weight: 300; margin-top: 15px" >Ornamental plants or garden plants are plants that are grown for decorative purposes in gardens and landscape design projects.</h6>
    </div>
</div>
<div class="container px-0 pb-5">
    <!-- <div class="row no-gutters"> -->
            @foreach ($category as $item)
                <div class="row justify-content-center d-flex" style="margin-top: 35px">
                     <ul class="nav justify-content-center">
                     @foreach ($item->category_subs as $category)
                        <li class="nav-item">
                            <a class="nav-link nav-link1" aria-current="page" href="/menu-products/category/{{ $category->id }}">{{$category->name}}</a>
                        </li>
                     @endforeach
                    </ul>
                </div>
                @yield('product')
            @endforeach
    </div>
</div>

@include('layouts.footer')