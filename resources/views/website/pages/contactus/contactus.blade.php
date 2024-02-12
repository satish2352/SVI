@extends('website.layout.master')

@section('content')
<!-- ------------------------------------------------------------------------------------>
<!-- Contact Section Ends Here -->
<!-- ------------------------------------------------------------------------------------>

<section class="contactSection mb-md-4 d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-7 col-sm-12 col-12 d-flex align-items-center">
        <div class="card contactCard border-0 shadow p-3">
          <div class="row">
            <h4 class="text-center heading">CONTACT US</h4>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your name here" />
              </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12">
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="formGroupExampleInput"
                  placeholder="Enter your email here" />
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Phone</label>
                <input type="number" class="form-control" id="formGroupExampleInput"
                  placeholder="Enter your phone here" />
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Subject</label>
                <input type="text" class="form-control" id="formGroupExampleInput"
                  placeholder="Enter your subject here" />
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-12">
              <div class="mb-3">
                <label for="formGroupExampleInput">Comments</label>
                <textarea class="form-control" aria-label="With textarea" id="formGroupExampleInput"
                  placeholder="Leave a comment here"></textarea>
              </div>
            </div>
            <div class="text-center">
              <button type="button" class="btn formSubmit">Submit</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 d-none d-sm-none d-md-block d-lg-block">
        <div class="card text-center border-0 p-2">
          <div>
            <img src="{{ asset('website/assets/images/contact/phoneIcon.png')}}" alt="phoneIcon" />
            <h5>Phone no.</h5>
          </div>
          <div class="text-start">
            <p class="p-0 m-0">
              <span><a href="tel:+918605770042" style="font-size: 17px" class="text-decoration-none text-dark">+91
                  8605770042</a></span>
              <span><a href="tel:+919850762935" style="font-size: 17px" class="text-decoration-none text-dark">+91
                  9850762935</a></span>
            </p>
            <p class="p-0 m-0">
              LANDLINE:
              <span><a href="tel:+912536698006" style="font-size: 17px" class="text-decoration-none text-dark">+91 253
                  6698006
                </a></span>
            </p>
            <p class="p-0 m-0">
              FAX:
              <span><a href="fax:+912532326872" style="font-size: 17px" class="text-decoration-none text-dark">+91 253
                  2326872</a></span>
            </p>
            <p class="p-0 m-0">
              <!-- FAX: -->
              <span><a href="svicpl@gmail.com" style="font-size: 17px"
                  class="text-decoration-none text-dark">svicpl@gmail.com</a></span>
            </p>
            <p class="p-0 m-0">
              <!-- FAX: -->
              <span><a href="svic12@rediffmail.com" style="font-size: 17px"
                  class="text-decoration-none text-dark">svic12@rediffmail.com</a></span>
            </p>
          </div>
        </div>
        <div class="card text-center border-0 p-2 mt-2">
          <div>
            <img src="{{ asset('website/assets/images/contact/scan.png')}}" alt="scan" />
            <h5>Scan</h5>
          </div>
          <div class="text-center">
            <img src="{{ asset('website/assets/images/contact/scanner.png')}}" class="w-50" alt="scanner" />
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center text-black">
      <div class="col-10 d-block d-md-none d-lg-none">
        <div class="card text-center border-0 p-2 mt-4 mt-md-0">
          <div>
            <img src="{{ asset('website/assets/images/contact/phoneIcon.png')}}" alt="phoneIcon" />
            <h5>Phone no.</h5>
          </div>
          <div class="text-start">
            <p class="p-0 m-0">
              <span><a href="tel:+918605770042" style="font-size: 17px" class="text-decoration-none text-dark">+91
                  8605770042</a></span>
              <span><a href="tel:+919850762935" style="font-size: 17px" class="text-decoration-none text-dark">+91
                  9850762935</a></span>
            </p>
            <p class="p-0 m-0">
              LANDLINE:
              <span><a href="tel:+912536698006" style="font-size: 17px" class="text-decoration-none text-dark">+91 253
                  6698006
                </a></span>
            </p>
            <p class="p-0 m-0">
              FAX:
              <span><a href="fax:+912532326872" style="font-size: 17px" class="text-decoration-none text-dark">+91 253
                  2326872</a></span>
            </p>
            <p class="p-0 m-0">
              <!-- FAX: -->
              <span><a href="svicpl@gmail.com" style="font-size: 17px"
                  class="text-decoration-none text-dark">svicpl@gmail.com</a></span>
            </p>
            <p class="p-0 m-0">
              <!-- FAX: -->
              <span><a href="svic12@rediffmail.com" style="font-size: 17px"
                  class="text-decoration-none text-dark">svic12@rediffmail.com</a></span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-10 d-block d-md-none d-lg-none">
        <div class="card text-center border-0 p-2 mt-4 mt-md-0">
          <div>
            <img src="{{ asset('website/assets/images/contact/scan.png')}}" alt="scan" />
            <h5>Scan</h5>
          </div>
          <div class="text-center">
            <img src="{{ asset('website/assets/images/contact/scanner.png')}}" class="w-50" alt="scanner" />
          </div>
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

<section class="bg-white pt-md-4 pb-md-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 my-2 my-md-0">
        <div class="card unitCard shadow-lg mx-auto" style="width: 90%">
          <img src="{{ asset('website/assets/images/contact/unit1.png')}}" alt="..." />
          <div class="card-body cardContactUnit">
            <h5 class="card-title text-center">UNIT 1</h5>
            <p class="text-center fw-bold m-0 p-0">PLOT B-224</p>
            <p style="font-weight: 400; font-size: 0.8rem" class="m-0 p-0">
              Graphite Processing & Laboratory Set-up Malegaon MIDC Area,
              Taluka - Sinnar, Nashik - 422113 Maharashtra, India.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 my-2 my-md-0">
        <div class="card unitCard shadow-lg mx-auto" style="width: 90%">
          <img src="{{ asset('website/assets/images/contact/unit1.png')}}" alt="..." />
          <div class="card-body cardContactUnit">
            <h5 class="card-title text-center">UNIT 2</h5>
            <p class="text-center fw-bold m-0 p-0">PLOT B-226</p>
            <p style="font-weight: 400; font-size: 0.8rem" class="m-0 p-0">
              Impregnation & Assembly Malegaon MIDC Area, Taluka - Sinnar,
              Nashik - 422113 Maharashtra, India.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12 my-2 my-md-0">
        <div class="card unitCard shadow-lg mx-auto" style="width: 90%">
          <img src="{{ asset('website/assets/images/contact/unit1.png')}}" alt="..." />
          <div class="card-body cardContactUnit">
            <h5 class="card-title text-center">UNIT 3</h5>
            <p class="text-center fw-bold m-0 p-0">PLOT B-257</p>
            <p style="font-weight: 400; font-size: 0.8rem" class="m-0 p-0">
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


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>

<script>
  document).ready(function () {

     egForm").validate({
    "error",
      rules      full_name        quired: true, low: true,
      {
        require
      },
           : {
          re              spcenotal                   ct: {
        r
      },
        me          equired: true,
        w:
    },
    full_name:         ire        ame",
               Enter Some Text"           email: {
                   Em               llow: "Enter             },
    required: "Enter Mo              pattern: "Invalid Mobile Numb        emo         number a                 spcenotallow: "Enter           },
    subject: {
          r        Sub,
        message          ed: "Enter Message",
        },
    ght: function (element, errorClass          t).removeClass(errorClass);
  },
    sub(form) {
    // Check if reC         is           if (grec           === "") {
    alert(th        lenge.");
                 // Proceed with form                  t()            }
    });

  $("input#document_file        ;

  $.extend($.validator.methods, {
    all(b, c, d) {
      if (!this.dep        n "dependency-mismatch";
      if ("select" = LowerCase()) {
        var e = a(c).val && e.length > 0
      }
      return this.checkabl        ength(b, c) > 0 : b.trim().length > 0
    }
  });
</script>
@endsection