@extends('layouts.navbar')

@section('title', 'Our Product')

@extends('layouts.default')  

@section('content')

<div class="container hero">
    <div class="row">
            @foreach ($category as $item)
                <h1 class="mt-5">{{ $item->name }}</h1>
                <h6 class="mb-3">{{ $item->description }}</h4>
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
                        <h6 class="p-text">Price : Rp. {{ $prd->price }}</h6>
                        <h6 class="p-text">Stock : {{ $prd->quantity }}</h6>
                        <h6 class="p-text">{{ $prd->descriptions }}</h6>
                        <h6 class="p-text">{{ $prd->status }} typed products</h6>
                    </a>
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