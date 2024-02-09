@extends('website.layout.master')

@section('content')
<section class="main-services">
    <div class="container-fluid">
      <h4 class="services-main-title">Our services</h4>
      <div class="row justify-content-center">
          <div class="col-lg-4 col-md-4 col-8">
            <div class="service-heading" ><span class="service-number">01 </span><span class="service-title">Trouble Shooting</span></div>
            <img src="{{ asset('website/assets/images/services/1.png')}}" alt="Home_Banner" class="img-fluid" />
          </div>

          <div class="col-lg-4 col-md-4 col-8">
           
            <img src="{{ asset('website/assets/images/services/2.png')}}" alt="Home_Banner" class="img-fluid" />
            <div class="service-heading" ><span class="service-number">02 </span><span class="service-title"> Installation erection & commissioning</span></div>

        
          </div>

          <div class="col-lg-4 col-md-4 col-8">
            <div class="service-heading" ><span class="service-number">03 </span><span class="service-title">Servicing & Reparing </span></div>
            <img src="{{ asset('website/assets/images/services/3.png')}}" alt="Home_Banner" class="img-fluid" />          
          </div>
      </div>
    </div>
   </section>
      @endsection