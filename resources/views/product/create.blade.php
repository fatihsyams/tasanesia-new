@extends('layouts.default')

@section('title', 'Product')

@section('content')

<form action="" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="col m-3">
                <label for="" class="">Name Category</label>
                <select name="category_id" id="" class="col-md form-select">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>

                <label for="" class="">Name Sub Category</label>
                <select name="category_id" id="" class="col-md form-select">
                    @foreach ($category_subs->categories as $sub)
                    <option value="{{ $category->id }}">
                        {{ $sub->name }}
                    </option>
                    @endforeach
                </select>

                <label for="" class="">Name Product</label>
                <input type="text" name="description" id="description" class="form-control">

                <label for="" class="">Image Product</label>
                <input type="text" name="description" id="description" class="form-control">

                <label for="" class="">Price Product</label>
                <input type="text" name="description" id="description" class="form-control">

                <label for="" class="">Description Product</label>
                <input type="text" name="description" id="description" class="form-control">

                <label for="" class="">Status</label>
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