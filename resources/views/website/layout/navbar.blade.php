<!-- ------------------------------------------------------------------------------------>
<!-- Header Section Starts Here -->
<!-- ------------------------------------------------------------------------------------>
<?php
// Determine the current page and set the $pageName variable accordingly
if (strpos($_SERVER['REQUEST_URI'], 'aboutus') !== false) {
    $pageName = 'About';
} elseif (strpos($_SERVER['REQUEST_URI'], 'product') !== false) {
    $pageName = 'Product';
} elseif (strpos($_SERVER['REQUEST_URI'], 'services') !== false) {
    $pageName = 'Services';
} elseif (strpos($_SERVER['REQUEST_URI'], 'media') !== false) {
    $pageName = 'Media';
} elseif (strpos($_SERVER['REQUEST_URI'], 'contactus') !== false) {
    $pageName = 'Contact';
} else {
    $pageName = 'Home'; // Default to Home if no specific page is detected
}

// Retrieve common banner data based on the determined page name
$common_data = App\Http\Controllers\Website\IndexController::getCommonBanner($pageName);
?>

{{-- <nav class="navbar navbar-expand-lg bg-white">
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
          <a class="nav-link px-md-3 <?php //if($pageName === 'Home') echo 'active'; ?>" aria-current="page" href="{{url('/')}}">Home</a>
      </li>
      <li class="nav-item">
          <a class="nav-link px-md-3 <?php// if($pageName === 'About') echo 'active'; ?>" href="{{ route('aboutus') }}">About Us</a>
      </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Product & Services
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item">
              <a class="nav-link px-md-3 <?php //if($pageName === 'Product') echo 'active'; ?>" aria-current="page" href="{{ route('product') }}">Product</a>
          </li>
          <li class="nav-item">
              <a class="nav-link px-md-3 <?php //if($pageName === 'Services') echo 'active'; ?>" href="{{ route('services') }}">Services</a>
          </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link px-md-3 <?php //if($pageName === 'Media') echo 'active'; ?>" aria-current="page" href="{{ route('media') }}">Media</a>
      </li>
      <li class="nav-item">
          <a class="nav-link px-md-3 px-1 headerBtn <?php //if($pageName === 'Contact') echo 'active'; ?>" href="{{ route('contactus') }}">Contact</a>
      </li>
      </ul>
    </div>
  </div>
</nav> --}}
<nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid">
    <a class="navbar-brand navBarBrand d-md-none d-lg-none" href="#"><img class="navbarLogo"
      src="{{ asset('website/assets/images/home/mobLogo.png')}}" class="logo" alt="logo" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
          <a class="navbar-brand navBarBrand d-md-none d-lg-none" href="#"><img class="navbarLogo"
            src="{{ asset('website/assets/images/home/mobLogo.png')}}" class="logo" alt="logo" /></a>

        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav mx-md-auto navbarView">
          <li class="nav-item d-none d-md-block">
            <a class="navbar-brand" href="{{url('/')}}"> <img class="navbarLogo"
                src="{{ asset('website/assets/images/logo.png')}}" class="logo" alt="logo" /></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($pageName === 'Home') echo 'active'; ?>" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($pageName === 'About') echo 'active'; ?>" href="{{ route('aboutus') }}">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product & Services
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item">
                <a class="nav-link px-md-3 <?php if($pageName === 'Product') echo 'active'; ?>" aria-current="page" href="{{ route('product') }}">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-md-3 <?php if($pageName === 'Services') echo 'active'; ?>" href="{{ route('services') }}">Services</a>
            </li>
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link <?php //if($pageName === 'Product') echo 'active'; ?>" aria-current="page" href="{{ route('product') }}">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php //if($pageName === 'Services') echo 'active'; ?>" href="{{ route('services') }}">Services</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link <?php if($pageName === 'Media') echo 'active'; ?>" aria-current="page" href="{{ route('media') }}">Media</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-md-4 headerBtn <?php if($pageName === 'Contact') echo 'active'; ?>" href="{{ route('contactus') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<section>
  <div class="container-fluid p-0 bg-white">
    @foreach ($common_data['website_banner_data'] as $item)
      @if ($item['name'] == $pageName)
        <video autoplay loop muted playsinline class="videoBanner">
          <source src="{{ Config::get('DocumentConstant.ANIMATED_VIDEO_VIEW') }}{{ $item['video_upload'] }}" type="video/mp4">
        </video>
      @endif
    @endforeach
  </div>
  <div class="onVideoBanner">
    <img src="{{ asset('website/assets/images/home/onVideoBanner.png')}}" class=" float-end d-none d-md-block" alt="onVideoBanner.png">
    <img src="{{ asset('website/assets/images/home/onVideoMobBannerText.png')}}" class=" d-block d-md-none float-end" alt="onVideoMobBannerText.png">
  </div>
</section>
<!-- Banner Section Ends Here -->
<section class="container videoCard ">
  <div class="card videoCard_card border-0 pt-md-3 pt-4 pb-2 pb-md-1">
    <div class="row bannerCardMainRow align-items-center">
      <div class="col-lg-4 col-md-4 col-4 ">
        <h6 class="px-lg-5 py-lg-2 bannerCardHeading">
        ISO 9001:2015 certified company
        </h6>
      </div>
      <div class="col-lg-4 col-md-4 col-4">
        <h6 class="px-lg-5 py-lg-2 bannerCardHeading">
        Process Design And Economical Prices
        </h6>
      </div>
      <div class="col-lg-4 col-md-4 col-4">
        <h6 class="px-lg-1 py-lg-2 bannerCardHeading">
        Durable and High Performance Graphite Equipment
        </h6>
      </div>
    </div>
  </div>
</section>

<!-- ------------------------------------------------------------------------------------>
<!-- Banner Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>   