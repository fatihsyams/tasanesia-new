@extends('layouts.navbar')

@section('title', 'Campaign')

@extends('layouts.default')  

@section('content')

<div class="container">
        <div class="col-lg-6 me-auto ms-auto" style="margin-top: 95px">
          <h2 class="">{{ $data->title }}</h2>
          <div class="d-flex mb-3 p-2 align-items-center">
            <img
              src="/assets/img/profile-pic.jpg"
              alt=""
              style="
                /* border-radius: ; */
                display: block;
                max-width: 80px;
                height: auto;
              "
              class="img-penulis"
            />
            <p class="nama-penulis">{{ $data->author }}</p>
          </div>
          <div class="container">
            <img
              src="{{ asset($data->images) }}"
              class="img-header-campaign col-lg-12"
              alt=""
            />
            <p class="mt-5">
                {{ $data->description }}
            </p>
          </div>
        </div>
      </div>

      @include('layouts.footer')

@endsection