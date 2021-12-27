@extends('admin.index')

@section('title', 'Campaign')

@section('content')

<div class="card">
    <div class="card-body">
        <form action="{{ route('campaign.store') }} " method="POST" enctype="multipart/form-data">
            {{ csrf_field()}}


            <div class="row mb-3">

                <input type="hidden" name="user_id" id="user_id" class="col-md form-control" value="{{ $user->id }}">
            </div>

            <div class="row mb-3">
                <label class="col-md-2 col-form-select" for="">
                    Images Campaign
                </label>
                <input type="file" name="images" id="images" class="col-md form-control">
            </div>

            <div class="row mb-3">
                <label class="col-md-2 col-form-select" for="">
                    Author
                </label>
                <input type="text" name="name" class="col-md form-control" value="{{ $user->name }}">
            </div>

            <div class="row mb-3">
                <label class="col-md-2 col-form-select" for="">
                    Title Campaign
                </label>
                <input type="text" name="name" class="col-md form-control">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description Campaign</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>

            
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
</div>
</div>


@endsection