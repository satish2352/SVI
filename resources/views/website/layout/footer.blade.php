<!-- ------------------------------------------------------------------------------------>
    <!-- Footer Section starts Here -->
    <!-- ------------------------------------------------------------------------------------>

    <section
      class="d-flex justify-content-center align-items-center justify-content-lg-between footerLine"
    ></section>
    <section>
      <footer class="sviFooter text-center text-md-start py-3 py-md-5">
        <div class="container">
          <div class="row text-white justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="footerBack text-center mx-auto mx-md-1 ">
                <img
                  src="{{ asset('website/assets/images/logo1.png')}}"
                  class="mt-3 mx-auto"
                  style="width: 40%"
                  alt="logo"
                /><br />
                {{-- <img
                  src="{{ asset('website/assets/images/footerLogo.png')}}"
                  class="my-2 mx-auto w-75"
                  alt="logo"
                /> --}}
                <h6 class="pt-2">GET IN TOUCH</h6>
                <p class="p-0 m-0">
                  <span
                    ><a
                      href="tel:+917709777526"
                      style="font-size: 14px"
                      class="text-decoration-none text-white"
                      >+91 7709777526</a
                    ></span
                  >
                <div>
                <span
                    ><a
                      href="tel:+919561834935"
                      style="font-size: 14px"
                      class="text-decoration-none text-white"
                      >+91 9561834935</a
                    ></span
                  >
</div>
                </p>
                <!-- <p class="p-0 m-0" style="font-size:14px;">
                  LANDLINE:
                  <span
                    ><a
                      href="tel:+912536698006"
                      style="font-size: 14px"
                      class="text-decoration-none text-white"
                      >+91 253 6698006
                    </a></span
                  >
                </p>
                <p class="p-0 m-0" style="font-size:14px;">
                  FAX:
                  <span
                    ><a
                      href="fax:+912532326872"
                      style="font-size: 14px"
                      class="text-decoration-none text-white"
                      >+91 253 2326872</a
                    ></span
                  >
                </p> -->
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 mt-4 quickLinksFooter">
              <h6 class="mb-3 mt-2">QUICK LINKS</h6>
              <p>
                <a class="text-decoration-none" href="{{ route('aboutus') }}"
                  >About</a
                >
              </p>
              <p>
                <a class="text-decoration-none" href="{{ route('product') }}"
                  >Product</a
                >
              </p>
              <p>
                <a class="text-decoration-none" href="{{ route('services') }}"
                  >Services</a
                >
              </p>
              <p>
                <a class="text-decoration-none" href="{{ route('contactus') }}"
                  >Contact us</a
                >
              </p>
              <p>
                <a class="text-decoration-none" href="{{ route('media') }}"
                  >Media</a
                >
              </p>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-4 contactUsFooter">
              <h6 class="mb-3 mt-2">CONTACT US</h6>
              <p>
                Shri Venkatesh Bungalow, behind Vandana Park, Indira Nagar, Nashik-422009, Maharashtra, India.
              </p>
              <p>
                B-224, B-226, B-257, MIDC Malegaon, Taluka- Sinnar, District- Nashik, Maharashtra-422113, India.
              </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mt-4 socialIconsFooter">
              <h6 class="mb-3 mt-2">FOLLOW US <a href="https://www.linkedin.com/company/svi-carbon-pvt-ltd/" target="_blank"> <img
                src="{{ asset('website/assets/images/linkedin.png')}}"
              class="linkedin"
                alt="logo"
              /></a></h6>
              <p>
                <a class="text-decoration-none d-flex footericonposition" href="mailto:mktdev@svicarbon.com"
                  ><img
                  src="{{ asset('website/assets/images/footeremail.png')}}"
                  class="footericonsize"
                  alt="logo"
                /> <span class="footericon">mktdev@svicarbon.com</span></a
                >
              </p>
              <p>
                <a class="text-decoration-none d-flex footericonposition" href="mailto:svicpl@gmail.com"
                  ><img
                  src="{{ asset('website/assets/images/footeremail.png')}}"
                  class="footericonsize"
                  alt="logo"
                /> <span class="footericon">svicpl@gmail.com</span></a
                >
              </p>
              <p>
                <a class="text-decoration-none d-flex footericonposition" href="mailto:purchase@svicarbon.com"
                  ><img
                  src="{{ asset('website/assets/images/footeremail.png')}}"
                  class="footericonsize"
                  alt="logo" 
                /> <span class="footericon">purchase@svicarbon.com</span></a
                >
              </p>
             
              

              {{-- <a href=""
                ><i
                  class="fa fa-facebook footerSocialIcons mx-1"
                  aria-hidden="true"
                ></i
              ></a> --}}
              {{-- <a href=""
                ><i
                  class="fa fa-instagram footerSocialIcons mx-1"
                  aria-hidden="true"
                ></i
              ></a> --}}
              {{-- <a href=""
                ><i
                  class="fa fa-envelope-o footerSocialIcons mx-1"
                  aria-hidden="true"
                ></i
              ></a> --}}
            </div>
          </div>
        </div>
      </footer>
      <a href="https://wa.me/7709777526"
      style="position: fixed; bottom: 70px; right: 24px;"
      target="_blank"
      className="btn-whatsapp-pulse">
      <img src="https://i.ibb.co/VgSspjY/whatsapp-button.png" alt="whatsapp">
      {{-- <i className="fa fa-whatsapp"></i> --}}
      </a>  

      <section class="copyright text-center">
        <div class="container wow fadeInUp" data-wow-delay="400ms">
            <p class="copyright__text">Copyright @{{ date('Y') }} <span class="dynamic-year"></span><!-- /.dynamic-year --> 
                | SVICPL Designed by 
                <a href="https://www.sumagoinfotech.com" target="_blank" class="footer-copyright">
                 Sumago with 
                    <img src="{{ asset('website/assets/images/red-heart.png')}}" className="img-fluid" style="width:33px " alt="" />
                  </a>From Nashik 
                  {{-- <a to="https://sumagoinfotech.com/" class="cursor" target="_blank">
                <img src="{{ asset('website/assets/images/logo_sm.png')}}" className="img-fluid " alt="" style="width:18px" >
              </a> --}}
            </p>
           
        </div><!-- /.container -->
    </section><!-- /.copyright -->
    </section>

    <!-- ------------------------------------------------------------------------------------>
    <!-- Footer Section Ends Here -->
    <!-- ------------------------------------------------------------------------------------>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
