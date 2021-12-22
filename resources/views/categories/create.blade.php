@extends('layouts.default')

@section('title', 'Categories')

@section('content')

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="col m-3">
                <label for="" class="">Name Category</label>
                <input type="text" name="name" id="name" class="form-control">

                <label for="" class="">Image Category</label>
                <input type="text" name="images" id="images" class="form-control">

                <label for="" class="">Description Category</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
            <div class="card-footer">
                <button type="submit">
                    SUBMIT
                </button>
            </div>
        </div>
    </div>
</form>

@endsection