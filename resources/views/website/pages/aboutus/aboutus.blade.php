@extends('website.layout.master')

@section('content')
    <!-- ------------------------------------------------------------------------------------>
    <!-- About Us Section starts Here -->
    <!-- ------------------------------------------------------------------------------------>
    <section class="HomeAboutSection pb-4">
        <div class="container">
            <div class="row">
                <h4 class="text-center HomeAbout heading">About Us</h4>
                @if (empty($data_output_aboutus))
                <div class="container">
                    <div class="row">
                        <h3 class="d-flex justify-content-center" style="color: #00000">No Data Found For Media</h3>
                    </div>
                </div>
            @else
                @foreach ($data_output_aboutus as $aboutus)

                <div class="col-lg-5 mx-auto HomeAboutRow">
                    <div class="aboutVideoMain">
                        <div class="aboutVideo">
                            <video width="300" height="250" controls>
                                <source src="{{ Config::get('DocumentConstant.ABOUTUS_VIEW') }}{{ $aboutus['video_link'] }}" type="video/mp4">
                            </video>
{{--                             
                            <video class="videoSize" controls>
                                <source src="{{ asset('website/assets/images/home/aboutVideo.mp4') }}" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <p class="pText">
                        {{ strip_tags($aboutus['description']) }}
                        
                        {{-- SVI Carbon Private Limited (SVICPL) is an ISO 9001:2015 certified
                        company, engaged in designing (both process and mechanical) and
                        manufacturing Impervious Graphite Heat and Mass Transfer
                        Equipments. SVICPL product portfolio comprises Graphite Heat
                        Exchangers (Condensers, Re-boilers, Coolers, Heaters,
                        Evaporators), Graphite Columns, Graphite Scrubbers, Graphite
                        Bursting/Rupture Discs, Graphite Thermowells and Customized
                        Graphite Products and Spares as per the client’s requirement.
                        These are manufactured using superior quality of Graphite, Resin
                        and Steel, due to which, these products are acknowledged for their
                        long trouble-free operation, excellent heat transfer capacity and
                        durability. These are widely used by various sectors such as API,
                        Bulk Drugs, Fine Chemicals, Specialty Chemicals, Agro-chemical,
                        Pharmaceutical, Chloral-Caustic, Cold rolling mills and steel
                        manufacturers. Company has a sound foundation of well-maintained
                        and technically advanced infrastructure. Our manufacturing
                        facilities are controlled by technocrats who have extensive
                        experience in the graphite equipment industry. --}}
                    </p>
                </div>
                @endforeach
                @endif
                <!-- <div class="text-sm-center text-md-end">
                  <button class="btn HomeAboutBtn">
                    <a href="{{ asset('website/assets/images/home/about.html') }}" class="text-decoration-none text-white">View More </a>
                  </button>
                </div> -->
            </div>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------>
    <!-- About Us Section Ends Here -->
    <!-- ------------------------------------------------------------------------------------>

    <!-- ------------------------------------------------------------------------------------>
    <!-- Vision Mission Section Starts Here -->
    <!-- ------------------------------------------------------------------------------------>

    <section>
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
                        <div class="col-lg-4 col-md-4 p-0 col-sm-10 col-10">
                            <img src="{{ Config::get('DocumentConstant.VISION_MISSION_VIEW') }}{{ $visionmission['vision_image'] }}" class="img-fluid"
                                alt="vision" />
                        </div>
                        <div
                            class="col-lg-6 col-md-6 col-sm-10 col-10 d-flex justify-content-center align-items-center bg-white">
                            <div>
                                <p style="text-align: justify" class="px-md-5 mt-3">
                                  {{ strip_tags($visionmission['vision_description']) }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center py-2">
                        <div class="col-lg-4 col-md-4 p-0 col-sm-10 col-10 d-block d-md-none">
                            <img src="{{ Config::get('DocumentConstant.VISION_MISSION_VIEW') }}{{ $visionmission['mission_image'] }}" class="img-fluid"
                                alt="vision" />
                        </div>
                        <div
                            class="col-lg-6 col-md-6 col-sm-10 col-10 d-flex justify-content-center align-items-center bg-white">
                            <div>
                                <p style="text-align: justify" class="px-md-5 mt-3">
                                  {{ strip_tags($visionmission['mission_description']) }}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 p-0 col-sm-10 col-10 d-none d-md-block">
                            <img src="{{ Config::get('DocumentConstant.VISION_MISSION_VIEW') }}{{ $visionmission['mission_image'] }}" class="img-fluid"
                                alt="Mission Image" />
                        </div>
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
        <h4 class="text-center bg-white p-0 m-0 pt-3 pb-2 HomeAbout heading">
            Company
        </h4>
        <div class="container">
            <img src="{{ asset('website/assets/images/aboutus/aboutPageImg.png') }}" class="img-fluid w-75"
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
                <div class="col-10">
                    <img src="{{ asset('website/assets/images/aboutus/companyMob1.png') }}" class="w-100" alt="" />
                    <h6>B-226 PLOT</h6>
                </div>
                <div class="col-10">
                    <img src="{{ asset('website/assets/images/aboutus/companyMob2.png') }}" class="w-100" alt="" />
                    <h6>B-257 PLOT</h6>
                </div>
                <div class="col-10">
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

    <section class="certificateSection pt-5">
        <div class="container">
            <h4 class="text-center bg-white p-0 m-0 HomeAbout heading">
                Certificate
            </h4>
            <div class="row">
                <img src="{{ asset('website/assets/images/aboutus/certificate.png') }}"
                    class="mx-auto d-none d-md-block d-lg-block certificate" alt="certificate" />
                <img src="{{ asset('website/assets/images/aboutus/MobCertificate.jpg') }}"
                    class="mx-auto my-3 d-block d-md-none d-lg-none certificate" alt="certificate" />
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------------------------------------------>
    <!-- Certificate Section Ends Here -->
    <!-- ------------------------------------------------------------------------------------>
@endsection
