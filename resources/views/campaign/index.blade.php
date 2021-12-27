@extends('admin.index')

@section('title', 'Campaign')

@section('content')

<div class="card">

    <a href="{{ route('campaign.create') }}">Create</a>
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
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
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