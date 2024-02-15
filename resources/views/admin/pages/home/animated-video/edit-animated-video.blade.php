@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                Update Animated Video
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('list-animated-video') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Update Animated Video
                        </li>
                    </ol>
                </nav>
            </div>           
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('update-animated-video') }}" method="post"
                                id="regForm" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    {{-- <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Select Menu</label>&nbsp<span
                                                class="red-text">*</span>
                                            <select class="form-control" id="name" name="name">
                                                <option value="">Select</option>
                                                <option value="Home"
                                                    @if (old('name') == 'Home' || $editData['name'] == 'Home') {{ 'selected' }} @endif>
                                                    Home
                                                </option>
                                                <option value="About"
                                                    @if (old('name') == 'About' || $editData['name'] == 'About') {{ 'selected' }} @endif>
                                                    About Us
                                                </option>
                                                <option value="Product"
                                                    @if (old('name') == 'Product' || $editData['name'] == 'Product') {{ 'selected' }} @endif>
                                                    Product
                                                </option>
                                                <option value="Services"
                                                    @if (old('name') == 'Services' || $editData['name'] == 'Services') {{ 'selected' }} @endif>
                                                    Services
                                                </option>
                                                <option value="Media"
                                                    @if (old('name') == 'Media' || $editData['name'] == 'Media') {{ 'selected' }} @endif>
                                                    Media
                                                </option>
                                                <option value="Contact"
                                                    @if (old('name') == 'Contact' || $editData['name'] == 'Contact') {{ 'selected' }} @endif>
                                                    Contact
                                                </option>
                                                



                                            </select>
                                            @if ($errors->has('name'))
                                                <span class="red-text"><?php echo $errors->first('name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Selected Menu </label>&nbsp<span class="red-text">*</span>
                                            <input class="form-control" name="name" id="name"
                                                placeholder="Enter the name" disabled
                                                value="@if (old('name')) {{ old('name') }}@else{{ $editData->name }} @endif">
                                            <label class="error py-2" for="name" id="name_error"></label>
                                            @if ($errors->has('name'))
                                                <span class="red-text"><?php echo $errors->first('name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="video_upload">video</label>
                                            <input type="file" name="video_upload" class="form-control mb-2"
                                                id="video_upload" accept="video/*" placeholder="video upload">
                                            @if ($errors->has('video_upload'))
                                                <span class="red-text"><?php echo $errors->first('video_upload', ':message'); ?></span>
                                            @endif
                                        </div>
                                        {{-- <img id="english"
                                            src="{{ Config::get('DocumentConstant.ANIMATED_VIDEO_VIEW') }}{{ $editData->video_upload }}"
                                            class="img-fluid img-thumbnail" width="150" style="background-color: aliceblue;"> --}}
                                      
                                            <video width="200" height="160" controls id="videoPreview">
                                                <source src="{{ Config::get('DocumentConstant.ANIMATED_VIDEO_VIEW') }}{{ $editData->video_upload }}" type="video/mp4">
                                            </video>
                                            
                                            {{-- <img id="videoThumbnail" src="#" alt="Video Thumbnail" class="img-fluid img-thumbnail" width="150" style="display:none"> --}}
                                            
                                    </div>


                                    {{-- <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Video Link</label>&nbsp<span class="red-text">*</span>
                                            <input class="form-control mb-2" name="video_link" id="name"
                                                placeholder="Enter the Name"
                                                value="@if (old('video_link')) {{ old('video_link') }}@else{{ $editData->video_link }} @endif">
                                            @if ($errors->has('name'))
                                                <span class="red-text"><?php //echo $errors->first('video_link', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    --}}
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton">Save &amp;
                                            Update</button>
                                        {{-- <button type="reset" class="btn btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-animated-video') }}"
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
            $(document).ready(() => {
                $("#video_upload").change(function() {
                    $('#videoPreview').hide(); // Hide the old video preview
                    $('#videoThumbnail').hide(); // Hide the old video thumbnail
                    
                    const file = this.files[0];
                    if (file) {
                        let reader = new FileReader();
                        reader.onload = function(event) {
                            $("#videoPreview").attr("src", event.target.result);
                            $('#videoPreview').show(); // Show the new video preview
                        };
                        reader.readAsDataURL(file);
                        
                        // Generate and show thumbnail
                        const thumbnailSrc = generateThumbnail(file);
                        $('#videoThumbnail').attr("src", thumbnailSrc);
                        $('#videoThumbnail').show(); // Show the new video thumbnail
                    }
                });
                
                // Function to generate thumbnail from video file
                function generateThumbnail(videoFile) {
                    const video = document.createElement('video');
                    video.setAttribute('src', URL.createObjectURL(videoFile));
                    video.load();
                    
                    const canvas = document.createElement('canvas');
                    canvas.width = 200; // Set width as needed
                    canvas.height = 160; // Set height as needed
                    
                    const ctx = canvas.getContext('2d');
                    ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
                    
                    return canvas.toDataURL('image/png');
                }
            });
        </script>
        
        
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
