@extends('layouts.navbar')

@section('title', 'Campaign')

@extends('layouts.default')  

@section('content')

<div class="container">
        <div class="col-lg-6 me-auto ms-auto" style="margin-top: 95px">
          <div class="header">
                <h1 style="margin: 30px 0px; font-family: arial; color:#315343 ">
                {{ $data->title }}
                </h1>
                <div class="d-flex mb-3 p-2 align-items-center">
            <img
              src="{{$data->user['img_profile']}}"
              alt=""
              style="
                /* border-radius: ; */
                display: block;
                max-width: 80px;
                height: auto;
              "
              class="img-penulis"
            />
            <p class="nama-penulis">{{ $data->user['name'] }} | {{date('d-m-Y', strtotime($data->created_at))}}</p>
          </div>
              </div>
              <div class="row" style="margin: 50px 0px 50px 0px ">
                <img src="{{ asset($data->images) }}" alt="" srcset="">
              </div>
              <div class="description">
                <p style="margin: 10px 0px 20px 0px; text-indent: 40px">{{ $data->description }}</p>
              </div>

              <div class="description">
                <p style="margin: 10px 0px 20px 0px; text-indent: 40px">{{ $data->description_2 }}</p>
              </div>

              <div class="description">
                <p style="margin: 10px 0px 20px 0px; text-indent: 40px">{{ $data->description_3 }}</p>
              </div>

              <div class="description">
                <p style="margin: 10px 0px 20px 0px; text-indent: 40px">{{ $data->description_4 }}</p>
              </div>

              <div class="description">
                <p style="margin: 10px 0px 20px 0px; text-indent: 40px">{{ $data->description_5 }}</p>
              </div>
        </div>
      </div>

      @include('layouts.footer')

@endsection