@extends('website.layout.master')

@section('content')
    <div class="main-product bg-white">


        <section class="main-product">
            <div class="container-fluid">
              <h4 class="product-name py-4">Product</h4>
              <div class="row">
       
       
                  {{-- <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card">
                    <img src="{{ asset('website/assets/images/product/1.png')}}" alt="Home_Banner" class="img-fluid" />
                      <div class="card-body shadow-sm card-title" >Largest Heat Exchanger </div>
                    </div>
                  </div> --}}           
                   @if (empty($data_output_all_product))
                   <div class="container">
                       <div class="row">
                           <h3 class="d-flex justify-content-center" style="color: #00000">No Data Found For Services</h3>
                       </div>
                   </div>
               @else
                   @foreach ($data_output_all_product as $product)
                   <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card">
                    <img src="{{ Config::get('DocumentConstant.PRODUCT_VIEW') }}{{ $product['image'] }}" alt="{{ strip_tags($product['title']) }}" class="img-fluid" />
                    <div class="card-body shadow-sm card-title" >{{ strip_tags($product['title']) }}</div>
                  </div>
                 </div>
                  @endforeach
                  @endif
                  
        
                  {{-- <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="card">
                    <img src="{{ asset('website/assets/images/product/3.png')}}" alt="Home_Banner" class="img-fluid" />
                    <div class="card-body shadow-sm card-title" >Pickling Heat Exchanger</div>
                  </div> --}}
                  </div>
              </div>
            </div>
           </section>
           
        <section class="main-product-sub">
            <div class="container-fluid">
                <h4 class="product-name py-4">Our Product</h4>
                <div class="row">
                </div>
            </div>
   
    {{-- ============================= --}}
    
      
    <div class="container-fluid contaback bg-white pb-4">
        <div class="">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="article_nav">
                            <div class="nav nav-tabs article_tab" id="nav-tab" role="tablist">
                                
                                @forelse($all_services as $key=>$categories_data)
                                    <button class="nav-link article_tab_link {{ $loop->first ? 'active' : '' }}"
                                        id="id_{{ $categories_data['id'] }}" data-bs-toggle="tab"
                                        data-bs-target="#data_id_{{ $categories_data['id'] }}"
                                        onclick="getServices('{{ $categories_data['id'] }}')" type="button" role="tab"
                                        aria-controls="nav-profile"
                                        aria-selected="false">{{ $categories_data['product_name'] }}</button>
                                @empty
                                    <div class="alert alert-primary" role="alert">
                                        No Data Found
                                    </div>
                                @endforelse
                            </div>
                        </nav>

                    </div>
                    <div class="col-md-9">
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="row d-flex gallery" id="gallary_data">
                                <div class="row row-cols-1 row-cols-md-4 ">
                                    {{-- <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h4 class="card-title fw-7">{{ $item['product_title'] }}</h4>
                                    <h4 class="card-title fw-7">{{ $item['product_description'] }}</h4>
                                </div> --}}

                              
                                    @forelse ($all_services_details as $key=>$item)
                                        {{-- <h4 class="card-title fw-7">{{ $item['service_details'] }}</h4> --}}

                                        <div class="col-md-6 col-lg-4 col-sm-12 pt-4">
                                            <div class="card article_card_container shadow-sm">
                                                <img src="{{ Config::get('DocumentConstant.PRODUCT_DETAILS_VIEW') }}{{ $item['image'] }}"
                                                    class="card-img-top" alt="{{ $item['title'] }}">
                                                <div class="card-body">
                                                    <h4 class="card-title fw-7">{{ $item['title'] }}</h4>
                                                    {{-- <p class="text-align-justify">{{
                                                  $item['short_description'] }}</p> --}}
                                                </div>
                                                <div class="card-footer article_card_footer">

                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="alert alert-primary" role="alert">
                                            No Data Found
                                        </div>
                                    @endforelse
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script>

$(document).ready(function() {
    // Show data for the first category by default
    var firstCategoryId = '{{ $all_services->first()->id }}';
    getServices(firstCategoryId);
});

var currentCategoryData = {}; // Variable to store current category data

function getServices(our_services_master_id) {
    console.log("Clicked tab with ID: " + our_services_master_id);
    $("#gallary_data").empty();

    // Check if the category data is already loaded
    if (currentCategoryData.hasOwnProperty(our_services_master_id)) {
        displayCategoryData(currentCategoryData[our_services_master_id]);
    } else {
        $.ajax({
            url: "{{ route('list-our-services-ajax') }}",
            method: "POST",
            data: {
                "our_services_master_id": our_services_master_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                currentCategoryData[our_services_master_id] = data; // Store category data

                displayCategoryData(data); // Display category data
            },
            error: function(data) {
                console.error('Error fetching data');
            }
        });
    }
}

function displayCategoryData(categoryData) {
    var path = '<?php echo Config::get('DocumentConstant.PRODUCT_DETAILS_VIEW'); ?>';
    $("#gallary_data").empty();

    // Append product title and description
    $("#gallary_data").append(`
    <div class="col-lg-12 col-md-12 col-sm-12 main-card-product-dis mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12 sub-card-product-dis py-2 px-4 ">
            <h4 class="card-title fw-7">${categoryData[0].product_title}</h4>
            <h4 class="card-title fw-7 dis-ellipse">${categoryData[0].product_description}</h4>
        </div>
        </div>
    `);

    // Append images
    $.each(categoryData, function(i, item) {
        $("#gallary_data").append(`
            <div class="col-md-6 col-lg-4 col-sm-12 card-padding">
                <div class="card article_card_container">
                    <img src="${path}${item.image}"
                        class="card-img-top" alt="${item.title}">
                    <div class="card-body">
                        <h5 class="card-title">${item.title}</h5>
                    </div>
                </div>
            </div>
        `);
    });
}

    </script>
   
    </div>
@endsection
