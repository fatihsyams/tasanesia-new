@extends('layouts.default')

@section('title', 'Tasanesia')

@section('content')

    @foreach ($category_sub as $sub)
        <p>{{ $sub->name }}</p>
    @endforeach

    @foreach ($product as $item)
       <a href="">{{ $item->name }}</a>
    @endforeach

@endsection