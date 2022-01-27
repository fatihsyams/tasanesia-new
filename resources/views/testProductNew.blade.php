@extends('layouts.navbar')

@section('title', 'Detail Category')

@extends('layouts.default')

@section('content')

    @foreach ($category->product as $item)
    <p style="margin-top:122px;">{{ $item->description }}</p>
    @endforeach
@endsection


