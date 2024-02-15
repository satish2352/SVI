@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Vision Mission
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('list-vision-mission') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Update Vision Mission</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('update-vision-mission') }}" method="post" id="regForm"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="summernote_id">
                                            <label for="vision_description">Vision Description</label>&nbsp<span
                                                class="red-text">*</span>
                                            <span class="summernote1">
                                                <textarea class="form-control" name="vision_description" id="description" placeholder="Enter the Vision Description">
                                                @if (old('vision_description')){{ old('vision_description') }}@else{{ $editData->vision_description }}@endif
                                        </textarea>
                                            </span>
                                            @if ($errors->has('vision_description'))
                                                <span class="red-text"><?php echo $errors->first('vision_description', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group" id="summernote_id1">
                                            <label for="mission_description">Mission Description</label>&nbsp<span
                                                class="red-text">*</span>
                                            <span class="summernote1">
                                                <textarea class="form-control" name="mission_description" id="description1" placeholder="Enter the Mission Description">
                                                @if (old('mission_description')){{ old('mission_description') }}@else{{ $editData->mission_description }}@endif
                                        </textarea>
                                            </span>
                                            @if ($errors->has('mission_description'))
                                                <span class="red-text"><?php echo $errors->first('mission_description', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="vision_image">Vision Image</label>
                                            <input type="file" name="vision_image" class="form-control mb-2"
                                                id="english_image" accept="image/*" placeholder="image">
                                            @if ($errors->has('vision_image'))
                                                <span class="red-text"><?php echo $errors->first('vision_image', ':message'); ?></span>
                                            @endif
                                        </div>
                                        <img id="english"
                                            src="{{ Config::get('DocumentConstant.VISION_MISSION_VIEW') }}{{ $editData->vision_image }}"
                                            class="img-fluid img-thumbnail" width="150" style="background-color: aliceblue;">
                                        <img id="english_imgPreview" src="#"
                                            alt="Vision Image"
                                            class="img-fluid img-thumbnail" width="150" style="display:none">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="mission_image">Mission Image</label>
                                            <input type="file" name="mission_image" class="form-control mb-2"
                                                id="english_image_new" accept="image/*" placeholder="image">
                                            @if ($errors->has('mission_image'))
                                                <span class="red-text"><?php echo $errors->first('mission_image', ':message'); ?></span>
                                            @endif
                                        </div>
                                        <img id="english1"
                                            src="{{ Config::get('DocumentConstant.VISION_MISSION_VIEW') }}{{ $editData->mission_image }}"
                                            class="img-fluid img-thumbnail" width="150" style="background-color: aliceblue;">
                                        <img id="english_imgPreview1" src="#"
                                            alt="Mission Image"
                                            class="img-fluid img-thumbnail" width="150" style="display:none">
                                    </div>
                                  
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton">
                                            Save &amp; Update
                                        </button>
                                        {{-- <button type="reset" class="btn btn-sm btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-vision-mission') }}"
                                                class="btn btn-sm btn-primary ">Back</a></span>
                                    </div>
                                </div>
                                <input type="hidden" name="id" id="id" class="form-control"
                                    value="{{ $editData->id }}" placeholder="">
                                {{-- <input type="text" name="currentMarathiImage" id="currentMarathiImage"
                                    class="form-control" value="" placeholder=""> --}}
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
                    const description1 = $('#description1 textarea').val();
                    const english_image = $('#english_image').val();  
                    const english_image_new = $('#english_image_new').val();                       
                }
                
                // Custom validation method to check file extension
                $.validator.addMethod("fileExtension", function(value, element, param) {
                    // Get the file extension
                    const extension = value.split('.').pop().toLowerCase();
                    return $.inArray(extension, param) !== -1;
                }, "Invalid file extension.");

                // Custom validation method to check file size
                $.validator.addMethod("fileSize", function(value, element, param) {
                    // Convert bytes to KB
                    const fileSizeKB = element.files[0].size / 1024;
                    return fileSizeKB >= param[0] && fileSizeKB <= param[1];
                }, "File size must be between {0} KB and {1} KB.");

                // Update the accept attribute to validate based on file extension
                $('#english_image').attr('accept', 'image/jpeg, image/png');
                $('#english_image_new').attr('accept', 'image/jpeg, image/png');


                // Call the checkFormValidity function on input change
                $('input, textarea, #english_image', '#english_image_new').on('input change', checkFormValidity);
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
                        description1: {
                            required: true,
                        },
                        english_image: {
                            required: true,
                            fileExtension: ["jpg", "jpeg", "png"],
                            fileSize: [150, 1048], // Min 10KB and Max 2MB (2 * 1024 KB)
                            imageDimensions: [300, 300, 1000, 1000], // Min width x height and Max width x height
                        },
                        english_image_new: {
                            required: true,
                            fileExtension: ["jpg", "jpeg", "png"],
                            fileSize: [150, 1048], // Min 10KB and Max 2MB (2 * 1024 KB)
                            imageDimensions: [300, 300, 1000, 1000], // Min width x height and Max width x height
                        },
                    },
                    messages: {
                        description: {
                            required: "Please Enter the Vision Description",
                        },
                        description1: {
                            required: "Please Enter the Mission Description",
                        },
                        english_image: {
                            required: "Please upload an Image (jpg, jpeg, png).",
                            fileExtension: "Only JPG, JPEG, and PNG images are allowed.",
                            fileSize: "File size must be between 150 KB and 1048 KB.",
                            imageDimensions: "Image dimensions must be between 300x300 and 1000x1000 pixels.",
                        },
                        english_image_new: {
                            required: "Please upload an Image (jpg, jpeg, png).",
                            fileExtension: "Only JPG, JPEG, and PNG images are allowed.",
                            fileSize: "File size must be between 150 KB and 1048 KB.",
                            imageDimensions: "Image dimensions must be between 300x300 and 1000x1000 pixels.",
                        },
                    },
                });
            });
        </script>
      
    @endsection
