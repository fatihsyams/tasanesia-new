@extends('layouts.navbar')

@section('title', 'Our Product')

@extends('layouts.default')

<div class="container hero pb-5">
    <div class="row">
        <h1 class="mt-5" style="text-align: center; font-weight: 700; font-size: 40px">Ornamental Plants</h1>
        <h6 class="mb-3" style="text-align: center; font-size: 18px; font-weight: 500; color: rgba(68, 68, 68, 1); margin-top: 15px" >Ornamental plants or garden plants are plants that are grown for decorative purposes in gardens and landscape design projects.</h6>
            @foreach ($category as $item)
                <div class="row" style="margin-top: 35px">
                     <ul class="nav justify-content-center">
                     @foreach ($item->category_subs as $category)
                        <li class="nav-item">
                            <a class="nav-link nav-link1" aria-current="page" href="/menu-products/category/{{ $category->id }}">{{$category->name}}</a>
                        </li>
                     @endforeach
                    </ul>
                    @yield('product')
                </div>
            @endforeach
    </div>
</div>

@include('layouts.footer')