@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                Update About Us
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('list-aboutus') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Update About Us
                        </li>
                    </ol>
                </nav>
            </div>           
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('update-aboutus') }}" method="post"
                                id="regForm" enctype="multipart/form-data">
                                @csrf
                                <div class="row  d-flex justify-content-center">
                                    {{-- <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="form-group">
                                            <label for="name">Video Link</label>&nbsp<span class="red-text">*</span>
                                            <input class="form-control mb-2" name="video_link" id="name"
                                                placeholder="Enter the Name"
                                                value="@if (old('video_link')) {{ old('video_link') }}@else{{ $editData->video_link }} @endif">
                                            @if ($errors->has('name'))
                                                <span class="red-text"><?php //echo $errors->first('video_link', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div> --}}



                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="form-group">
                                            <label for="video_link">video</label>
                                            <input type="file" name="video_link" class="form-control mb-2"
                                                id="video_link" accept="video/*" placeholder="video upload">
                                            @if ($errors->has('video_link'))
                                                <span class="red-text"><?php echo $errors->first('video_link', ':message'); ?></span>
                                            @endif
                                        </div>
                                        {{-- <img id="english"
                                            src="{{ Config::get('DocumentConstant.ANIMATED_VIDEO_VIEW') }}{{ $editData->video_link }}"
                                            class="img-fluid img-thumbnail" width="150" style="background-color: aliceblue;"> --}}

                                            <video width="200" height="160" controls>
                                                <source src="{{ Config::get('DocumentConstant.ABOUTUS_VIEW') }}{{ $editData->video_link }}" type="video/mp4">
                                            </video>

                                        <img id="english_imgPreview" src="#"
                                            alt="No Video"
                                            class="img-fluid img-thumbnail" width="150" style="display:none">
                                    </div>


                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="form-group" id="summernote_id">
                                            <label for="english_description">Description</label>&nbsp<span
                                                class="red-text">*</span>
                                            <span class="summernote1">
                                                <textarea class="form-control" name="description" id="description" placeholder="Enter the Description">
                                                @if (old('description')){{ old('description') }}@else{{ $editData->description }}@endif
                                        </textarea>
                                            </span>
                                            @if ($errors->has('description'))
                                                <span class="red-text"><?php echo $errors->first('description', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton">Save &amp;
                                            Update</button>
                                        {{-- <button type="reset" class="btn btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-aboutus') }}"
                                                class="btn btn-sm btn-primary ">Back</a></span>
                                    </div>
                                </div>
                                <input type="hidden" name="id" id="id" class="form-control"
                                    value="{{ $editData->id }}" placeholder="">
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
                    const description = $('#description textarea').val();
                    const video_link = $('#video_link').val();                    
                }
                
                // Custom validation method to check file extension
                $.validator.addMethod("fileExtension", function(value, element, param) {
                    // Get the file extension
                    const extension = value.split('.').pop().toLowerCase();
                    return $.inArray(extension, param) !== -1;
                }, "Invalid file extension.");

                // Custom validation method to check file size
                // $.validator.addMethod("fileSize", function(value, element, param) {
                //     // Convert bytes to KB
                //     const fileSizeKB = element.files[0].size / 1024;
                //     return fileSizeKB >= param[0] && fileSizeKB <= param[1];
                // }, "File size must be between {0} KB and {1} KB.");

                // Update the accept attribute to validate based on file extension
                // $('#image').attr('accept', 'image/jpeg, image/png');

                // Call the checkFormValidity function on input change
                $('input, textarea, #video_link').on('input change', checkFormValidity);
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
                        description: {
                            required: true,
                        },
                        video_link: {
                            required: true,
                            // fileExtension: ["jpg", "jpeg", "png"],
                            // fileSize: [50, 1048], // Min 10KB and Max 2MB (2 * 1024 KB)
                            // imageDimensions: [300, 1000, 1000, 2000], // Min width x height and Max width x height
                        },
                    },
                    messages: {
                        description: {
                            required: "Please Enter the Description",
                        },
                        video_link: {
                            required: "Please upload an Video.",
                           
                        },
                    },
                });
            });
        </script>




    @endsection
