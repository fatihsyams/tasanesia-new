@extends('layouts.navbar')

@section('title', 'Campaign')

@extends('layouts.default')  

@section('content')

<div class="container-fluid">
        <div class="container hero">
          <div class="row no-gutters">
            <div class="col-lg-12">
              <!-- <h2
                class="text-center mt-3 mb-4"
                style="font-weight: 700; color: #28a745; font-family: 'EB Garamond', serif;"
              >
                Our Campaign
              </h2> -->

              <div class="row no-gutters" style="margin-bottom: 30px">
                @foreach($data as $dataCampaign)
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="card" style="width: 25rem;border: none">
                    <img src="{{$dataCampaign->images}}" class="card-img-top img-fluid" alt="..." style="max-height: 267px; min-height: 267px">
                    <div class="card-body">
                      <p class="card-caption">By {{$dataCampaign->author}} |  {{date('d-m-Y', strtotime($dataCampaign->created_at))}}</p>
                    <p class="card-text" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; line-clamp: 4; -webkit-box-orient: vertical;" >{{$dataCampaign->description}}</p>
                    <a href="detail-campaign/{{$dataCampaign->id}}" style="text-decoration: none; color: black">
                      <p class="pt-4">Read more <i class="fas fa-angle-right"></i> </p>
                    </a>
                    </div>
                  </div>
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