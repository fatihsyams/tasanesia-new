@extends('layouts.navbar')

@section('title', 'Home')

@extends('layouts.default')  

@section('content')



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Home - Tasanesia</title>
  </head>
  <body>

    <!-- hero -->
    <section class="id">
      <div class="container-fluid">
        <div class="row flex-column-reverse flex-lg-row">
          <div class="col-lg-12 p-0">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" style="height: 100%">
                <img src="assets/img/bg-ornamental-plants.jpeg" class="d-block" style="width:100%; max-width: 100%; max-height: 100vh; object-fit: fill" alt="...">
                <div class="carousel-caption d-md-block pt-0" style="text-align: left; margin-left : -100px; top: 35%">
                  <span style="font-size: 5vw">Exotic Tropical <br>Ornamental plants</br></span>
                  <p style="font-size: 1.4vw">bla1 bla1 bla1 bla1 bla1 bla1 bla1 bla1 bla1 bla1 </span>
                  <a href="/menu-products/category/1" class="px-4 py-3 btn account-auth-login-white" style="border: 2px solid white; display: table; cursor: pointer; color: white; text-decoration: none">Start shopping now</a>
                </div>
              </div>
              <div class="carousel-item" style="height: 100%">
                <img src="assets/img/bg-halal-food.jpeg" class="d-block" style="width:100%; max-width: 100%; max-height: 100vh; object-fit: fill" alt="...">
                <div class="carousel-caption d-md-block pt-0" style="text-align: left; margin-left : -100px; top: 50%">
                  <span style="font-size: 5vw">Rare Item from Aroid Family</span>
                  <p style="font-size: 1.4vw">bla2 bla2 bla2 bla2 bla2 bla2 bla2 bla2 bla2 bla2 </p>
                  <a href="/menu-products/category/1" class="px-4 py-3 btn account-auth-login-white" style="border: 2px solid white; display: table; cursor: pointer; color: white; text-decoration: none">Start shopping now</a>
                </div>
              </div>
              <div class="carousel-item" style="height: 100%">
                <img src="assets/img/bg-fresh-fruit.jpeg" class="d-block " style="width:100%; max-width: 100%; max-height: 100vh; object-fit: fill" alt="...">
                <div class="carousel-caption d-md-block pt-0" style="text-align: left; responsive-font-size: 10px; margin-left : -100px; top: 50%">
                  <span style="font-size: 5vw">Exotic Caladium ready stock</span>
                  <p style="font-size: 1vw">bla3 bla3 bla3 bla3 bla3 bla3 bla3 bla3 bla3 bla3 </p>
                  <a href="/menu-products/category/1" class="px-4 py-3 btn account-auth-login-white" style="border: 2px solid white; display: table; cursor: pointer; color: white; text-decoration: none">Start shopping now</a>
                </div>
              </div>
            </div>
            
          </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- end hero -->
    <!-- start section 2 -->
    <section>
      <div
        class="container mt-4 mb-0 pb-5 " id="our-campaign"
        style="margin-bottom: 100px"
      >
        <div class="container mt-3">
          <div class="row no-gutters">
            <h2
              class="text-center mt-3 mb-4"
              style="font-weight: 500; color: black; text-align: center "
            >
              Our Product Category
            </h2>
            <div
              class="col-lg-12 horizontal-scrollable"
              style="max-height: 1000px"
            >
              <div class="row justify-content-center">
              @foreach($category as $item)
                <div class="col-lg-4 col-md-6 p-3">
                  <div class="shadow pb-3" style="width: 17rem; max-height: 400px; min-height: 339px; width: 320px; background-color: #315343;">
                  <a href="/detail-category/{{ $item->id }}" style="text-decoration: none; color: white; font-weight: 300">
                  <img
                    src="{{$item['images']}}"
                    alt=""
                    style="max-width: 100%"
                  />
                  <h4 class="text-wrap mt-4 mb-3" style="text-align: left; padding: 0 20px">
                   {{$item->name}}
                  </h4>
                  <p class="hide-scrollbar text-wrap p-text px-3 pl-4" style="padding: 0 20px; margin-bottom: 10px; letter-spacing: 0.3px text-decoration: none;font-size: 1.1rem; color: white; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;">
                    {{ $item->description}}
                  </p>
                  <span class="px-3 pl-4 " style="padding: 0 20px">Read more <i class="fas fa-angle-right"></i> </span>
                  </a>
                </div>
              </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section 2 -->

    <!-- section 3 -->
    <section>
      <div class="container pb-5"  style="margin-bottom: 100px; ">
        <div class="container mt-3 pb-4 ">
          <div class="row no-gutters">
          <h2
              class="text-center mt-3 mb-4"
              style="font-weight: 500; color: black;font-family: poppins; font-size: 2rem "
            >
              Our Products
          </h2>
            <!-- <div class="row justify-content-center" style="position: relative; margin-top:60px"> -->
            @foreach($data as $product)
            @if($loop->index < 9)
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
              <a href="detail-product/{{$product->id}}" style="text-decoration: none;">
                <div class="semua">
                  <img class="image" src="{{$product->images}}">
                  <div class="info">
                    <div class="over">
                      <div class="row">
                      <div class="col-md-12 col-sm-12">
                      <p style="font-size: 2rem">{{$product->name}}</p>
                      </div>
                      <div class="col-md-12 col-sm-12">
                      <p>Rp{{ number_format(($product->price), 0, '.', '.') }}</p>
                      </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- </div> -->
            @endif
            @endforeach 
            <div class="row d-flex justify-content-center mx-auto" style="margin-top:60px">
              <a class="btn account-auth-login" href="/menu-products/category/1" type="button" style="color:#315343; font-size: 15px; border: 2px solid #315343; width: 200px">See Other Products</a>
              </div>  
            </div> 
          </div>
        </div>
      </div>
    </section>
    <!-- end section 3 -->
    <!-- section 4 -->
    <section>
      <div class="container-fluid p-2 pb-5" style="margin-top:100px" >
      <div class="container mt-3 ">
        <div class="row no-gutters">
        <h2
              class="text-center mt-3 mb-4"
              style="font-weight: 500; color: black;font-family: poppins; font-size: 2rem "
            >
              Our Partners
            </h2>
          <div class="row d-flex justify-content-center our-partners" style="margin-top:60px">
          <div class="col-lg-2 col-sm-3 lazismu">
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/um-lampung.jpeg"
                alt=""
                style=" filter: grayscale(100%);"
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/lazis-mu.png"
                alt=""
                style=" filter: grayscale(100%);"
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/bale-jentera.png"
                alt=""
                style=" filter: grayscale(100%);"
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/bio-hutanea.png"
                alt=""
                style=" filter: grayscale(100%);"
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >

          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/um-sidoarjo.jpeg"
                alt=""
                style=" filter: grayscale(100%);"
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/permata-desa-indonesia.jpeg"
                alt=""
                style=" filter: grayscale(100%);"
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/bprs-botani.png"
                alt=""
                style=" filter: grayscale(100%);"
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/umsida.png"
                alt=""
                style=" filter: grayscale(100%);"
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/skillage.png"
                alt=""
                style=" filter: grayscale(100%);"
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/um-kotabumi.png"
                alt=""
                style=" filter: grayscale(100%);"
              />
          </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- section 5 -->
    <section>
      <div class="container pb-5" style="margin-top:100px;">
      <div class="container  " >
        <div class="row no-gutters">
        <h2
              class="text-center mt-3"
              style="font-weight: 500; color: black;font-family: poppins; font-size: 2rem; margin-bottom: 69px "
            >
              Our Campaign
            </h2>
            @foreach($campaign as $data)
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="card" style="border: none">
              <img src="{{$data->images}}" class="card-img-top img-fluid" alt="..." style="max-height: 267px; min-height: 267px">
              <div class="card-body">
                <p class="card-caption">By {{$data->author}} |  {{date('d-m-Y', strtotime($data->created_at))}}</p>
               <p class="card-text" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; line-clamp: 4; -webkit-box-orient: vertical;" >{{$data->description}}</p>
               <a href="detail-campaign/{{$data->id}}" style="text-decoration: none; color: black">
                <p class="pt-4">Read more <i class="fas fa-angle-right"></i> </p>
                </a>
              </div>
            </div>
          </div>
          @endforeach
          <!-- <div class="col-lg-10">
            <div class="row">
            @foreach($campaign as $dataCampaign)
              @if($loop->index < 4)
                <div class="col-lg-6 col-md-6 p-3 col-sm-6 text-center m-0">
                  <img
                    class="img-fluid img-border"
                    src="{{$dataCampaign->images}}"
                    alt=""
                    style="width: 100%; max-height: 200px"
                  />
                  <h4 class="text-wrap mt-2 mb-3" style="text-align: center; color: white">
                      {{$dataCampaign->title}}
                  </h4>
                  <p class="p-text" style="text-align: start; color: white">
                      {{$dataCampaign->description}} <a href="detail-campaign/{{$dataCampaign->id}}" style="color: white">Read more</a>
                  </p>
                </div>
                  @endif
                @endforeach
              </div>
          </div> -->
        </div>
      </div>
      </div>
    </section>
   
    <!-- Navbar -->
    @include('layouts.footer')
    <!-- End Navbar -->
  </body>
</html>


@endsection