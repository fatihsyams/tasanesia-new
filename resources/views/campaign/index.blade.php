@extends('admin.index')

@section('title', 'Campaign')

@section('content')
<style>
  .btn{
    background-color: #315343;
    color: white;
  }
  @media (max-width: 767.98px) { 
    .table {
      display: block;
      overflow: scroll;
     
    }
    .table-striped{
      table-layout: fixed;
      width: 100%;
    }
    .card-body{
      padding: 0px
    }
    .navbar-nav{
      margin-top: 0px !important
    }
    .btn {
    margin:20px;
    width:30% !important
    }
   }
</style>

<div class="card">

    <a href="{{ route('campaign.create') }}" class="btn" style="width: 7%; margin: 20px">Create</a>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($campaign as $data)
                <tr>
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $data->user->name }} </td>
                    <td><img src="{{$data['images']}}" class="card-img-top ms-auto" alt="..." style="width: 80px; height: 30%;" /></td>
                    <td> {{ $data->name }} </td>
                    <td> {{ $data->description }} </td>
                    <td>
                        <form action="{{ route('campaign.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" style="background-color: red" onclick="return confirm('Are you sure for delete this data?')">
                                DELETE
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

    </div>
</div>
</div>


@endsection