@extends('layouts.default')

@section('title', 'Subs')

@section('content')

<div class="card">
    <div class="card-body">
        <form action="{{ route('categories_subs.store') }} " method="POST">
            @csrf
            <div class="row mb-3">
                <label class="col-md-2 col-form-select" for="">
                    Category
                </label>
                <select name="category_id" id="" class="col-md form-select">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="row mb-3">
                <label class="col-md-2 col-form-select" for="">
                    Name Sub Category
                </label>
                <input type="text" name="name" class="col-md form-control">
            </div>

            <div class="row mb-3">
                <label class="col-md-2 col-form-select" for="">
                    Images Sub Category
                </label>
                <input type="text" name="images" class="col-md form-control">
            </div>

             <div class="row mb-3">
                <label class="col-md-2 col-form-select" for="">
                    Description Sub Category
                </label>
                <input type="text" name="description" class="col-md form-control">
            </div>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
</div>
</div>


@endsection