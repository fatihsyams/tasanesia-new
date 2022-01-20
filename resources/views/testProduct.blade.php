@extends('layouts.navbar')

@section('title', 'Detail Category')

@extends('layouts.default')

@extends('layouts.order')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Page</title>

</head>
<body>
    <div class="container hero">
        <div class="row">
          <div class="col-lg-6" style="padding:30px; height: 100%" >
            <img src="/{{ $product->images }}" alt="" srcset="" style="width: 100%;">
            <!-- <div class="row">
              <div class="column">
                <img src="img_nature.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
              </div>
              <div class="column">
                <img src="img_snow.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
              </div>
              <div class="column">
                <img src="img_mountains.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
              </div>
              <div class="column">
                <img src="img_lights.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
              </div>
            </div> -->
            <!-- <img
              src="" alt="" style="width: 100%; border-radius: 10px"
            /> -->
          </div>
          <div class="col-lg-6 mt-5" >
            <h1 style="font-size: 40px">{{  $product->name }}</h1>
            <p style="color: #444444; font-size: 20px">Rp{{ number_format(($product->price), 0, '.', '.') }}</p>
            <p class="mt-3" style="color: #444444; font-weight: 100; font-size: 19px; text-align: justify">{{ $product->description }}</p>

            <div class="row my-5 justify-content-center">
              <!-- <p>Quantity:</p>
              <div class="quantity buttons_added">
	              <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
             </div>
             <a href="" class="btn">Order Now</a> -->
            @if (Auth::check())
            <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn order_btn" style="background-color: #315343; color:white" >Order Now</a>
            @endif

            @if (!Auth::check())
            <a href="/login" class="btn " style="background-color: #315343; color:white" >Order Now</a>
            @endif
            </div>

            <hr>
            
            <p class="my-2 mt-5" style="color: #444444; font-weight: 100"> <a style="text-decoration: none; color: #444444" href="/menu-products/category/{{ $subCategory->id }}">Product Type : <span style="color: black">{{ $category->name }} | {{ $subCategory->name }}</span></a></p>
            <p class="my-2" style="color: #444444; font-weight: 100">Rarity : <span style="color: black">{{ $product->status }}</span></p>
            <!-- <h2 style="color: #28a745">{{  $product->name }}</h2> -->
          </div>
        </div>
      <div class="container">
        <div class="row no-gutters">
        <h3 class="mb-4" style="font-weight: 500; margin-top: 100px; text-align: center">Other products Recommendations</h3>
          <div class="col-lg-12 horizontal-scrollable" style="max-height: 1000px">
          
            <div class="row mb-5" style="position: relative; ">
            
            @foreach ($allProduct as $product)
            @if($loop->index < 3)
              <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="/detail-product/{{$product->id}}" style="text-decoration: none;">
                  <div class="semua">
                      <img class="image" src="/{{ $product->images }}">
                      <div class="info">
                          <div class="over">
                            <div class="row">
                              <div class="col-md-12 col-sm-12">
                                <p style="font-size: 1.5rem">{{$product->name}}</p>
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
            @endif
            @endforeach
          </div>
        </div>
      </div>
        
      </div>
      
      </div>

      <!-- modal lightbox -->
      <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">

      <div class="mySlides">
        <div class="numbertext">1 / 4</div>
        <img src="img_nature_wide.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 4</div>
        <img src="img_snow_wide.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 4</div>
        <img src="img_mountains_wide.jpg" style="width:100%">
      </div>
      
      <div class="mySlides">
        <div class="numbertext">4 / 4</div>
        <img src="img_lights_wide.jpg" style="width:100%">
      </div>
      
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div class="caption-container">
        <p id="caption"></p>
      </div>


      <div class="column">
        <img class="demo cursor" src="img_nature_wide.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
      </div>
      <div class="column">
        <img class="demo cursor" src="img_snow_wide.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
      </div>
      <div class="column">
        <img class="demo cursor" src="img_mountains_wide.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
      </div>
      <div class="column">
        <img class="demo cursor" src="img_lights_wide.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
      </div>
  </div>
</div>
      
<!-- Navbar -->
@include('layouts.footer')
<!-- End Navbar -->

<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</html>

@endsection