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
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="form-group">
                                            <label for="name">Video Link</label>&nbsp<span class="red-text">*</span>
                                            <input class="form-control mb-2" name="video_link" id="name"
                                                placeholder="Enter the Name"
                                                value="@if (old('video_link')) {{ old('video_link') }}@else{{ $editData->video_link }} @endif">
                                            @if ($errors->has('name'))
                                                <span class="red-text"><?php echo $errors->first('video_link', ':message'); ?></span>
                                            @endif
                                        </div>
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
