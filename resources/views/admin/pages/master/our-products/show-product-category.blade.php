@extends('admin.layout.master')

@section('content')
<div class="main-panel">
  <div class="content-wrapper mt-7">

    <div class="row justify-content-center">
      <div class="col-7 grid-margin ">

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-start align-items-center">
            <h3 class="page-title">
              Product Categories
            </h3>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-end align-items-center">
            <div>
              <a href="{{ route('list-our-products') }}" class="btn btn-sm btn-primary ml-3">Back</a>
            </div>
          </div>

        </div>
        <div class="card mt-2">
          <div class="card-body">
            <div class="row">
              <div class="col-12">

                <div class="row ">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <label>Name :</label>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <label>{{ strip_tags($incidenttype_data->product_name) }}</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  @endsection