@extends('website.layout.master')

@section('content')
<!-- ------------------------------------------------------------------------------------>
<!-- Video Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>

<section class="bg-white">
  <div class="container-fluid m-0 p-0">
    <video autoplay loop muted playsinline class="videoBanner" controls>
      <source src="{{ asset('website/assets/images/home/mediaSampleVideo.mp4')}}" type="video/mp4">
      <!-- Add additional source elements for different formats if needed -->
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

{{-- <section class="bg-white">
  <div class="container py-5">
    <div class="card border-0 py-3 px-3 mediaCard shadow-lg">
      <h3 class="heading text-start mx-md-4 mt-3">Media</h3>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-3 col-sm-10">
          <img src="{{ asset('website/assets/images/media/media1.png')}}" class="w-100" alt="media1" />
        </div>
      </section> --}}
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Video Section Ends Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <!-- ------------------------------------------------------------------------------------>
      <!-- Media Cards Section Starts Here -->
      <!-- ------------------------------------------------------------------------------------>
  
      <section class="bg-white">
        <div class="container py-md-5 py-4">
          <div class="card border-0 py-3 px-lg-3 px-2 mediaCard shadow-lg">
            <h4 class="heading text-start mx-md-4 mt-3 " data-aos="fade-right"  data-aos-easing="linear"
            data-aos-duration="1500">Media</h4>
            <div class="row justify-content-center px-lg-5">
              @if (empty($data_output))
              <div class="container">
                  <div class="row">
                      <h3 class="d-flex justify-content-center" style="color: #00000">No Data Found For Media</h3>
                  </div>
              </div>
          @else
              @foreach ($data_output as $media)

              <div class="col-lg-3 col-md-3 col-sm-8 col-9 pt-4" data-aos="zoom-in-up"  data-aos-easing="linear"
              data-aos-duration="1500">
                <img src="{{ Config::get('DocumentConstant.MEDIA_VIEW') }}{{ $media['image'] }}" class="w-100" alt="media1" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" />
              </div>
              @endforeach
              @endif
              {{-- <div class="col-lg-3 col-md-3 col-sm-8">
                <img src="{{ asset('website/assets/images/media/media2.png')}}" class="w-md-100 w-sm-75" alt="media2" />
              </div>
              <div class="col-lg-3 col-md-3 col-sm-8">
                <img src="{{ asset('website/assets/images/media/media3.png')}}" class="w-100" alt="media3" />
              </div>
              <div class="col-lg-3 col-md-3 col-sm-8">
                <img src="{{ asset('website/assets/images/media/media4.png')}}" class="w-100" alt="media4" />
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-md-3 col-sm-8">
                <img src="{{ asset('website/assets/images/media/media5.png')}}" class="w-100" alt="media5" />
              </div>
              <div class="col-lg-3 col-md-3 col-sm-8">
                <img src="{{ asset('website/assets/images/media/media6.png')}}" class="w-100" alt="media6" />
              </div>
              <div class="col-lg-3 col-md-3 col-sm-8">
                <img src="{{ asset('website/assets/images/media/media7.png')}}" class="w-100" alt="media7" />
              </div>
              <div class="col-lg-3 col-md-3 col-sm-8">
                <img src="{{ asset('website/assets/images/media/media8.png')}}" class="w-100" alt="media8" />
              </div> --}}
            </div>
          </div>
        </div>
        {{-- <div class="col-lg-3 col-md-3 col-sm-8">
          <img src="{{ asset('website/assets/images/media/media3.png')}}" class="w-100" alt="media3" />
        </div>
        <div class="col-lg-3 col-md-3 col-sm-8">
          <img src="{{ asset('website/assets/images/media/media4.png')}}" class="w-100" alt="media4" />
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-3 col-sm-8">
          <img src="{{ asset('website/assets/images/media/media5.png')}}" class="w-100" alt="media5" />
        </div>
        <div class="col-lg-3 col-md-3 col-sm-8">
          <img src="{{ asset('website/assets/images/media/media6.png')}}" class="w-100" alt="media6" />
        </div>
        <div class="col-lg-3 col-md-3 col-sm-8">
          <img src="{{ asset('website/assets/images/media/media7.png')}}" class="w-100" alt="media7" />
        </div>
        <div class="col-lg-3 col-md-3 col-sm-8">
          <img src="{{ asset('website/assets/images/media/media8.png')}}" class="w-100" alt="media8" />
        </div> --}}
      </div>
    </div>
  </div>
</section>

<!-- ------------------------------------------------------------------------------------>
<!-- Media Cards Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>
@endsection