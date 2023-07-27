<!-- Footer -->
    <footer class="footer-bg">
      <div class="footer-top border-bottom section-padding-top padding-bottom-40">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="footer-logo">
                <a href="#">
                  <img src="images/footer-logo.png" class="img-fluid" alt="">
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="footer-social">
                <ul class="social-icons">
                  <li><a href="{{url('')}}"><i data-feather="facebook"></i></a></li>
                  <li><a href="{{url('')}}"><i data-feather="twitter"></i></a></li>
                  <li><a href="{{url('')}}"><i data-feather="linkedin"></i></a></li>
                  <li><a href="{{url('')}}"><i data-feather="instagram"></i></a></li>
                  <li><a href="{{url('')}}"><i data-feather="youtube"></i></a></li>
                </ul>
                <select class="selectpicker select-language" id="select-country">
                  <option value="United States of America" selected>EN</option>
                  <option value="United Kingdom">GB</option>
                  <option value="Spain">ES</option>
                  <option value="Portugal">PT</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-widget-wrapper padding-bottom-60 padding-top-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <div class="footer-widget widget-about">
                <h4>About Us</h4>
                <div class="widget-inner">
                  <p class="description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                  <span class="about-contact"><i data-feather="phone-forwarded"></i>+8 246-345-0698</span>
                  <span class="about-contact"><i data-feather="mail"></i>{{ trans('messages.home.supportmail' )}}</span>
                </div>
              </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-sm-6">
              <div class="footer-widget footer-shortcut-link">
                <h4>Information</h4>
                <div class="widget-inner">
                  <ul>
                    <li><a href="{{url('about-us')}}">About Us</a></li>
                    <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                    <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                    <li><a href="{{url('terms-&-conditions')}}">Terms &amp; Conditions</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="footer-widget footer-shortcut-link">
                <h4>Job Seekers</h4>
                <div class="widget-inner">
                  <ul>
                    <li><a href="{{url('Create-Account')}}">Create Account</a></li>
                    <li><a href="{{url('Career-Counseling')}}">Career Counseling</a></li>
                    <li><a href="{{url('My-Oficiona')}}">My Oficiona</a></li>
                    <li><a href="{{url('FAQ')}}">FAQ</a></li>
                    <li><a href="{{url('Video-Guides')}}">Video Guides</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="footer-widget footer-shortcut-link">
                <h4>Employers</h4>
                <div class="widget-inner">
                  <ul>
                    <li><a href="{{url('Create-Account')}}">Create Account</a></li>
                    <li><a href="{{url('Products')}}">Products/Service</a></li>
                    <li><a href="{{url('Post a Job')}}">Post a Job</a></li>
                    <li><a href="{{url('FAQ')}}">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom-area">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="footer-bottom border-top">
                <div class="row">
                  <div class="col-xl-4 col-lg-5 order-lg-2">
                    <div class="footer-app-download">
                      <a href="#" class="apple-app">Apple Store</a>
                      <a href="#" class="android-app">Google Play</a>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 order-lg-1">
                    <p class="copyright-text"> <a href="#">{{ trans('messages.home.copyright' )}}</a></p>
                  </div>
                  <div class="col-xl-4 col-lg-3 order-lg-3">
                    <div class="back-to-top">
                      <a href="#">Back to top<i class="fas fa-angle-up"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->
