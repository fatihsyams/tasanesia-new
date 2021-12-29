@section('title', 'Contact')

@extends('layouts.default')

@extends('layouts.navbar')

@section('content')

<section class="ftco-section">
      <div class="container hero">
        <div class="row justify-content-center ">
          <div class="col-md-12 ">
            <div class="wrapper">
              <div class="row no-gutters ">
                <div
                  class="
                    col-lg-8 col-md-7
                    order-md-last
                    d-flex
                    align-items-stretch
                  "
                >
                  <div class="contact-wrap w-100 p-md-5 p-4">
                    <h4 class="mb-4">Get in touch</h3>
                    <!-- <div id="form-message-warning" class="mb-4"></div>
                    <div id="form-message-success" class="mb-4">
                      Your message was sent, thank you!
                    </div> -->
                    <form
                      method="POST"
                      id="contactForm"
                      name="contactForm"
                      class="contactForm"
                    >
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="label" for="name" style="font-size: 16px;">Full Name</label>
                            <input
                              type="text"
                              class="form-control"
                              name="name"
                              id="name"
                              placeholder="Name"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="label" for="email" style="font-size: 16px;"
                              >Email Address</label
                            >
                            <input
                              type="email"
                              class="form-control"
                              name="email"
                              id="email"
                              placeholder="Email"
                            />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="label" for="subject" style="font-size: 16px;">Subject</label>
                            <input
                              type="text"
                              class="form-control"
                              name="subject"
                              id="subject"
                              placeholder="Subject"
                            />
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="label" for="#" style="font-size: 16px;">Message</label>
                            <textarea
                              name="message"
                              class="form-control"
                              id="message"
                              cols="30"
                              rows="4"
                              placeholder="Message"
                            ></textarea>
                          </div>
                        </div>
                        <div class="col-md-12 mt-3">
                          <div class="form-group">
                            <input
                              type="submit"
                              value="Send Message"
                              class="btn"
                              style="background-color:#28a745; color: white;"
                            />
                            <div class="submitting"></div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-lg-4 col-md-5 d-flex align-items-stretch flex-column-reverse" style="color: white;">
                  <div class="info-wrap  w-100 p-md-5 p-4" style="border-radius: 20px; background-color:#28a745;">
                    <h2>Let's get in touch</h2>
                    <p class="mb-4" style="font-size: 20px;"style="font-size: 18px;">
                      We're open for any suggestion or just to have a chat
                    </p>
                    <div class="dbox w-100 d-flex align-items-start">
                      <div
                        class="
                          icon
                          d-flex
                          align-items-center
                          justify-content-center"
                      >
                        <span class="fa fa-map-marker me-2" style="font-size: 18px;"></span>
                      </div>
                      <div class="text pl-3" style="font-size: 18px;">
                        <p>
                          <span>Address:</span> Jl. Rambutan No. 1D
                        </p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div
                        class="
                          icon
                          d-flex
                          align-items-center
                          justify-content-center
                        "
                      >
                        <span class="fa fa-phone me-2" style="font-size: 18px;"></span>
                      </div>
                      <div class="text pl-3" style="font-size: 18px;">
                        <p>
                          <span>Phone: 081908078212</span>
                          <a href="tel://1234567920"></a>
                        </p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div
                        class="
                          icon
                          d-flex
                          align-items-center
                          justify-content-center
                        "
                      >
                        <span class="fa fa-paper-plane me-2" style="font-size: 18px;"></span>
                      </div>
                      <div class="text pl-3" style="font-size: 18px;">
                        <p>
                          <span>Email: info@tasanesia.com</span>
                          <a href="mailto:info@yoursite.com"></a>
                        </p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div
                        class="
                          icon
                          d-flex
                          align-items-center
                          justify-content-center
                        "
                      >
                        <span class="fa fa-globe me-2" style="font-size: 18px;"></span>
                      </div>
                      <div class="text pl-3" style="font-size: 18px;">
                        <p><span>Website</span> <a href="#" style=" color:white">tasanesia.com</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row row1 justify-content-center" style="margin-top:8rem">
          <div class="col-md-12 ">
            <h1 style="color:#28a745; font-weight: 700; text-align:center;">Contact Us by:</h1>
            <div class="wrapper">
              <div class="row no-gutters">
                <div class="col-lg-12 mt-3 mb-3" >
                  <div class="row">
                    <div class="col-lg-4 d-flex justify-content-center" style="margin: 10px 0px;">
                      <div class="card" style="width: 14rem; border:none; background-color:#28a745;">
                        <div class="card-body " style="text-align:center;">
                          <p style="color:white">Contact by email</p>
                          <header style="font-size:80px"><a href=""><i class="far fa-envelope" style="color:white;"></i></a></header>
                          <h1 class="card-title ms-auto" atyle="text-align:center;"><a href="" class="btn" style="background-color:white; color:#28a745; ">Send</a></h1>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center" style="margin: 10px 0px;">
                      <div class="card" style="width: 14rem; border:none; background-color:#28a745;">
                        <div class="card-body " style="text-align:center;">
                          <p style="color:white">Contact by whatsapp</p>
                          <header style="font-size:80px"><a href=""><i class="fab fa-whatsapp" style="color:white; "></i></a></header>
                          <h1 class="card-title ms-auto" atyle="text-align:center;"><a href="" class="btn" style="background-color:white; color:#28a745; ">Send</a></h1>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center" style="margin: 10px 0px;">
                      <div class="card" style="width: 14rem; border:none; background-color:#28a745;">
                        <div class="card-body " style="text-align:center;">
                          <p style="color:white">Contact by telegram</p>
                          <header style="font-size:80px"><a href=""><i class="fab fa-telegram-plane" style="color:white; "></i></i></a></header>
                          <h1 class="card-title ms-auto" atyle="text-align:center;"><a href="" class="btn" style="background-color:white; color:#28a745; ">Send</a></h1>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('layouts.footer')

    @endsection