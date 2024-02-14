@extends('website.layout.master')

@section('content')
    <section class="main-services">
        <div class="container">
            <h4 class="services-main-title">Our services</h4>
            <div class="row justify-content-center">
                
                    @if (empty($data_output))
                        <div class="container px-5">
                            <div class="row px-5">
                                <h3 class="d-flex justify-content-center" style="color: #00000">No Data Found For Services</h3>
                            </div>
                        </div>
                    @else
                        @foreach ($data_output as $services)
                        <div class="col-lg-4 col-md-4 col-10 service-spacing">
                            <img src="{{ Config::get('DocumentConstant.SERVICES_VIEW') }}{{ $services['image'] }}" alt="Home_Banner"
                                class="img-fluid" />
                                <div class="service-heading"><span class="service-number"> </span><span
                                  class="service-title">{{ strip_tags($services['title']) }}</span></div>
                                </div>
                                  @endforeach
                    @endif
                

                {{-- <div class="col-lg-4 col-md-4 col-8">

                    <img src="{{ asset('website/assets/images/services/2.png') }}" alt="Home_Banner" class="img-fluid" />
                    <div class="service-heading"><span class="service-number">02 </span><span class="service-title">
                            Installation erection & commissioning</span></div>


                </div>

                <div class="col-lg-4 col-md-4 col-8">
                    <div class="service-heading"><span class="service-number">03 </span><span
                            class="service-title">Servicing & Reparing </span></div>
                    <img src="{{ asset('website/assets/images/services/3.png') }}" alt="Home_Banner" class="img-fluid" />
                </div> --}}
            </div>
        </div>
    </section>
@endsection
