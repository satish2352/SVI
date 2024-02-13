@extends('admin.layout.master')

@section('content')

<head>
</head>
<div class="main-panel">
    <div class="content-wrapper mt-6">
        <div class="page-header">
            <h3 class="page-title">Our Product
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('list-our-products-details') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Our Product </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
        <form class="forms-sample" action="{{ route('add-our-products-details') }}" method="POST" enctype="multipart/form-data"
            id="regForm">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="Service">Service:</label> &nbsp<span class="red-text">*</span>
                        <select  class="form-control mb-2" name="product_id" id="service_id">
                        <option value="" default>Select Product</option>
                            @foreach($data as $service)
                            <option value="{{ $service->id }}">{{ $service->product_name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('title'))
                        <span class="red-text">
                            <?php echo $errors->first('title', ':message'); ?>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="title">Title</label>&nbsp<span class="red-text">*</span>
                        <input class="form-control mb-2" name="title" id="title" placeholder="Enter the Title"
                            name="title" value="{{ old('title') }}">
                        @if ($errors->has('title'))
                        <span class="red-text">
                            <?php echo $errors->first('title', ':message'); ?>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="image">Image </label>&nbsp<span class="red-text">*</span><br>
                        <input type="file" name="image" id="image" accept="image/*" value="{{ old('image') }}"
                            class="form-control mb-2">
                        @if ($errors->has('image'))
                        <span class="red-text">
                            <?php echo $errors->first('image', ':message'); ?>
                        </span>
                        @endif
                    </div>
                </div>
                  {{-- ================= --}}

              


                {{-- ================== --}}
                <div class="col-md-12 col-sm-12 text-center">
                    <button type="submit" class="btn btn-sm btn-success" id="submit">
                        Save &amp; Submit
                    </button>
                    {{-- <button type="reset" class="btn btn-sm btn-danger">Cancel</button> --}}
                    <span><a href="{{ route('add-our-products-details') }}" class="btn btn-sm btn-primary ">Back</a></span>
                </div>
            </div>
        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script>
    $(document).ready(function () {
        // Function to check if all input fields are filled with valid data
        function checkFormValidity() {
            const title = $('#title').val();
            const description = $('#description textarea').val();
            const image = $('#image').val();
        }

        // Custom validation method to check file extension
        $.validator.addMethod("fileExtension", function (value, element, param) {
            // Get the file extension
            const extension = value.split('.').pop().toLowerCase();
            return $.inArray(extension, param) !== -1;
        }, "Invalid file extension.");

        // Custom validation method to check file size
         $.validator.addMethod("fileSize", function(value, element, param) {
    // Convert bytes to KB
    const fileSizeKB = element.files[0].size / 1024;
    return fileSizeKB <= param;
}, "File size must be less than or equal to {0} KB.");
        // Update the accept attribute to validate based on file extension
        $('#image').attr('accept', 'image/jpeg, image/png');

        // Call the checkFormValidity function on input change
        $('input, textarea, #image').on('input change', checkFormValidity);
        $.validator.addMethod("spcenotallow", function (value, element) {
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
                title: {
                    required: true,
                    spcenotallow: true,
                },
                image: {
                    required: true,
                    fileExtension: ["jpg", "jpeg", "png"],
                      fileSize: 102400, 
                    imageDimensions: [50, 50, 800, 800],
                },
            },
            messages: {
                title: {
                    required: "Please enter the Title.",
                    spcenotallow: "Enter Some Title",
                },
                image: {
                    required: "Please upload an Image (jpg, jpeg, png).",
                    fileExtension: "Only JPG, JPEG, and PNG images are allowed.",
                    fileSize: "File size must be between 10 KB and 10mb.",
                    imageDimensions: "Image dimensions must be between 100x100 and 800x800 pixels.",
                },
            },
        });
    });
</script>
<script>
    // Add an event listener to each dropdown item
    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', function () {
            // Set the selected Service's ID to the hidden input field
            document.getElementById('selectedServiceId').value = this.getAttribute('data-value');

            // Update the dropdown button text with the selected Service's name
            document.getElementById('dropdownMenuButton').innerText = this.innerText;
        });
    });
</script>


{{-- <script>
    $(document).ready(function(){
   
   var i = 1;
     var length;
     //var addamount = 0;
    var addamount = 700;
 
   $("#add").click(function(){
     
     
      
      addamount += 700;
      console.log('amount: ' + addamount);
    i++;
       $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list"/></td><td><input type="text" name="email[]" placeholder="Enter your Email" class="form-control name_email"/></td>	<td><input type="text" name="amount[]" value="700" placeholder="Enter your Money" class="form-control total_amount"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
     });
 
   $(document).on('click', '.btn_remove', function(){  
     addamount -= 700;
     console.log('amount: ' + addamount);
     
    
       var button_id = $(this).attr("id");     
       $('#row'+button_id+'').remove();  
     });
     
 
 
     $("#submit").on('click',function(event){
     var formdata = $("#add_name").serialize();
       console.log(formdata);
       
       event.preventDefault()
       
       $.ajax({
         url   :"action.php",
         type  :"POST",
         data  :formdata,
         cache :false,
         success:function(result){
           alert(result);
           $("#add_name")[0].reset();
         }
       });
       
     });
   });
    </script> --}}

@endsection