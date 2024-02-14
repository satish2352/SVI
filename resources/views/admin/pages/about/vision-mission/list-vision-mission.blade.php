@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-7">
            <div class="page-header">
                <h3 class="page-title">
                    Vision Mission List
                    {{-- <a href="{{ route('add-vision-mission') }}" class="btn btn-sm btn-primary ml-3">+
                        Add</a> --}}

                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('list-vision-mission') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vision Mission List</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    @include('admin.layout.alert')
                                    <div class="table-responsive">
                                        <table id="order-listing" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Vision Description</th>
                                                    <th>Mission Description </th>
                                                    <th>Vision Image</th>
                                                    <th>Mission Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($getOutput as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ strip_tags($item->vision_description) }}</td>
                                                        <td>{{ strip_tags($item->mission_description) }}</td>
                                                        <td> <img class="img-size"
                                                                src="{{ Config::get('DocumentConstant.VISION_MISSION_VIEW') }}{{ $item->vision_image }}"
                                                                alt="Vision Image" />
                                                        </td>
                                                        <td> <img class="img-size"
                                                            src="{{ Config::get('DocumentConstant.VISION_MISSION_VIEW') }}{{ $item->mission_image }}"
                                                            alt="Mission Image" />
                                                    </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <a href="{{ route('edit-vision-mission', base64_encode($item->id)) }}"
                                                                    class="btn btn-sm btn-outline-primary m-1"
                                                                    title="Edit Slide"><i
                                                                        class="fas fa-pencil-alt"></i></a>

                                                                <a data-id="{{ $item->id }}"
                                                                    class="show-btn btn btn-sm btn-outline-primary m-1"
                                                                    title="Show Slide "><i class="fas fa-eye"></i></a>                                                              
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ url('/show-vision-mission') }}" id="showform">
            @csrf
            <input type="hidden" name="show_id" id="show_id" value="">
        </form>
      

        <!-- content-wrapper ends -->
    @endsection
