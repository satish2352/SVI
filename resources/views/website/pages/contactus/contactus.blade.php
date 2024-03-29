@extends('website.layout.master')

@section('content')
<style>
  .error{
    color: red !important;
    font-size: 14px;
}
  </style>
<!-- ------------------------------------------------------------------------------------>
<!-- Contact Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>
@if (Session::has('status') && Session::get('status') == 'success')
<div class="col-12 grid-margin d-flex align-items-center justify-content-center">
    <div class="alert alert-success" id="success-alert">
        <button type="button" class="closebtn" onclick="dismissAlert('success-alert')">x</button>
        <strong><span id="data_to_show">{{ Session::get('msg') }}</span></strong>
    </div>
</div>
@endif

@if (Session::has('status') && Session::get('status') == 'error')
<div class="col-12 grid-margin d-flex align-items-center justify-content-center">
    <div class="alert alert-danger" id="danger-alert">
        <button type="button" class="closebtn" onclick="dismissAlert('danger-alert')">x</button>
        <strong><span id="data_to_show">{!! session('msg') !!}</span></strong>
    </div>
</div>
@endif

<section class="contactSection d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-12 col-sm-12 col-12 d-flex align-items-center">
        <div class="card border-0 contactPageCard shadow p-lg-4 p-2 px-lg-5" data-aos="zoom-in"
          data-aos-duration="3000">
          <div class="row">
         
            <h2 class="text-start heading media-heading">CONTACT US</h2>
            <form class="forms-sample" action="{{ url('add-contactus') }}" id="regForm" method="POST"
              enctype="multipart/form-data">
              @csrf
              <div class="row py-md-2">
                <div class="col-md-6 pt-md-0 pt-2">
                  <div class="">
                    <label for="full_name"><strong style="color:#323232"> Name </strong></label>
                    <input type="text" placeholder="Your Full Name" name="full_name" value="{{ old('full_name') }}"
                      class="form-control full_nameField">
                    <span id="number-validate" class="red-text"></span>
                    @if ($errors->has('full_name'))
                    <span class="red-text">
                      <?php echo $errors->first('full_name', ':message'); ?>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="">
                    <label for="subject"><strong style="color:#323232"> Company Name </strong></label>
                    <input type="text" placeholder="Enter Company Name" name="subject" value="{{ old('subject') }}"
                      class="form-control">
                    <span id="number-validate" class="red-text"></span>
                    @if ($errors->has('subject'))
                    <span class="red-text">
                      <?php echo $errors->first('subject', ':message'); ?>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6 pt-2">
                  <div class="">
                    <label for="mobile_number"><strong style="color:#323232"> Mobile Number </strong></label>
                    <input type="text" placeholder="Mobile Number" name="mobile_number"
                      value="{{ old('mobile_number') }}" class="form-control" maxlength="10" minlength="10" onkeyup="addvalidateMobileNumber(this.value)">
                    <span id="number-validate" class="red-text"></span>
                    @if ($errors->has('mobile_number'))
                    <span class="red-text">
                      <?php echo $errors->first('mobile_number', ':message'); ?>
                    </span>
                    @endif

                  </div>
                </div>
                <div class="col-md-6 pt-2">
                  <div class="">
                    <label for="email"><strong style="color:#323232"> Email Id</strong></label>
                    <input type="email" placeholder="Email Id" name="email" value="{{ old('email') }}"
                      class="form-control">
                    <span id="number-validate" class="red-text"></span>
                    @if ($errors->has('email'))
                    <span class="red-text">
                      <?php echo $errors->first('email', ':message'); ?>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-12 pt-2">
                  <div class=" text-message-box">
                    <label for="message"><strong style="color:#323232"> Message </strong></label>
                    <textarea name="message" id="message" placeholder="Write a Message"
                      class="form-control ">{{ old('message') }}</textarea>
                    <span id="number-validate" class="red-text"></span>
                    @if ($errors->has('message'))
                    <span class="red-text">
                      <?php echo $errors->first('message', ':message'); ?>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-12 py-3 captcha_set" style="text-align: left;">
                  {!! NoCaptcha::renderJs() !!}
                  {!! NoCaptcha::display() !!}

                  @if ($errors->has('g-recaptcha-response'))
                  <span class="help-block">
                    <span class="red-text">{{ $errors->first('g-recaptcha-response') }}</span>
                  </span>
                  @endif
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" id="submitButton" class="btn formSubmit eduact-btn__curve_button"><span
                      class="eduact-btn__curve"></span>Send Message<i class="icon-arrow"></i></button>
                </div>

              </div>
            </form>
            @if(Session::has('success_message'))
            <script>
              { Session::get('success_message') }}");
            </script>
            @endif
            <div class="result"></div>

          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 d-none d-sm-none d-md-none d-lg-block">
        <div class="card contactInfoCard text-center border-0 p-4 shadow" data-aos="fade-up"
        data-aos-duration="3000">
          <div>
            <img src="{{ asset('website/assets/images/contact/phoneIcon.png')}}" alt="phoneIcon" />
            <h5 class="mb-2 mt-2">Phone no.</h5>
          </div>
          <div class="text-start contactText">
            <p class="p-0 m-0 alignbox ">
              <span><a href="tel:+917709777526" style="font-size: 14px"
                  class="text-decoration-none text-black contactPtext telf">+91 7709777526</a></span>
              <span><a href="tel:+919561834935" style="font-size: 14px"
                  class="text-decoration-none text-black contactPtext telf">+91 9561834935</a></span>
            </p>
            <!-- ========================== -->
            
            <!-- <p class="p-0 m-0 alignbox" style="font-size:14px">
              LANDLINE:
              <span><a href="tel:+912536698006" 
                  class="text-decoration-none text-black contactPtext telf">+91 253 6698006
                </a></span>
            </p>
            <p class="p-0 m-0 alignbox" style="font-size:14px">
              FAX:
              <span><a href="fax:+912532326872" 
                  class="text-decoration-none text-black contactPtext telf">+91 253 2326872</a></span>
            </p> -->
            <p class="p-0 m-0">
              
              <span><a href="mailto:mktdev@svicarbon.com" 
                  class="text-decoration-none text-black contactPtext telf">mktdev@svicarbon.com</a></span>
            </p>
            <p class="p-0 m-0">
              
              <span><a href="mailto:svicpl@gmail.com" 
                  class="text-decoration-none text-black contactPtext telf">svicpl@gmail.com</a></span>
            </p>
            <p class="p-0 m-0">
           
              <span><a href="mailto:purchase@svicarbon.com" style="font-size: 14px"
                  class="text-decoration-none text-black contactPtext telf">purchase@svicarbon.com</a></span>
            </p>
          </div>
        </div>
        <div class="card contactInfoCard text-center border-0 p-4 mt-4 shadow" data-aos="fade-up"
        data-aos-duration="3000">
          <!-- <div>
            <img src="{{ asset('website/assets/images/contact/scan.png')}}" alt="scan" />
            <h5 class="mt-2">Scan</h5>
          </div> -->
          <div class="text-center">
            <img src="{{ asset('website/assets/images/contact/scanner.png')}}" class="w-75" alt="scanner" />
          </div>
          <h5 class="mt-2">Scan to float an enquiry</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10 d-block d-sm-block d-md-block d-lg-none">
        <div class="card contactInfoCard text-center border-0 p-4 shadow" data-aos="fade-up"
        data-aos-duration="3000">
          <div>
            <img src="{{ asset('website/assets/images/contact/phoneIcon.png')}}" alt="phoneIcon" />
            <h5 class="mb-2 mt-2">Phone no.</h5>
          </div>
          <div class="text-start contactText">
            <p class="p-0 m-0">
              <span><a href="tel:+917709777526" style="font-size: 14px"
                  class="text-decoration-none text-black contactPtext">+91 7709777526</a></span>
              <br><span><a href="tel:+919850762935" style="font-size: 14px"
                  class="text-decoration-none text-black contactPtext">+91 9561834935</a></span>
            </p>
            {{-- <p class="p-0 m-0" style="font-size:16px">
              LANDLINE:
              <span><a href="tel:+912536698006" style="font-size: 14px"
                  class="text-decoration-none text-black contactPtext">+91 253 6698006
                </a></span>
            </p>
            <p class="p-0 m-0" style="font-size:16px">
              FAX:
              <span><a href="fax:+912532326872" style="font-size: 14px"
                  class="text-decoration-none text-black contactPtext">+91 253 2326872</a></span>
            </p> --}}

            <p class="p-0 m-0">
              <!-- FAX: -->
              <span><a href="mailto:mktdev@svicarbon.com" style="font-size: 14px"
                  class="text-decoration-none text-black contactPtext">mktdev@svicarbon.com</a></span>
            </p>
            <p class="p-0 m-0">
              <!-- FAX: -->
              <span><a href="mailto:svicpl@gmail.com" style="font-size: 14px"
                  class="text-decoration-none text-black contactPtext">svicpl@gmail.com</a></span>
            </p>
            <p class="p-0 m-0">
              <!-- FAX: -->
              <span><a href="mailto:purchase@svicarbon.com" style="font-size: 14px"
                  class="text-decoration-none text-black contactPtext">purchase@svicarbon.com</a></span>
            </p>
          </div>
        </div>
        <div class="card contactInfoCard text-center border-0 p-4 mt-4 shadow" data-aos="fade-up"
        data-aos-duration="3000">
          <div>
            <!-- <img src="{{ asset('website/assets/images/contact/scan.png')}}" alt="scan" /> -->
            <!-- <h5 class="mt-2">Scan to float an enquiry</h5> -->
          </div>
          <div class="text-center">
            <img src="{{ asset('website/assets/images/contact/scanner.png')}}" class="w-75" alt="scanner" />
          </div>
          <h5 class="mt-2">Scan to float an enquiry</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ------------------------------------------------------------------------------------>
<!-- Contact Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>

<!-- ------------------------------------------------------------------------------------>
<!-- Unit Section Starts Here -->
<!-- ------------------------------------------------------------------------------------>


<!-- ------------------------------------------------------------------------------------>
<!-- Unit Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>


<!-- ------------------------------------------------------------------------------------>
<!-- Contact Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>

<!-- ------------------------------------------------------------------------------------>
<!-- Unit Section Starts Here -->
<!-- ------------------------------------------------------------------------------------>

<section class="bg-white py-md-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 my-2 my-md-0" data-aos="zoom-in-up" data-aos-easing="linear"
        data-aos-duration="1500">
        <div class="card unitCard shadow-lg mx-auto" style="width: 90%">
          <img data-aos="zoom-in" data-aos-duration="3000" src="{{ asset('website/assets/images/contact/unit1.png')}}"
            alt="..." />
          <div class="card-body cardContactUnit text-center">
            <h5 class="card-title text-center" data-aos="fade-right" data-aos-duration="3000">UNIT 1</h5>
            <p class="text-center fw-bold m-0 p-0" data-aos="fade-left" data-aos-duration="3000">PLOT B-224</p>
            <p style="font-weight: 400; font-size: 0.8rem; color:#000;" class="m-0 p-0" data-aos="zoom-out-up"
              data-aos-duration="3000">
              Graphite Processing & Laboratory Set-up Malegaon MIDC Area,
              Taluka - Sinnar, Nashik - 422113 Maharashtra, India.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 my-2 my-md-0" data-aos="zoom-in-up" data-aos-easing="linear"
        data-aos-duration="1500">
        <div class="card unitCard shadow-lg mx-auto" style="width: 90%">
          <img data-aos="zoom-in" data-aos-duration="3000" src="{{ asset('website/assets/images/contact/unit2.png')}}"
            alt="..." />
          <div class="card-body cardContactUnit text-center">
            <h5 class="card-title text-center" data-aos="fade-right" data-aos-duration="3000">UNIT 2</h5>
            <p class="text-center fw-bold m-0 p-0" data-aos="fade-left" data-aos-duration="3000">PLOT B-226</p>
            <p style="font-weight: 400; font-size: 0.8rem; color:#000;" class="m-0 p-0" data-aos="zoom-out-up"
              data-aos-duration="3000">
              Impregnation & Assembly Malegaon MIDC Area, Taluka - Sinnar,
              Nashik - 422113 Maharashtra, India.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 my-2 my-md-0" data-aos="zoom-in-up" data-aos-easing="linear"
        data-aos-duration="1500">
        <div class="card unitCard shadow-lg mx-auto" style="width: 90%">
          <img data-aos="zoom-in" data-aos-duration="3000" src="{{ asset('website/assets/images/contact/unit3.png')}}"
            alt="..." />
          <div class="card-body cardContactUnit text-center">
            <h5 class="card-title text-center" data-aos="fade-right" data-aos-duration="3000">UNIT 3</h5>
            <p class="text-center fw-bold m-0 p-0" data-aos="fade-left" data-aos-duration="3000">PLOT B-257</p>
            <p style="font-weight: 400; font-size: 0.8rem; color:#000;" class="m-0 p-0" data-aos="zoom-out-up"
              data-aos-duration="3000">
              Steel Fabrication Shop & Warehouse Malegaon MIDC Area, Taluka
              - Sinnar, Nashik - 422113 Maharashtra, India.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ------------------------------------------------------------------------------------>
<!-- Unit Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>
<script src="{{ asset('website/assets/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/jquery.validate.min.js') }}"></script>

{{--      
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script> --}}

<script>
  function addvalidateMobileNumber(number) {
      var mobileNumberPattern = /^\d*$/;
      var validationMessage = document.getElementById("validation-message");

      if (mobileNumberPattern.test(number)) {
          validationMessage.textContent = "";
      } else {
          validationMessage.textContent = "Please enter only numbers.";
      }
  }
</script>
<script>
  $(document).ready(function() {

      $("#regForm").validate({
          errorClass: "error",
          rules: {
              full_name: {
                  required: true,
                  spcenotallow: true,
              },
              email: {
                  required: true,
                  email: true,
              },
              mobile_number: {
                  required: true,
                  spcenotallow: true,
              },
              subject: {
                  required: true,
              },
              message: {
                  required: true,
                  spcenotallow: true,
              },
          },
          messages: {
              full_name: {
                  required: "Enter Full Name",
                  spcenotallow: "Enter Some Text",
              },
              email: {
                  required: "Enter Email Id",
                  spcenotallow: "Enter Some Text",
              },
              mobile_number: {
                  required: "Enter Mobile Number",
                  pattern: "Invalid Mobile Number",
                  remote: "This mobile number already exists.",
                  spcenotallow: "Enter Some Text",
              },
              subject: {
                  required: "Enter Company Name",
              },
              message: {
                  required: "Enter Message",
              },
          },
          highlight: function(element, errorClass) {
              $(element).removeClass(errorClass);
          },
          submitHandler: function(form) {
              // Check if reCAPTCHA challenge is completed
              if (grecaptcha.getResponse() === "") {
                  alert("Please complete the reCAPTCHA challenge.");
              } else {
                  // Proceed with form submission
                  form.submit();
              }
          }
      });

      $("input#document_file").hide();

  });

  $.extend($.validator.methods, {
      spcenotallow: function(b, c, d) {
          if (!this.depend(d, c)) return "dependency-mismatch";
          if ("select" === c.nodeName.toLowerCase()) {
              var e = a(c).val();
              return e && e.length > 0
          }
          return this.checkable(c) ? this.getLength(b, c) > 0 : b.trim().length > 0
      }
  });
</script>

<script>
  function dismissAlert(alertId) {
      var alertElement = document.getElementById(alertId);
      if (alertElement) {
          setTimeout(function() {
              alertElement.style.display = "none";
          }, 2000); // 2000 milliseconds = 2 seconds
      }
  }
</script>
@endsection
