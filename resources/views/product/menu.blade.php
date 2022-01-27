@extends('layouts.navbar')

@section('title', 'Our Product')

@extends('layouts.default')
<div class="container px-0 pb-5" style="margin-top: 110px !important">
    <!-- <div class="row no-gutters"> -->
    @yield('sub_category')
            @foreach ($category as $item)
                <div class="row justify-content-center d-flex" style="margin-top: 12px">
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