@section('title', 'Contact')

@extends('layouts.navbar')

@extends('layouts.default')

@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 " style="text-align: center; margin-top: 40px">
                <h1 style="color:#28a745  ; font-size: 30px; font-weight: 500;">About Us</h1>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <img src="/assets/img/daun.png" class="shadow about-us1" style="width: 420px; border-radius: 20px" alt="">
            </div>
            <div class="col-lg-8 col-md-6 col-sm-6  " style="text-align: justify;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ratione eligendi dolores, nemo facilis fugit recusandae sed esse non amet quidem illo nesciunt molestiae. Minima, rerum voluptas, enim voluptatibus adipisci at tenetur voluptates quis ipsam dicta eum odio placeat necessitatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, velit, cupiditate nobis voluptatibus ducimus vero quos perspiciatis doloribus totam mollitia, recusandae tempore rem corrupti ab. Quisquam pariatur iusto enim itaque.
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-5" style="background-color:#28a745; padding: 45px; color: white;">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6" style="text-align: center;">
                <h1 style=" font-size: 30px; font-weight: 500;">Our Vision</h1>
                1. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste saepe nesciunt eveniet iusto ab excepturi cum nemo <br> 2. iure est fugit veniam omnis, ipsum odio culpa quasi nulla, at esse quibusdam? Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> 3. Ex fuga consequatur aperiam facere placeat reprehenderit, eum nesciunt veniam molestiae veritatis eaque odio perspiciatis! 
            </div>
            
        </div>
    </div>
</section>
<section>
    <div class="container mt-5" >
        <div class="row d-flex flex-column-reverse ">
            <div class="col-lg-8 col-sm-6 " style="text-align: justify;">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste saepe nesciunt eveniet iusto ab excepturi cum nemo iure est fugit veniam omnis, ipsum odio culpa quasi nulla, at esse quibusdam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex fuga consequatur aperiam facere placeat reprehenderit, eum nesciunt veniam molestiae veritatis eaque odio perspiciatis! Laborum non fugit omnis aspernatur aperiam quia.
            </div>
            <div class="col-lg-4 col-sm-6 ">
                <h1 class="about-us2" style="font-size: 50px; font-weight: 500; margin-top: 20px; color:#28a745 ">Our Purpose</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mt-5" >
        <div class="row">
        <h1 style="font-size: 30px; font-weight: 500; margin-top: 20px; color:#28a745; border-bottom-style: solid; border-bottom-color: #28a745" >Our Partner</h1>
        <div class="row d-flex justify-content-center our-partners">
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
        </div>
    </div>
</section>
        
    <!-- Navbar -->
 @include('layouts.footer')
<!-- End Navbar -->
@endsection





 
