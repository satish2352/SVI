@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    About Us
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('list-aboutus') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> About Us</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ url('add-aboutus') }}" method="POST"
                                enctype="multipart/form-data" id="regForm">
                                @csrf
                                <div class="row d-flex justify-content-center">
                                    {{-- <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="form-group">
                                            <label for="video_link">Video Link</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control mb-2" name="video_link" id="video_link"
                                                value="{{ old('video_link') }}" placeholder="Enter the Name">
                                            @if ($errors->has('video_link'))
                                                <span class="red-text"><?php //echo $errors->first('video_link', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div> --}}


                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="form-group">
                                            <label for="video_link">Video</label>&nbsp;<span class="red-text">*</span><br>
                                            <input type="file" name="video_link" id="video_link" accept="video/*" class="form-control mb-2">
                                            @if ($errors->has('video_link'))
                                                <span class="red-text">{{ $errors->first('video_link') }}</span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="form-group" id="summernote_id">
                                            <label for="description">Description <span class="red-text">*</span></label>
                                            <textarea class="form-control" name="description" id="description" placeholder="Enter Page Content">{{ old('description') }}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="red-text">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton">
                                            Save &amp; Submit
                                        </button>
                                        {{-- <button type="reset" class="btn btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-aboutus') }}"
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
                    const description = $('#description').val();                    
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
                        description: {
                            required: true,
                            spcenotallow: true,
                        },
                    },
                    messages: {
                        video_link: {
                            required: "Please Enter the video link",
                            spcenotallow: "Enter Some Text",
                        },
                        description: {
                            required: "Please Enter the description",
                            spcenotallow: "Enter Some Text",
                        },
                    },
                });
            });
        </script>
    @endsection
