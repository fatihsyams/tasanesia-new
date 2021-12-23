@extends('layouts.default')

@section('title', 'Home')

@section('content')

<div class="card">
    <div class="card-body">
        @foreach ($category as $item)
        <img src="{{ $item->images }}" alt="">
        <a href="{{ route('home.show', $item->id) }}">{{ $item->name }}</a>
        <p>{{ $item->description }}</p>
        @endforeach
    </div>
</div>

@endsection