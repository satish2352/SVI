@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Animated Video
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('list-animated-video') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Animated Video</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ url('add-animated-video') }}" method="POST"
                                enctype="multipart/form-data" id="regForm">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Select Menu Name </label>&nbsp<span
                                                class="red-text">*</span>
                                            <select class="form-control" id="name" name="name">
                                                <option value="">Select</option>
                                                <option value="Home"
                                                    @if (old('name') == 'Home') {{ 'selected' }} @endif>
                                                    Home
                                                </option>
                                                <option value="About"
                                                    @if (old('name') == 'About') {{ 'selected' }} @endif>
                                                   About Us
                                                </option>
                                                <option value="Product"
                                                    @if (old('name') == 'Product') {{ 'selected' }} @endif>
                                                  Product
                                                </option>
                                                <option value="Services"
                                                    @if (old('name') == 'Services') {{ 'selected' }} @endif>
                                                    Services
                                                </option>
                                                <option value="Media"
                                                    @if (old('name') == 'Media') {{ 'selected' }} @endif>
                                                    Media
                                                </option>
                                                <option value="Contact"
                                                @if (old('name') == 'Contact') {{ 'selected' }} @endif>
                                                Contact
                                            </option>
                                            </select>
                                            @if ($errors->has('name'))
                                                <span class="red-text"><?php echo $errors->first('name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="video_upload">Video</label>&nbsp;<span class="red-text">*</span><br>
                                            <input type="file" name="video_upload" id="video_upload" accept="video/*" class="form-control mb-2">
                                            @if ($errors->has('video_upload'))
                                                <span class="red-text">{{ $errors->first('video_upload') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    {{-- <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="video_link">Video Link</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="video_link" id="video_link"
                                                value="{{ old('video_link') }}" placeholder="Enter the Name">
                                            @if ($errors->has('video_link'))
                                                <span class="red-text"><?php //echo $errors->first('video_link', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div> --}}
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton">
                                            Save &amp; Submit
                                        </button>
                                        {{-- <button type="reset" class="btn btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-animated-video') }}"
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
            $('#name').on('change', function() {
                $('#regForm').submit();
            });

            // Function to check if all input fields are filled with valid data
            function checkFormValidity() {
                const video_upload = $('#video_upload').val();
                const name = $('#name').val();

                // You can add further validation checks here if needed
            }

            // Call the checkFormValidity function on input change
            $('input').on('input change', checkFormValidity);

            $.validator.addMethod("spcenotallow", function(value, element) {
                if ("select" === element.nodeName.toLowerCase()) {
                    var e = $(element).val();
                    return e && e.length > 0;
                }
                return this.checkable(element) ? this.getLength(value, element) > 0 : value.trim().length > 0;
            }, "Enter Some Text");

            // Initialize the form validation
            $("#regForm").validate({
                rules: {
                    video_upload: {
                        required: true,
                    },
                    name: {
                        required: true,
                    },
                },
                messages: {
                    video_upload: {
                        required: "Please select a video to upload",
                    },
                    name: {
                        required: "Please select the menu name",
                    },
                },
            });
        });
    </script>
    @endsection
