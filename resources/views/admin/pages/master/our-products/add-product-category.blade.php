@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Product Categories
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('list-product-category') }}">Master</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Product Categories</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ url('add-our-products') }}" method="POST"
                                enctype="multipart/form-data" id="regForm">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="product_name">Category Name</label>&nbsp<span
                                                class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="product_name"
                                                id="product_name" value="{{ old('product_name') }}"
                                                placeholder="Enter the Category Name">
                                            @if ($errors->has('product_name'))
                                                <span class="red-text"><?php echo $errors->first('product_name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="product_title">Title</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="product_title"
                                                id="product_title" value="{{ old('product_title') }}"
                                                placeholder="Enter the Title">
                                            @if ($errors->has('product_title'))
                                                <span class="red-text"><?php echo $errors->first('product_title', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group" id="summernote_id">
                                            <label for="product_description">Description <span
                                                    class="red-text">*</span></label>
                                            <textarea class="form-control" name="product_description" id="description" placeholder="Enter Page Content">{{ old('description') }}</textarea>
                                            @if ($errors->has('product_description'))
                                                <span class="red-text">{{ $errors->first('product_description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton">
                                            Save &amp; Submit
                                        </button>
                                        {{-- <button type="reset" class="btn btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-our-products') }}"
                                                class="btn btn-sm btn-primary">Back</a></span>
                                    </div>
                                </div>
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
