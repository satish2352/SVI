@extends('website.layout.master')

@section('content')
<div class="main-product">
    <section class="main-product">
     <div class="container-fluid">
       <h4 class="product-name">Product</h4>
       <div class="row">
           <div class="col-lg-4 col-md-4 col-sm-4">
             <div class="card">
             <img src="{{ asset('website/assets/images/product/1.png')}}" alt="Home_Banner" class="img-fluid" />
               <div class="card-body shadow-sm card-title" >Largest Heat Exchanger </div>
             </div>
           </div>
 
           <div class="col-lg-4 col-md-4 col-sm-4">
             <div class="card">
             <img src="{{ asset('website/assets/images/product/2.png')}}" alt="Home_Banner" class="img-fluid" />
             <div class="card-body shadow-sm card-title" >Packed Bed Scrubber</div>
           </div>
           </div>
 
           <div class="col-lg-4 col-md-4 col-sm-4">
             <div class="card">
             <img src="{{ asset('website/assets/images/product/3.png')}}" alt="Home_Banner" class="img-fluid" />
             <div class="card-body shadow-sm card-title" >Pickling Heat Exchanger</div>
           </div>
           </div>
       </div>
     </div>
    </section>
    <section class="our-product">
     <div class="container-fluid">
       <div class="row d-flex justify-content-center">
         <div class="col-lg-11 col-md-11 col-sm-11 px-0">
     <div class="d-flex align-items-start">
       <div class="col-lg-3 col-md-3 col-sm-3">
       <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
         <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">BLOCK TYPE HEAT EXCHANGERS</button>
         <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Heat Exchangers </button>
         <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">DualUtility Condense</button>
         <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Smallest& Largest Heat Exchangers</button>
         <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Graphite Falling Film Absorbers,Evaporator and Graphite Packed Bed Scrubber</button>
         <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">VACUUM JET EJECTOR SYSTEM</button>
         <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">GraphiteThermowell</button>
         <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">DRY HCL GAS REGENERATION UNIT</button>
       </div>
     </div>
     <div class="col-lg-9 col-md-9 col-sm-9">
       <div class="tab-content" id="v-pills-tabContent">
         <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
           <div class="cardContent">
             <h3 class="">Heat Exchangers 
               (Condensers, Reboilers, Coolers) for Hostile Applications</h3>
               <p>SVI CarbonPvt Ltd. has established its own sound technological and infrastructural baseto manufacture Graphite Heat Exchanger with various kinds of impregnation. OurHeat Exchangers work have provided satisfactory service for critical andhostile applications like Caustic solution, Sulfuric acid, Hydrochloric acid,Metal salts, Chlorobenzenes, etc.</p>
           </div>
         </div>
         <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">savita</div>
         <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">test</div>
         <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
       </div>
       </div>
 
     </div>
   </div>
   </div>
 </div>
    </section>
   </div>
      @endsection