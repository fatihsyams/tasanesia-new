@extends('layouts.navbar')

@section('title', 'Home')

@extends('layouts.default')  

@section('content')

<!-- <div class="card">
    <div class="card-body">
        @foreach ($category as $item)
        <img src="{{ $item->images }}" alt="">
        <a href="{{ route('home.show', $item->id) }}">{{ $item->name }}</a>
        <p>{{ $item->description }}</p>
        @endforeach
    </div>
</div> -->

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
      <div class="container hero">
        <div class="row no-gutters flex-column-reverse flex-lg-row">
          <div
            class="col-lg-2 mt-sm-4 mt-lg-0"
            style="
              border: 1px solid #bdc3c7;
              background-color:#28a745;
              border-radius: 5px;
              padding: 20px;
              max-height: 473px;
              -ms-overflow-style: none;
            "
            id="our-campaign"
          >
            <h3 class="our-campaign" style= "">OUR CAMPAIGN</h3>
            <hr />

            <a href="/campaign2" 
              class="title-text" >Oriental Plant by Comunity <p class="p-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting read more
              </p></a
              >
      
            <!-- <hr class="ms-auto me-auto" style="max-width: 50%" /> -->

            <a href="/campaign2" 
              class="title-text" >Oriental Plant by Comunity <p class="p-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting read more
              </p></a
             >
            <a href="/campaign2" 
              class="title-text" >Oriental Plant by Comunity <p class="p-text">
              Lorem Ipsum is simply dummy text of the printing and typesetting read more
              </p></a
            >

            
          </div>
          <div class="col-lg-10">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" style="max-height: 473px">
                <img src="assets/img/daun.png" class="d-block " style="width:100%" alt="...">
                <div class="carousel-caption  d-md-block" style="text-align: left; margin-left : -100px">
                  <h5>Ornamental Plants</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item" style="max-height: 473px">
                <img src="assets/img/halal-food.jpeg" class="d-block" style="width:100%" alt="...">
                <div class="carousel-caption d-md-block" style="text-align: left; margin-left : -100px">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptates nisi quae, ipsam delectus earum quas placeat laboriosam quasi voluptas dignissimos distinctio saepe perferendis!</p>
                </div>
              </div>
              <div class="carousel-item" style="max-height: 473px">
                <img src="assets/img/daun.png" class="d-block " style="width:100%" alt="...">
                <div class="carousel-caption d-md-block" style="text-align: left; responsive-font-size: 10px; margin-left : -100px">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
            <!-- <div
              id="carouselExampleIndicators"
              class="carousel slide carousel-custom"
              data-bs-ride="carousel"
             >
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
              </div>
              <div id="home-carrousel-responsive" class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="/assets/img/daun.png"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class="carousel-content">
                    <h1 style="color:white;">Ornamental Plants</h1>
                    <h6 style="color: white; text-align: start; margin-left: 7px">Deskripsi ornamental plants</h3>
                  </div>
                </div>
                <div class="carousel-item">
                  <img
                    src="assets/img/halal-food.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class="carousel-content">
                    <h1 style="color:white">Halal Foods</h1>
                    <h6 style="color: white; text-align: start; margin-left: 7px">Deskripsi halal foods</h6>
                  </div>
                </div>
                <div class="carousel-item">
                  <img
                    src="assets/img/nanas-carrousel.jpg"
                    class="d-block w-100"
                    alt="..."
                    style="filter:brightness(140%)"
                  />
                  <div class="carousel-content">
                    <h1 style="color:white">Fresh Fruits</p>
                    <h6 style="color: white; text-align: start; margin-left: 7px">Deskripsi fresh fruits</p>
                  </div>
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    <!-- end hero -->
    <!-- start section 2 -->
    <section>
      <div
        class="container p-2 mt-4 mb-0 pb-5 " id="our-campaign"
        style="background-color: #28a745; margin-bottom: 100px"
      >
        <div class="container mt-3">
          <div class="row no-gutters">
            <h2
              class="text-center mt-3 mb-4"
              style="font-weight: 500; color: white; "
            >
              Our Product Category
            </h2>
            <div
              class="col-lg-12 horizontal-scrollable"
              style="max-height: 1000px"
            >
              <div class="row mx-2">
              @foreach($category as $item)
                <div class="col-lg-3 col-md-6 p-3">
                  <div class="shadow card py-3 px-3" style="width: 17rem; max-height: 394px; min-height: 394px">
                  <a href="/detail-category/{{ $item->id }}" style="text-decoration: none; color: black; font-family: 'Signika Negative', sans-serif;">
                  <img
                    class="img-fluid img-border"
                    src="{{$item['images']}}"
                    alt=""
                    style="max-width: 100%"
                  />
                  <h4 class="text-wrap mt-2 mb-3" style="text-align: center">
                   {{$item->name}}
                  </h4>
                  <p class="hide-scrollbar text-wrap p-text">
                    {{ $item->description}} <a href="">Read more</a>
                  </p>
                </div>
              </div>
              @endforeach
            </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section 2 -->
    <!-- section 3 -->
    <section>
      <div class="container p-2 my-0 pb-5 our-product"  style="margin-bottom: 100px; ">
        <div class="container mt-3 px-5 pb-4 ">
          <div class="row no-gutters">
          <h2
              class="text-center mt-3 mb-4"
              style="font-weight: 700; color: #28a745; "
            >
              Our Product
            </h2>
            @foreach($data as $product)
            @if($loop->index < 12)
            <div class="col-lg-4 col-xl-3 col-md-6 col-12 col mt-md-3 mt-sm-3 mt-3">
              <a href="detail-product/{{$product->id}}" style="text-decoration: none">
                  <div class="shadow card" style="width: 18rem; border: 2px solid #28a745; min-height: 280px">
                    <img
                    src="{{$product->images}}"
                    class=" img-fluid card-img-top p-3"
                    alt="..."
                    style="width: 100%; max-height: 188px; min-height: 188px; border-radius: 1.25rem"
                    />
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                            <h5 style="color: #28a745">{{$product->name}}</h5>
                          </div>
                          <div class="col-12 text-center">
                            <p style="color: #28a745">Rp. {{$product->price}}</p>
                          </div>
                          <div class="col-12 text-center">
                            <p style="color: #28a745">{{$product->status}}</p>
                          </div>
                        </div>
                    </div>
                  </div>
              </a>
        </div>    
            @endif
         @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- end section 3 -->
    <!-- section 4 -->
    <section>
      <div class="container-fluid  my-4 pb-5" >
      <div class="container mt-3 p-2" style="background-color: #28a745; ">
        <div class="row no-gutters">
        <h2
              class="text-center mt-3 mb-4"
              style="font-weight: 700; color: white;"
            >
              Community Development Program
            </h2>
          <div class="col-lg-2" id="our-campaign">
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
          <div class="col-lg-10">
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
          </div>
        </div>
      </div>
      </div>
    </section>
    <section>
      <div class="container-fluid p-2 my-4 pb-5">
      <div class="container mt-3 ">
        <div class="row no-gutters">
        <h2
              class="text-center mt-3 mb-4"
              style="font-weight: 700; color: #28a745;"
            >
              Our Partners
        </h2>
        <!-- <div
              class="shadow col-lg-2 mt-sm-4 mt-lg-0 text-center"
              style="
                border: 1px solid #bdc3c7;
                border-radius: 10px;
                padding: 10px;
                max-height: 473px;
                overflow: scroll;
                -ms-overflow-style: none;
                overflow-x: hidden;
                background-color: white;
              "
              id="our-campaign" >
            
              <h3 class="our-campaign" style="color: #28a745 !important">OUR PARTNERS</h3>
              <hr />

            </div>  -->
          <div class="row d-flex justify-content-center our-partners">
          <div class="col-lg-2 col-sm-3 lazismu">
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/um-lampung.jpeg"
                alt=""
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/lazis-mu.png"
                alt=""
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/bale-jentera.png"
                alt=""
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/bio-hutanea.png"
                alt=""
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >

          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/um-sidoarjo.jpeg"
                alt=""
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/permata-desa-indonesia.jpeg"
                alt=""
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/bprs-botani.png"
                alt=""
              />
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/umsida.png"
                alt=""
              />
         
         
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/skillage.png"
                alt=""
              />
         
          
          </div>
          <div class="col-lg-2 col-sm-3 lazismu" >
          <img
                class="mb-2 mt-2 img-fluid img-our-partner"
                src="/assets/logos/um-kotabumi.png"
                alt=""
              />
            
             
          </div>
          </div>
         
          <div class="row d-flex justify-content-center our-partners">
          
          </div>
          
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