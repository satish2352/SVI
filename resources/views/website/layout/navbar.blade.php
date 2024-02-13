<!-- ------------------------------------------------------------------------------------>
<!-- Header Section Starts Here -->
<!-- ------------------------------------------------------------------------------------>
<?php
$pageName = 'Home'; // Replace 'Home' with the desired menu name
// $pageName = 'About'; // Replace 'Home' with the desired menu name
// $pageName = 'Project'; // Replace 'Home' with the desired menu name
$common_data = App\Http\Controllers\Website\IndexController::getCommonBanner($pageName);
?>
<nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid">
    <a class="navbar-brand navBarBrand d-md-none d-lg-none" href="#"><img class="navbarLogo"
              src="{{ asset('website/assets/images/home/mobLogo.png')}}" class="logo" alt="logo" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Product & Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('product') }}">Product</a></li>
            <li class="px-3"><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ route('services') }}">Services</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link px-md-3" href="{{ route('product') }}">Product & Services</a>
        </li> -->
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
<!-- Banner Section Starts Here -->
{{-- <section>
  <div class="container-fluid bg-white p-0">
    @foreach ($common_data['website_banner_data'] as $item)
      <video autoplay loop muted playsinline class="videoBanner">
        <source src="{{ Config::get('DocumentConstant.ANIMATED_VIDEO_VIEW') }}{{ $item['video_upload'] }}" type="video/mp4">
      </video>
    @endforeach
  </div>
  <div class="onVideoBanner">
    <img src="{{ asset('website/assets/images/home/onVideoBanner.png')}}" class="w-75 float-end" alt="onVideoBanner.png">
  </div>
</section> --}}

{{-- <section>
  <div class="container-fluid p-0 bg-white">
    @foreach ($common_data['website_banner_data'] as $item)
      @if ($item['name'] == 'Home')
        <video autoplay loop muted playsinline class="videoBanner">
          <source src="{{ Config::get('DocumentConstant.ANIMATED_VIDEO_VIEW') }}{{ $item['video_upload'] }}" type="video/mp4">
        </video>
      @elseif ($item['name'] == 'About')
        <video autoplay loop muted playsinline class="videoBanner">
          <source src="{{ Config::get('DocumentConstant.ANIMATED_VIDEO_VIEW') }}{{ $item['video_upload'] }}" type="video/mp4">
        </video>
      @elseif ($item['name'] == 'Product' )
        <video autoplay loop muted playsinline class="videoBanner">
          <source src="{{ Config::get('DocumentConstant.ANIMATED_VIDEO_VIEW') }}{{ $item['video_upload'] }}" type="video/mp4">
        </video>
      @elseif ($item['name'] == 'Services' )
        <video autoplay loop muted playsinline class="videoBanner">
          <source src="{{ Config::get('DocumentConstant.ANIMATED_VIDEO_VIEW') }}{{ $item['video_upload'] }}" type="video/mp4">
        </video>
      @elseif ($item['name'] == 'Media')
        <video autoplay loop muted playsinline class="videoBanner">
          <source src="{{ Config::get('DocumentConstant.ANIMATED_VIDEO_VIEW') }}{{ $item['video_upload'] }}" type="video/mp4">
        </video>
      @elseif ($item['name'] == 'Contact')
        <video autoplay loop muted playsinline class="videoBanner">
          <source src="{{ Config::get('DocumentConstant.ANIMATED_VIDEO_VIEW') }}{{ $item['video_upload'] }}" type="video/mp4">
        </video>
      @endif
    @endforeach
  </div>
  <div class="onVideoBanner">
    <img src="{{ asset('website/assets/images/home/onVideoBanner.png')}}" class="w-75 float-end" alt="onVideoBanner.png">
  </div>
</section> --}}
<section>
  <div class="container-fluid p-0 bg-white mainVideoContainer">
    @if (!empty($common_data['website_banner_data']))
      @foreach ($common_data['website_banner_data'] as $item)
        <video autoplay loop muted playsinline class="videoBanner">
          <source src="{{ Config::get('DocumentConstant.ANIMATED_VIDEO_VIEW') }}{{ $item['video_upload'] }}" type="video/mp4">
        </video>
      @endforeach
    @endif
  </div>
  <div class="onVideoBanner">
    <img src="{{ asset('website/assets/images/home/onVideoBanner.png')}}" class=" float-end d-none d-md-block" alt="onVideoBanner.png">
    <img src="{{ asset('website/assets/images/home/onVideoMobBannerText.png')}}" class=" float-end d-block d-md-none" alt="onVideoBanner.png">
  </div>
</section>

<!-- Banner Section Ends Here -->



<section class="container videoCard ">
  <div class="card videoCard_card border-0 pt-3 pb-1">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h6 class="px-md-5 py-lg-2 bannerCardHeading">
          ISO 9000 CERTIFIED COMPANY
        </h6>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h6 class="px-md-5 py-lg-2 bannerCardHeading">
          PROFESSIONAL AND TIMELY SERVICE
        </h6>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h6 class="px-md-5 py-lg-2 bannerCardHeading">
          WE MAKE DURABLE GRAPHITE PRODUCTS
        </h6>
      </div>
    </div>
  </div>
</section>

<!-- ------------------------------------------------------------------------------------>
<!-- Banner Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>