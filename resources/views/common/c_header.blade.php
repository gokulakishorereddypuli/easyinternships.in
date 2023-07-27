
<header class="header-2">
    <div class="container">
        @php
              if(Auth::guard('web')->user()->user_type=='Candidate'){
                $result= Auth::guard('web')->user();
              }
        @endphp
      <div class="row">
        <div class="col">
          <div class="header-top">
            <div class="logo-area">
              <a href="index.html"><img src="images/logo-2.png" alt=""></a>
            </div>
            <div class="header-top-toggler">
              <div class="header-top-toggler-button"></div>
            </div>
            <div class="top-nav">
              <div class="dropdown header-top-notification">
                <a href="#" class="notification-button">Notification</a>
                <div class="notification-card">
                  <div class="notification-head">
                    <span>Notifications</span>
                    <a href="#">Mark all as read</a>
                  </div>
                  <div class="notification-body">
                    <a href="home-2.html" class="notification-list">
                      <i class="fas fa-bolt"></i>
                      <p>Your Resume Updated!</p>
                      <span class="time">5 hours ago</span>
                    </a>
                    <a href="#" class="notification-list">
                      <i class="fas fa-arrow-circle-down"></i>
                      <p>Someone downloaded resume</p>
                      <span class="time">11 hours ago</span>
                    </a>
                    <a href="#" class="notification-list">
                      <i class="fas fa-check-square"></i>
                      <p>You applied for Project Manager <span>@homeland</span></p>
                      <span class="time">11 hours ago</span>
                    </a>
                    <a href="#" class="notification-list">
                      <i class="fas fa-user"></i>
                      <p>You changed password</p>
                      <span class="time">5 hours ago</span>
                    </a>
                    <a href="#" class="notification-list">
                      <i class="fas fa-arrow-circle-down"></i>
                      <p>Someone downloaded resume</p>
                      <span class="time">11 hours ago</span>
                    </a>
                  </div>
                  <div class="notification-footer">
                    <a href="#">See all notification</a>
                  </div>
                </div>
              </div>
              <div class="dropdown header-top-account">
                <a href="#" class="account-button">My Account</a>
                <div class="account-card">
                  <div class="header-top-account-info">
                    <a href="#" class="account-thumb">
                      <img src="images/account/thumb-1.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="account-body">
                      <h5><a href="#">{{ $result->username }}</a></h5>
                      <span class="mail">{{ $result->email }}</span>
                    </div>
                  </div>
                  <ul class="account-item-list">
                    <li><a href="#"><span class="ti-user"></span>Account</a></li>
                    <li><a href="#"><span class="ti-settings"></span>Settings</a></li>
                    <li><a href="log-out"><span class="ti-power-off"></span>Log Out</a></li>
                  </ul>
                </div>
              </div>
              <select class="selectpicker select-language" data-width="fit">
                <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
              </select>
            </div>
          </div>
          <nav class="navbar navbar-expand-lg cp-nav-2">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="menu-item active"><a title="Home" href="home-1.html">Home</a></li>
                <li class="menu-item dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Jobs</a>
                  <ul  class="dropdown-menu">
                    <li class="menu-item"><a  href="job-listing.html">Job Listing</a></li>
                    <li class="menu-item"><a  href="job-listing-with-map.html">Job Listing With Map</a></li>
                    <li class="menu-item"><a  href="job-details.html">Job Details</a></li>
                    <!-- <li class="menu-item"><a  href="post-job.html">Post Job</a></li> -->
                  </ul>
                </li>
                <li class="menu-item dropdown">
                  <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Candidates</a>
                  <ul  class="dropdown-menu">
                    <li class="menu-item"><a  href="candidate.html">Candidate Listing</a></li>
                    <li class="menu-item"><a  href="candidate-details.html">Candidate Details</a></li>
                    <li class="menu-item"><a  href="add-resume.html">Add Resume</a></li>
                  </ul>
                </li>

                <li class="menu-item dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Dashboard</a>
                  <ul  class="dropdown-menu">
                    <li class="menu-item dropdown">
                      <a href="#" data-toggle="dropdown"  class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Candidate Dashboard</a>
                      <ul class="dropdown-menu">
                        <li class="menu-item"><a  href="dashboard.html">Dashboard</a></li>
                        <li class="menu-item"><a  href="dashboard-edit-profile.html">Edit Profile</a></li>
                        <li class="menu-item"><a  href="add-resume.html">Add Resume</a></li>
                        <li class="menu-item"><a  href="resume.html">Resume</a></li>
                        <li class="menu-item"><a  href="edit-resume.html">Edit Resume</a></li>
                        <li class="menu-item"><a  href="dashboard-bookmark.html">Bookmarked</a></li>
                        <li class="menu-item"><a  href="dashboard-applied.html">Applied</a></li>
                        <li class="menu-item"><a  href="dashboard-pricing.html">Pricing</a></li>
                        <li class="menu-item"><a  href="dashboard-message.html">Message</a></li>
                        <li class="menu-item"><a  href="dashboard-alert.html">Alert</a></li>
                      </ul>
                    </li>

                  </ul>
                </li>
                <li class="menu-item dropdown">
                  <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Pages</a>
                  <ul  class="dropdown-menu">
                    <li class="menu-item"><a href="about-us.html">About Us</a></li>
                    <li class="menu-item"><a href="how-it-work.html">How It Works</a></li>
                    <li class="menu-item"><a href="pricing.html">Pricing Plan</a></li>
                    <li class="menu-item"><a href="faq.html">FAQ</a></li>
                    <li class="menu-item dropdown">
                      <a href="#" data-toggle="dropdown"  class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">News &amp; Advices</a>
                      <ul class="dropdown-menu">
                        <li class="menu-item"><a href="blog.html">News</a></li>
                        <li class="menu-item"><a href="blog-grid.html">News Grid</a></li>
                        <li class="menu-item"><a href="blog-details.html">News Details</a></li>
                      </ul>
                    </li>
                    <li class="menu-item"><a href="checkout.html">Checkout</a></li>
                    <li class="menu-item"><a href="payment-complete.html">Payment Complete</a></li>
                    <li class="menu-item"><a href="invoice.html">Invoice</a></li>
                    <li class="menu-item"><a href="terms-and-condition.html">Terms And Condition</a></li>
                    <li class="menu-item"><a href="404.html">404 Page</a></li>
                    <li class="menu-item"><a href="login.html">Login</a></li>
                    <li class="menu-item"><a href="register.html">Register</a></li>
                  </ul>
                </li>
                <li class="menu-item"><a href="contact.html">Contact Us</a></li>
                <li class="menu-item post-job"><a href=""><i class="fas fa-plus"></i>{{ trans('messages.user.applyjob') }}</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>

  </header>
