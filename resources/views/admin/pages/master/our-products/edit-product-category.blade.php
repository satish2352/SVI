@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                Update Products Categories
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('list-our-products') }}">Master</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Update Products Categories
                        </li>
                    </ol>
                </nav>
            </div>           
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('update-our-products') }}" method="post"
                                id="regForm" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Category Name</label>&nbsp<span class="red-text">*</span>
                                            <input class="form-control mb-2" name="product_name" id="name"
                                                placeholder="Enter the Category Name"
                                                value="@if (old('product_name')) {{ old('product_name') }}@else{{ $incidenttype_data->product_name }} @endif">
                                            @if ($errors->has('name'))
                                                <span class="red-text"><?php echo $errors->first('product_name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="product_title">Name</label>&nbsp<span class="red-text">*</span>
                                            <input class="form-control mb-2" name="product_title" id="name"
                                                placeholder="Enter the Name"
                                                value="@if (old('product_title')) {{ old('product_title') }}@else{{ $incidenttype_data->product_title }} @endif">
                                            @if ($errors->has('name'))
                                                <span class="red-text"><?php echo $errors->first('product_title', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group" id="summernote_id">
                                            <label for="product_description">Description</label>&nbsp<span
                                                class="red-text">*</span>
                                            <span class="summernote1">
                                                <textarea class="form-control" name="product_description" id="description" placeholder="Enter the Description">
                                                @if (old('product_description')){{ old('product_description') }}@else{{ $incidenttype_data->product_description }}@endif
                                        </textarea>
                                            </span>
                                            @if ($errors->has('product_description'))
                                                <span class="red-text"><?php echo $errors->first('product_description', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton">Save &amp;
                                            Update</button>
                                        {{-- <button type="reset" class="btn btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-our-products') }}"
                                                class="btn btn-sm btn-primary ">Back</a></span>
                                    </div>
                                </div>
                                <input type="hidden" name="id" id="id" class="form-control"
                                    value="{{ $incidenttype_data->id }}" placeholder="">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                // Function to check if all input fields are filled with valid data
                function checkFormValidity() {
                    const product_name = $('#product_name').val();
                    const product_title = $('#product_title').val();
                    const description = $('#description textarea').val();
                }
                // Call the checkFormValidity function on input change
                $('input').on('input change', checkFormValidity);
                $.validator.addMethod("spcenotallow", function(value, element) {
                    if ("select" === element.nodeName.toLowerCase()) {
                        var e = $(element).val();
                        return e && e.length > 0;
                    }
                    return this.checkable(element) ? this.getLength(value, element) > 0 : value.trim().length >
                        0;
                }, "Enter Some Text");
                // Initialize the form validation
                $("#regForm").validate({
                    rules: {
                        product_name: {
                            required: true,
                            spcenotallow: true,
                        },
                        product_title: {
                            required: true,
                            spcenotallow: true,
                        },
                        description: {
                            required: true,
                        },
                    },
                    messages: {
                        product_name: {
                            required: "Please Enter the Category Name",
                            spcenotallow: "Enter Some Text",
                        },
                        product_title: {
                            required: "Please enter the Title.",
                            spcenotallow: "Enter Some Title",
                        },
                        description: {
                            required: "Please Enter the Description",
                        },
                    },
                });
            });
        </script>
    @endsection
