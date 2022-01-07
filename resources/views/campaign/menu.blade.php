@extends('layouts.navbar')

@section('title', 'Campaign')

@extends('layouts.default')  

@section('content')

<div class="container-fluid">
        <div class="container hero">
          <div class="row no-gutters">
            <div class="col-lg-8 col-md-8 col-sm-12">
              
            </div>
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
              <!-- <h2
                class="text-center mt-3 mb-4"
                style="font-weight: 700; color: #28a745; font-family: 'EB Garamond', serif;"
              >
                Our Campaign
              </h2> -->

              <div class="row" style="padding: 30px ">
              <div class="header">
                <h1 style="margin: 30px 0px; font-family: arial; color:#315343 ">
                What you need to know about growing hydrangeas
                </h1>
                <p style="margin: 0px 0px 80px 0px ">January 11, 2018 | by BoldThemes</p>
              </div>
              <div class="row" style="margin: 50px 0px 100px 0px ">
                <img src="/assets/img/daun.png" alt="" srcset="">
              </div>
              <div class="description" style="margin-bottom: 200px ">
                <p style="margin: 10px 0px 20px 0px ">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line. Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                <p style="margin: 10px 0px 20px 0px ">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line. Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                <p style="margin: 10px 0px 10px 0px ">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line. Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
              </div>
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