@extends('layouts.navbar')

@section('title', 'Campaign')

@extends('layouts.default')  

@section('content')

<div class="container-fluid">
        <div class="container hero">
          <div class="row no-gutters">
            <div
              class="col-lg-2 mt-sm-4 mt-lg-0 fixed-top"
              id="our-campaign"
              style="top: 80px; left: 50px; z-index: -1"
            >
              <img
                class="img-fluid adv-border"
                src="/assets/img/nanas-adv.jpg"
                alt=""
              />
              <img
                class="img-fluid adv-border"
                src="/assets/img/plants.jpg"
                alt=""
              />
            </div>
            <div class="col-lg-10 offset-2">
              <h2
                class="text-center mt-3 mb-4"
                style="font-weight: 700; color: #28a745; font-family: 'EB Garamond', serif;"
              >
                Our Campaign
              </h2>

              <div class="row">
                @foreach($data as $dataCampaign)
                <div class="col-lg-6 col-md-6 p-3 col-sm-6 text-center m-0">
                  <img
                    class="img-fluid img-border"
                    src="{{$dataCampaign->images}}"
                    alt=""
                    style="width: 100%; max-height: 200px"
                  />
                  <h4 class="text-wrap mt-2 mb-3" style="text-align: center">
                      {{$dataCampaign->title}}
                  </h4>
                  <p class="p-text" style="text-align: start">
                      {{$dataCampaign->description}} <a href="detail-campaign/{{$dataCampaign->id}}" style="color: #28a745">Read more</a>
                  </p>
                </div>
                @endforeach
              </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('layouts.footer')

@endsection