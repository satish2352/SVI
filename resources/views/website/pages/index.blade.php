@extends('website.layout.master')

@section('content')

  
      <!-- ------------------------------------------------------------------------------------>
      <!-- About Us Section starts Here -->
      <!-- ------------------------------------------------------------------------------------>
      <section class="HomeAboutSection pb-4">
        <div class="container">
          <h1 class="text-center HomeAbout heading">About Us</h1>
          <div class="row justify-content-center">
            <div class="col-lg-5 HomeAboutRow aboutVideoMain">
              <div class="">
                <div class="aboutVideo">
                  <video class="videoSize shadow-lg" autoplay loop muted playsinline class="videoBanner">
                    <source src="{{ asset('website/assets/images/home/aboutVideo.mp4') }}" type="video/mp4" />
                    Your browser does not support the video tag.
                  </video>
                </div>
              </div>
            </div>
            <div class="col-lg-7 d-flex align-items-center bg-white shadow-lg">
              <p class="pText ms-md-5 pt-md-4 py-md-1 pe-md-3">
                SVI Carbon Private Limited (SVICPL) is an ISO 9001:2015 certified
                company, engaged in designing (both process and mechanical) and
                manufacturing Impervious Graphite Heat and Mass Transfer
                Equipments. SVICPL product portfolio comprises Graphite Heat
                Exchangers (Condensers, Re-boilers, Coolers, Heaters,
                Evaporators), Graphite Columns, Graphite Scrubbers, Graphite
                Bursting/Rupture Discs, Graphite Thermowells and Customized
                Graphite Products and Spares as per the client’s requirement.
                These are manufactured using superior quality of Graphite, Resin
                and Steel, due to which, these products are acknowledged.
              </p>
            </div>
            <div class="HomeAboutButton1 text-md-end mt-md-3 ">
                <a href="{{ route('aboutus') }}" type="button" class="text-decoration-none HomeAboutButton text-white">View More </a>
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
  
      <section class="bg-white py-3">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center text-sm-center text-md-end">
              <div class="productImg">
                <img
                  src="{{ asset('website/assets/images/product/ghmte.png') }}"
                  class=""
                  alt="Graphite Heat & Mass Transfer Equipment"
                />
              </div>
            </div>
            <div class="col-lg-7 d-flex align-items-center">
              <div class="productCard">
                <h1
                  class="heading text-md-start text-sm-center productH1"
                >
                  Product
                </h1>
                <div class="card px-5 py-4 w-100 cardContent shadow-lg">
                  <h5 class="cardContent_text">
                    Graphite Heat & Mass Transfer Equipment
                  </h5>
                  <p>
                    Isothermal falling film absorbers designed and manufactured by
                    SVI Carbon make have very good mass transfer efficiency.
                    Hydrochloric acid obtained at the end of the falling film
                    absorbers have concentration about 33%. Falling film absorbers
                    can be designed to obtain higher product concentrations. SVI
                    carbon make falling film absorbers are designed for duty
                    conditions prevailing in plant.
                  </p>
                </div>
                <div class="HomeAboutButton1 text-md-end mt-md-3 ">
                  <a href="{{ asset('website/assets/images/home/about.html')}}" type="button" class="text-decoration-none HomeAboutButton text-white">View all </a>
              </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ------------------------------------------------------------------------------------>
      <!-- Graphite Heat & Mass Transfer Equipment Section Starts Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Square Banner Section Starts Here -->
      <!-- ------------------------------------------------------------------------------------>
      <section class="d-none d-sm-none d-md-block d-lg-block">
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
      <section class="my-md-5 my-3">
        <div class="container">
          <h2 class="heading svpilHeading">SVICPL’s Core Competencies</h2>
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-6 col-10 my-2">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-50 mx-auto"
                  src="{{ asset('website/assets/images/home/home1.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">Minimal Delivery Schedules</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-10 my-2">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-50 mx-auto"
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-10 my-2">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-50 mx-auto"
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
            <div class="col-lg-3 col-md-4 col-sm-6 col-10 my-2">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-50 mx-auto"
                  src="{{ asset('website/assets/images/home/home4.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">Highly Reliable Equipment</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-10 my-2">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-50 mx-auto"
                  src="{{ asset('website/assets/images/home/home5.png') }}"
                  alt="Card image cap"
                />
                <div class="card-body cardBodyCoreComp text-center">
                  <h6 class="card-title">Prompt After-sales Services</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-10 my-2">
              <div class="card shadow py-1 coreCompCards pt-4 border-0">
                <img
                  class="w-50 mx-auto"
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
      <section class="my-md-5 my-3">
        <div class="container">
          <img src="{{ asset('website/assets/images/home/HomeBanner3.png') }}" alt="" class="img-fluid d-none d-md-block d-lg-block" />
          <img src="{{ asset('website/assets/images/home/MOBILEHome BANNER3.png') }}" alt="" class="img-fluid d-block d-md-none d-lg-none" />
        </div>
      </section>
      <!-- ------------------------------------------------------------------------------------>
      <!-- Round Banner Section Ends Here -->
      <!-- ------------------------------------------------------------------------------------>

@endsection
