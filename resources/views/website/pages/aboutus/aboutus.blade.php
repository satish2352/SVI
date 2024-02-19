@extends('website.layout.master')

@section('content')
    <!-- ------------------------------------------------------------------------------------>
    <!-- About Us Section starts Here -->
    <!-- ------------------------------------------------------------------------------------>
    <section class="HomeAboutSection pt-5 pb-4">
        <div class="container">
         <div class="row">
          <div class="col-md-6 offset-md-5 d-flex"> <h2 class="text-center HomeAbout HomeAbout1 heading">About Us</h2></div>
         </div>
          <div class="row justify-content-center">
            @if (empty($data_output_aboutus))
            <div class="container">
                <div class="row">
                    <h3 class="d-flex justify-content-center" style="color: #00000">No Data Found For Media</h3>
                </div>
            </div>
        @else
            @foreach ($data_output_aboutus as $aboutus)
            <div class="col-lg-5 HomeAboutRow aboutVideoMain">
              <div class="">
                <div class="aboutVideo">
                    <video class="videoSize shadow-lg" autoplay loop muted playsinline controls class="videoBanner">
                        <source src="{{ Config::get('DocumentConstant.ABOUTUS_VIEW') }}{{ $aboutus['video_link'] }}" type="video/mp4">
                    </video>
                </div>
              </div>
            </div>
            <div class="col-lg-7 pt-5 pt-md-0 d-flex align-items-center bg-white shadow-lg">
              <p class="pText pTextAbout px-3 ms-md-5 pt-md-5 py-md-4 pe-md-3"  data-aos="zoom-in" data-aos-duration="2000">
                {{ strip_tags($aboutus['description']) }}
              </p>
            </div>
            @endforeach
            @endif
          </div>
        </div>
      </section>  
    <!-- ------------------------------------------------------------------------------------>
    <!-- About Us Section Ends Here -->
    <!-- ------------------------------------------------------------------------------------>

    <!-- ------------------------------------------------------------------------------------>
    <!-- Vision Mission Section Starts Here -->
    <!-- ------------------------------------------------------------------------------------>
    <section class="visionMissionSection py-md-3">
        <div class="container">
            @if (empty($data_output_vision_mission))
            <div class="container">
                <div class="row">
                    <h3 class="d-flex justify-content-center" style="color: #00000">No Data Found For Media</h3>
                </div>
            </div>
        @else
            @foreach ($data_output_vision_mission as $visionmission)

          <div class="row justify-content-center py-3">
            <h4 class="heading d-block d-md-block visionHeading">Vision</h4>
            <div class="col-lg-4 col-md-4 p-0 col-sm-10 col-10" data-aos="fade-right"
            data-aos-offset="300" data-aos-duration="1000"
            data-aos-easing="ease-in-sine">
                <img src="{{ Config::get('DocumentConstant.VISION_MISSION_VIEW') }}{{ $visionmission['vision_image'] }}" class="img-fluid"
                alt="vision" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10 col-10 d-flex justify-content-center align-items-center bg-white" data-aos="fade-left"
            data-aos-offset="300" data-aos-duration="1000"
            data-aos-easing="ease-in-sine">
              <div>
                <p class="px-md-5 mt-3 visionText">
                    {{ strip_tags($visionmission['vision_description']) }}
                </p>
              </div>
            </div>
          </div>
      
          <div class="row justify-content-center py-2">
          <h4 class="heading missionHeading mt-1 d-block d-md-none">Mission</h4>
            <div class="col-lg-4 col-md-4 p-0 col-sm-10 col-10 d-block d-md-none" data-aos="fade-up"
            data-aos-duration="3000">
              <img src="{{ asset('website/assets/images/aboutus/mission.png')}}" class="img-fluid" alt="vision" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10 col-10 d-flex justify-content-center align-items-center bg-white">
              <div>
                <p class="px-md-5 mt-3 visionText" data-aos="fade-up"
                data-aos-duration="1500">
                    {{ strip_tags($visionmission['mission_description']) }}
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 p-0 col-sm-10 col-10 d-none d-md-block" data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1000">
                <img src="{{ Config::get('DocumentConstant.VISION_MISSION_VIEW') }}{{ $visionmission['mission_image'] }}" class="img-fluid"
                alt="Mission Image" />
            </div>
            <h4 class="heading missionHeading mt-1 d-none d-md-block">Mission</h4>
          </div>
          @endforeach
          @endif

        </div>
      </section>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    




    <!-- ------------------------------------------------------------------------------------>
    <!-- Vision Mission Section Ends Here -->
    <!-- ------------------------------------------------------------------------------------>

    <!-- ------------------------------------------------------------------------------------>
    <!-- Square Banner Section Starts Here -->
    <!-- ------------------------------------------------------------------------------------>
    <section class="d-none d-md-block d-lg-block">
        <div class="container-fluid p-0 ">
            <img src="{{ asset('website/assets/images/aboutus/HomePageBanner.png') }}" alt="" class="img-fluid" />
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------>
    <!-- Square Banner Section Ends Here -->
    <!-- ------------------------------------------------------------------------------------>

    <!-- ------------------------------------------------------------------------------------>
    <!-- Company Section Starts Here -->
    <!-- ------------------------------------------------------------------------------------>
    <section class="text-center d-none d-md-block d-lg-block">
        <h4 class="text-center bg-white p-0 m-0 pt-4 pb-2 HomeAbout heading">
            Company
        </h4>
        <div class="" data-aos="zoom-in-up"  data-aos-duration="3000">
            <img src="{{ asset('website/assets/images/aboutus/aboutPageImg.jpg') }}" class="img-fluid w-100"
                alt="" />
        </div>
    </section>
    <!-- mobile view -->
    <section class="d-block d-md-none d-lg-none text-center">
        <h4 class="text-center bg-white p-0 m-0 pt-3 pb-2 HomeAbout heading">
            Company
        </h4>
        <div class="container">
            <div class="row justify-content-center my-3">
                <div class="col-9">
                    <img src="{{ asset('website/assets/images/aboutus/companyMob1.png') }}" class="w-100" alt="" />
                    <h6>B-226 PLOT</h6>
                </div>
                <div class="col-9">
                    <img src="{{ asset('website/assets/images/aboutus/companyMob2.png') }}" class="w-100" alt="" />
                    <h6>B-257 PLOT</h6>
                </div>
                <div class="col-9">
                    <img src="{{ asset('website/assets/images/aboutus/companyMob3.png') }}" class="w-100" alt="" />
                    <h6>B-224 PLOT</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------>
    <!-- Company Section Ends Here -->
    <!-- ------------------------------------------------------------------------------------>

    <!-- ------------------------------------------------------------------------------------>
    <!-- Certificate Section Ends Here -->
    <!-- ------------------------------------------------------------------------------------>

<!-- ------------------------------------------------------------------------------------>
<!-- Company Section Starts Here -->
<!-- ------------------------------------------------------------------------------------>
<!-- {{-- <section class="text-center d-none d-md-block d-lg-block">
<h1 class="text-center HomeAbout heading pt-4 pb-3 m-0 bg-white">Company</h1>
  <div class="container">
    <img src="{{ asset('website/assets/images/aboutus/aboutPageImg.png')}}" class="img-fluid w-75" alt="" />
  </div>
</section> --}} -->
<!-- mobile view -->
<!-- <section class="d-block d-md-none d-lg-none text-center">
  <h4 class="text-center bg-white p-0 m-0 pt-3 pb-2 HomeAbout heading">
    Company
  </h4>
  <div class="container">
    <div class="row justify-content-center my-3">
      <div class="col-10">
        <img src="{{ asset('website/assets/images/aboutus/companyMob1.png')}}" class="w-100" alt="" />
        <h6>B-226 PLOT</h6>
      </div>
      <div class="col-10">
        <img src="{{ asset('website/assets/images/aboutus/companyMob2.png')}}" class="w-100" alt="" />
        <h6>B-257 PLOT</h6>
      </div>
      <div class="col-10">
        <img src="{{ asset('website/assets/images/aboutus/companyMob3.png')}}" class="w-100" alt="" />
        <h6>B-224 PLOT</h6>
      </div>
    </div>
  </div>
</section> -->
<!-- ------------------------------------------------------------------------------------>
<!-- Company Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>

<!-- ------------------------------------------------------------------------------------>
<!-- Certificate Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>

<section class="certificateSection pt-md-5 pt-2">
  <div class="container">
    <!-- <h4 class="text-center bg-white p-0 m-0 HomeAbout heading">
      Certificate
    </h4> -->
    <div class="row">
      <img src="{{ asset('website/assets/images/aboutus/certificate.png')}}" data-aos="zoom-in" data-aos-duration="3000"
        class="mx-auto d-none d-md-block d-lg-block certificate p-0 shadow-lg" alt="certificate" />
      <img src="{{ asset('website/assets/images/aboutus/MobCertificate.jpg')}}"
        class="mx-auto my-3 d-block d-md-none d-lg-none certificate p-0 shadow-lg" alt="certificate" />
    </div>
  </div>
</section>

<!-- ------------------------------------------------------------------------------------>
<!-- Certificate Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>
@endsection
