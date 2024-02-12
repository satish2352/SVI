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
                                                <option value="1"
                                                    @if (old('name') == '1') {{ 'selected' }} @endif>
                                                    Home
                                                </option>
                                                <option value="2"
                                                    @if (old('name') == '2') {{ 'selected' }} @endif>
                                                   About Us
                                                </option>
                                                <option value="3"
                                                    @if (old('name') == '3') {{ 'selected' }} @endif>
                                                  Product
                                                </option>
                                                <option value="4"
                                                    @if (old('name') == '4') {{ 'selected' }} @endif>
                                                    Services
                                                </option>
                                                <option value="5"
                                                    @if (old('name') == '5') {{ 'selected' }} @endif>
                                                    Media
                                                </option>
                                                <option value="6"
                                                @if (old('name') == '6') {{ 'selected' }} @endif>
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
                // Function to check if all input fields are filled with valid data
                function checkFormValidity() {
                    const video_link = $('#video_link').val();  
                    const name = $('#name').val();                    
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
                        video_link: {
                            required: true,
                            spcenotallow: true,
                        },
                        name: {
                            required: true,
                         
                        },
                    },
                    messages: {
                        video_link: {
                            required: "Please Enter the video link",
                            spcenotallow: "Enter Some Text",
                        },
                        name: {
                            required: "Please select the menu name",
                           
                        },
                    },
                });
            });
        </script>
    @endsection
