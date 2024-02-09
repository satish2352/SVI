@extends('website.layout.master')

@section('content')
<!-- ------------------------------------------------------------------------------------>
    <!-- Video Section Ends Here -->
    <!-- ------------------------------------------------------------------------------------>

    <section>
        <div class="container-fluid m-0 p-0">
          <video class="mediaVideo" controls>
            <source src="{{ asset('website/assets/images/home/sampleVideo.mp4')}}" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </div>
      </section>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Video Section Ends Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Media Cards Section Starts Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <section class="my-3">
        <div class="container">
          <div class="card border-0 py-3 px-3 mediaCard">
            <h4 class="heading text-start mx-md-4 mt-3">Media</h4>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-md-3 col-sm-10">
                <img src="{{ asset('website/assets/images/media/media1.png')}}" class="w-100" alt="media1" />
              </div>
              <div class="col-lg-3 col-md-3 col-sm-10">
                <img src="{{ asset('website/assets/images/media/media2.png')}}" class="w-100" alt="media2" />
              </div>
              <div class="col-lg-3 col-md-3 col-sm-10">
                <img src="{{ asset('website/assets/images/media/media3.png')}}" class="w-100" alt="media3" />
              </div>
              <div class="col-lg-3 col-md-3 col-sm-10">
                <img src="{{ asset('website/assets/images/media/media4.png')}}" class="w-100" alt="media4" />
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-md-3 col-sm-10">
                <img src="{{ asset('website/assets/images/media/media5.png')}}" class="w-100" alt="media5" />
              </div>
              <div class="col-lg-3 col-md-3 col-sm-10">
                <img src="{{ asset('website/assets/images/media/media6.png')}}" class="w-100" alt="media6" />
              </div>
              <div class="col-lg-3 col-md-3 col-sm-10">
                <img src="{{ asset('website/assets/images/media/media7.png')}}" class="w-100" alt="media7" />
              </div>
              <div class="col-lg-3 col-md-3 col-sm-10">
                <img src="{{ asset('website/assets/images/media/media8.png')}}" class="w-100" alt="media8" />
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Media Cards Section Ends Here -->
      <!-- ------------------------------------------------------------------------------------>
      @endsection