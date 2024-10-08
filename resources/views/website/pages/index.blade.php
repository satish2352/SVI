@extends('website.layout.master')

@section('content')

  
      <!-- ------------------------------------------------------------------------------------>
      <!-- About Us Section starts Here -->
      <!-- ------------------------------------------------------------------------------------>
      <section class="HomeAboutSection pt-2 py-md-5">
        <div class="container py-md-4 pb-3 pb-md-0">
          <h2 class="text-center HomeAbout heading">About us</h2>
          <div class="row justify-content-center">
            @if (empty($data_output_aboutus))
            <div class="container">
                <div class="row">
                    <h3 class="d-flex justify-content-center" style="color: #fff">No Data Found Courses Offered</h3>
                </div>
            </div>
        @else
            @foreach ($data_output_aboutus as $aboutus)
            <div class="col-lg-5 mb-5 mb-md-0 HomeAboutRow aboutVideoMain">
              <div class="">
                <div class="aboutVideo">
                  <video class="videoSize shadow-lg" autoplay loop muted playsinline controls class="videoBanner">
                    <source src="{{ Config::get('DocumentConstant.ABOUTUS_VIEW') }}{{ $aboutus['video_link'] }}" type="video/mp4">
                </video>
                  {{-- <video class="videoSize" autoplay loop muted playsinline class="videoBanner">
                    <source src="{{ asset('website/assets/images/home/aboutVideo.mp4') }}" type="video/mp4" />
                    Your browser does not support the video tag.
                  </video> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-7 d-flex align-items-center bg-white shadow-lg">
              <p class="pText pTexthome pt-4 px-3 ms-md-5 pt-md-4 py-md-1 pe-md-3" data-aos="zoom-in" data-aos-duration="2000">
                {{ strip_tags($aboutus['description']) }}
              </p>
            </div>
            @endforeach
            @endif
            <div class="HomeAboutButton1 text-md-end text-center mt-3" >
                <a href="{{ route('aboutus') }}" type="button" class="text-decoration-none HomeAboutButton text-white" data-aos="fade-left" data-aos-anchor="#example-anchor"
                data-aos-offset="500" data-aos-duration="3000">View More </a>
            </div>
          </div>
        </div>
      </section>
      <!-- ------------------------------------------------------------------------------------>
      <!-- About Us Section Ends Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Graphite Heat & Mass Transfer Equipment Section Starts Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <section class="bg-white py-4 py-md-0">
        <div class="container">
          <div class="row justify-content-center">
            @if (empty($data_output_product))
            <div class="container">
                <div class="row">
                    <h3 class="d-flex justify-content-center" style="color: #fff">No Data Found Courses Offered</h3>
                </div>
            </div>
        @else
            @foreach ($data_output_product as $product)
            <div class="col-lg-5 text-center text-sm-center text-md-end">
              <div class="productImg my-2" data-aos="zoom-in" data-aos-easing="linear"
              data-aos-duration="1500">
                <img
                  src="{{ Config::get('DocumentConstant.PRODUCT_VIEW') }}{{ $product['image'] }}"
                  class=""
                  alt="Graphite Heat & Mass Transfer Equipment"
                />
              </div>
            </div>
            <div class="col-lg-7 col-xl-6 d-flex align-items-center">
              <div class="productCard">
                <h2
                  class="heading text-md-start text-sm-center productH1"
                >
                  Product
                </h2>
                <div class="card px-lg-5 px-3 py-4 w-100 cardContent ">
                  <h5 class="cardContent_text" data-aos="zoom-in" data-aos-easing="linear"
                  data-aos-duration="1500">
                    {{ strip_tags($product['title']) }} 
                  </h5>
                  <p data-aos="zoom-in" data-aos-easing="linear"
                  data-aos-duration="1500">
                    {{ strip_tags($product['description']) }}
                  </p>
                </div>
                <div class="HomeAboutButton1 text-md-end text-center my-3 mt-md-3 me-xl-4 " data-aos="fade-up" data-aos-anchor="#example-anchor"
                  data-aos-offset="500" data-aos-duration="2000">
                  <a href="{{ route('product') }}" type="button" class="text-decoration-none HomeAboutButton text-white" >View all </a>
              </div>
              </div>
            </div>
            @endforeach
            @endif
          </div>
        </div>
      </section>
      <!-- ------------------------------------------------------------------------------------>
      <!-- Graphite Heat & Mass Transfer Equipment Section Starts Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Square Banner Section Starts Here -->
      <!-- ------------------------------------------------------------------------------------>
      <section class="">
        <div class="container-fluid p-0">
          <img src="{{ asset('website/assets/images/aboutus/HomePageBanner.png') }}" alt="" class="img-fluid" />
        </div>
      </section>
      <!-- ------------------------------------------------------------------------------------>
      <!-- Square Banner Section Ends Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Home Cards Section Starts Here -->
      <!-- ------------------------------------------------------------------------------------>
      <section class="py-md-5 pt-5 pb-3 svicplSection">
        <div class="container">
          <h2 class="heading svpilHeading">SVICPL’s Core Competencies</h2>
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6 col-10 my-2 px-3 pt-2" data-aos="zoom-in-up"  data-aos-easing="linear"
            data-aos-duration="1500">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-75 mx-auto"
                  src="{{ asset('website/assets/images/home/home1.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">Minimal Delivery Schedules</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-10 my-2 px-3 pt-2" data-aos="zoom-in-up"  data-aos-easing="linear"
            data-aos-duration="1500">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-75 mx-auto"
                  src="{{ asset('website/assets/images/home/home2.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">
                    Manufacturing Excellence In High Volumes
                  </h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-10 my-2 px-3 pt-2" data-aos="zoom-in-up"  data-aos-easing="linear"
            data-aos-duration="1500">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-75 mx-auto"
                  src="{{ asset('website/assets/images/home/home3.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">Competitive Prices</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6 col-10 my-2 px-3 pt-2" data-aos="zoom-in-up"  data-aos-easing="linear"
            data-aos-duration="1500">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-75 mx-auto"
                  src="{{ asset('website/assets/images/home/home4.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">Highly Reliable Equipment</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-10 my-2 px-3 pt-2" data-aos="zoom-in-up"  data-aos-easing="linear"
            data-aos-duration="1500">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-75 mx-auto"
                  src="{{ asset('website/assets/images/home/home5.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">Prompt After-sales Services</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-10 my-2 px-3 pt-2" data-aos="zoom-in-up"  data-aos-easing="linear"
            data-aos-duration="1500">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-75 mx-auto"
                  src="{{ asset('website/assets/images/home/home6.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">Process Design & Development</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ------------------------------------------------------------------------------------>
      <!-- Home Cards Section Ends Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Round Banner Section Starts Here -->
      <!-- ------------------------------------------------------------------------------------>
      <section class="pb-md-5 py-2 pb-4 pb-md-0 svicplSection">
        <div class="container">
          <img src="{{ asset('website/assets/images/home/HomeBanner3.png') }}" alt="" class="img-fluid d-none d-md-block d-lg-block" />
          <img src="{{ asset('website/assets/images/home/MOBILEHome BANNER3.png') }}" alt="" class="img-fluid d-block d-md-none d-lg-none" />
        </div>
      </section>
      <!-- ------------------------------------------------------------------------------------>
      <!-- Round Banner Section Ends Here -->
      <!-- ------------------------------------------------------------------------------------>

@endsection
