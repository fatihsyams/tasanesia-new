@extends('admin.index')

@section('title', 'Campaign')

@section('content')
<style>
     .btn{
            background-color: #315343;
            color: white
        }
    @media (max-width: 767.98px) { 
        .card-body{
            padding:10px
        }
       
     }
</style>

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
                <input type="text" name="author" class="col-md form-control" value="{{ $user->name }}">
            </div>

            <div class="row mb-3">
                <label class="col-md-2 col-form-select" for="">
                    Title Campaign
                </label>
                <input type="text" name="title" class="col-md form-control">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description Campaign</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Paragraph 2</label>
                <textarea class="form-control" name="description_2" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Paragraph 3</label>
                <textarea class="form-control" name="description_3" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Paragraph 4</label>
                <textarea class="form-control" name="description_4" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Paragraph 5</label>
                <textarea class="form-control" name="description_5" rows="3"></textarea>
            </div>
            
            <button type="submit" class="btn ">
                Submit
            </button>
        </form>
    </div>
</div>
</div>


@endsection