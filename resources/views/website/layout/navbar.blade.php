<!-- ------------------------------------------------------------------------------------>
<!-- Header Section Starts Here -->
<!-- ------------------------------------------------------------------------------------>
<nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid">
    <a class="navbar-brand navBarBrand d-md-none d-lg-none" href="#"><img class="navbarLogo"
              src="{{ asset('website/assets/images/home/mobLogo.png')}}" class="logo" alt="logo" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-md-auto navbarView">
        <li class="nav-item d-none d-md-block">
          <a class="navbar-brand" href="{{url('/')}}"> <img class="navbarLogo"
              src="{{ asset('website/assets/images/logo.png')}}" class="logo" alt="logo" /></a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-md-3" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-md-3" href="{{ route('aboutus') }}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-md-3" href="{{ route('product') }}">Product & Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-md-3" href="{{ route('media') }}">Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link headerBtn text-white mx-md-4 mx-1" href="{{ route('contactus') }}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- ------------------------------------------------------------------------------------>
<!-- Header Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>

<!-- ------------------------------------------------------------------------------------>
<!-- Banner Section Starts Here -->
<!-- ------------------------------------------------------------------------------------>

<section>
  <div class="container-fluid p-0 bg-white">
    <video autoplay loop muted playsinline class="videoBanner">
      <source src="{{ asset('website/assets/images/home/sampleVideo.mp4')}}" type="video/mp4">
      <!-- Add additional source elements for different formats if needed -->
      Your browser does not support the video tag.
    </video>
  </div>
  <div class="onVideoBanner">
    <img src="{{ asset('website/assets/images/home/onVideoBanner.png')}}" class="w-75 float-end" alt="onVideoBanner.png">
  </div>
</section>

<section class="container videoCard ">
  <div class="card videoCard_card border-0 pt-3 pb-1">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h6 class="px-md-5 bannerCardHeading">
          ISO 9000 CERTIFIED COMPANY
        </h6>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h6 class="px-md-5 bannerCardHeading">
          PROFESSIONAL AND TIMELY SERVICE
        </h6>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h6 class="px-md-5 bannerCardHeading">
          WE MAKE DURABLE GRAPHITE PRODUCTS
        </h6>
      </div>
    </div>
  </div>
</section>

<!-- ------------------------------------------------------------------------------------>
<!-- Banner Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>