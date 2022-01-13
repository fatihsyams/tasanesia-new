@extends('layouts.navbar')

@section('title', 'Detail Category')

@extends('layouts.default')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css" />
</head>
<body>

<div class="container-fluid text-center py-5 px-0" style="height: 100%;">
    <img src="/{{ $category->images }}" class="d-block" style="width:100%; max-width: 100%; max-height: 100vh; object-fit: fill" alt="...">
    <h1 class="centered text-light" style="font-size: 5vw">{{ $category->name }}</h1>
    <h6 class="centered text-light" style="font-size: 1.1vw; top: 67%">{{ $category->description }}</h1>
</div>

<div class="container pb-5">
    <div class="row">
            @foreach ($sub_category as $item)
                <h1 class="mt-5">{{ $item->name }}</h1>
                <h6 class="mb-3" style="font-weight: 300">{{ $item->description }}</h4>
                    @foreach ($item->product as $prd)
                    @if($loop->index < 4)
                    <div class="shadow card col-lg-2 col-md-3 col-sm-6 py-3 mx-1 mt-2 text-center">    
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
                        <h6 class="p-text">Price : Rp{{ number_format(($prd->price), 0, '.', '.') }}</h6>
                        <h6 class="p-text">Stock : {{ $prd->quantity }}</h6>
                        <h6 class="p-text">{{ $prd->descriptions }}</h6>
                        <h6 class="p-text">{{ $prd->status }} typed products</h6>
                    </a>
                    </div>
                    @endif
                    @endforeach
                    <div class="shadow card col-lg-2 col-md-3 col-sm-6 py-3 mx-1 mt-2 text-center" style="padding-top: 100px !important">    
                    <a href="/menu-products/category/{{ $item->id }}" style="text-decoration: none; color: black; font-family: 'Signika Negative', sans-serif;">
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
<!-- Navbar -->
@include('layouts.footer')
<!-- End Navbar -->
</body>
</html>

@endsection