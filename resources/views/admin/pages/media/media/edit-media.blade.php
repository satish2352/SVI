@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Media
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('list-media') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Update Media</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('update-media') }}" method="post" id="regForm"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="image"> Image</label>
                                            <input type="file" name="image" class="form-control"
                                                id="image" accept="image/*" placeholder="image">
                                            @if ($errors->has('image'))
                                                <div class="red-text"><?php echo $errors->first('image', ':message'); ?>
                                                </div>
                                            @endif
                                        </div>
                                        <img id="english"
                                            src="{{ Config::get('DocumentConstant.MEDIA_VIEW') }}{{ $editData->image }}"
                                            class="img-fluid img-thumbnail" width="150">
                                        <img id="english_imgPreview" src="#" alt="pic"
                                            class="img-fluid img-thumbnail" width="150" style="display:none">
                                    </div>                                   
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-sm btn-success" id="submitButton">
                                            Save &amp; Update
                                        </button>
                                        {{-- <button type="reset" class="btn btn-sm btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-media') }}"
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
                    const image = $('#image').val();                    
                }
                
                // Custom validation method to check file size
                $.validator.addMethod("fileSize", function(value, element, param) {
                    // Convert bytes to KB
                    const fileSizeKB = element.files[0].size / 1024;
                    return fileSizeKB >= param[0] && fileSizeKB <= param[1];
                }, "File size must be between {0} KB and {1} KB.");

                // Update the accept attribute to validate based on file extension
                $('#image').attr('accept', 'image/jpeg, image/png');

                // Call the checkFormValidity function on input change
                $('input, textarea, #image').on('input change', checkFormValidity);
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
                        image: {
                            required: true,
                            fileExtension: ["jpg", "jpeg", "png"],
                            fileSize: [50, 1048], // Min 10KB and Max 2MB (2 * 1024 KB)
                            imageDimensions: [200, 200, 1000, 1000], // Min width x height and Max width x height
                        },
                    },
                    messages: {
                        image: {
                            required: "Please upload an Image (jpg, jpeg, png).",
                            fileExtension: "Only JPG, JPEG, and PNG images are allowed.",
                            fileSize: "File size must be between 50 KB and 1048 KB.",
                            imageDimensions: "Image dimensions must be between 200x200 and 1000x1000 pixels.",
                        },
                    },
                });
            });
        </script>       
    @endsection
