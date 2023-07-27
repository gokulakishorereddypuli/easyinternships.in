<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Oficiona</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- External Css -->
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css" />
    <link rel="stylesheet" href="/css/et-line.css" />
    <link rel="stylesheet" href="/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/css/plyr.css" />
    <link rel="stylesheet" href="/css/flag.css" />
    <link rel="stylesheet" href="/css/slick.css" />
    <link rel="stylesheet" href="/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/css/jquery.nstSlider.min.css" />
    <link rel="stylesheet" href="/css/html5-simple-date-input-polyfill.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">


    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <![endif]-->

  </head>


  <header class="header-2">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header-top">
              <div class="logo-area">
                <a href="index.blade.php"><img src="images/logo-2.png" alt=""></a>
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
                      <a href="home-2.blade.php" class="notification-list">
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
                        <h5><a href="#">Robert Chavez</a></h5>
                        <span class="mail">chavez@domain.com</span>
                      </div>
                    </div>
                    <ul class="account-item-list">
                      <li><a href="#"><span class="ti-user"></span>Account</a></li>
                      <li><a href="#"><span class="ti-settings"></span>Settings</a></li>
                      <li><a href="#"><span class="ti-power-off"></span>Log Out</a></li>
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
                  <li class="menu-item active"><a title="Home" href="/">Home</a></li>
                  <li class="menu-item dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Jobs</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a  href="job-listing.blade.php">Job Listing</a></li>
                      <li class="menu-item"><a  href="job-listing-with-map.blade.php">Job Listing With Map</a></li>
                      <li class="menu-item"><a  href="job-details.blade.php">Job Details</a></li>
                      <!-- <li class="menu-item"><a  href="post-job.blade.php">Post Job</a></li> -->
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Candidates</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a  href="candidate.blade.php">Candidate Listing</a></li>
                      <li class="menu-item"><a  href="candidate-details.blade.php">Candidate Details</a></li>
                      <li class="menu-item"><a  href="/addresume">Add Resume</a></li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Employers</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a  href="employer-listing.blade.php">Employer Listing</a></li>
                      <li class="menu-item"><a  href="employer-details.blade.php">Employer Details</a></li>
                      <li class="menu-item"><a  href="employer-dashboard-post-job.blade.php">Post a Job</a></li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Dashboard</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item dropdown">
                        <a href="#" data-toggle="dropdown"  class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Candidate Dashboard</a>
                        <ul class="dropdown-menu">
                          <li class="menu-item"><a  href="dashboard.blade.php">Dashboard</a></li>
                          <li class="menu-item"><a  href="dashboard-edit-profile.blade.php">Edit Profile</a></li>
                          <li class="menu-item"><a  href="add-resume.blade.php">Add Resume</a></li>
                          <li class="menu-item"><a  href="resume.blade.php">Resume</a></li>
                          <li class="menu-item"><a  href="edit-resume.blade.php">Edit Resume</a></li>
                          <li class="menu-item"><a  href="dashboard-bookmark.blade.php">Bookmarked</a></li>
                          <li class="menu-item"><a  href="dashboard-applied.blade.php">Applied</a></li>
                          <li class="menu-item"><a  href="dashboard-pricing.blade.php">Pricing</a></li>
                          <li class="menu-item"><a  href="dashboard-message.blade.php">Message</a></li>
                          <li class="menu-item"><a  href="dashboard-alert.blade.php">Alert</a></li>
                        </ul>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#" data-toggle="dropdown"  class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Employer Dashboard</a>
                        <ul class="dropdown-menu">
                          <li class="menu-item"><a href="employer-dashboard.blade.php">Employer Dashboard</a></li>
                          <li class="menu-item"><a href="employer-dashboard-edit-profile.blade.php">Edit Profile</a></li>
                          <li class="menu-item"><a href="employer-dashboard-manage-candidate.blade.php">Manage Candidate</a></li>
                          <li class="menu-item"><a href="employer-dashboard-manage-job.blade.php">Manage Job</a></li>
                          <li class="menu-item"><a href="employer-dashboard-message.blade.php">Dashboard Message</a></li>
                          <li class="menu-item"><a href="employer-dashboard-pricing.blade.php">Dashboard Pricing</a></li>
                          <li class="menu-item"><a href="employer-dashboard-post-job.blade.php">Post Job</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a href="about-us.blade.php">About Us</a></li>
                      <li class="menu-item"><a href="how-it-work.blade.php">How It Works</a></li>
                      <li class="menu-item"><a href="pricing.blade.php">Pricing Plan</a></li>
                      <li class="menu-item"><a href="faq.blade.php">FAQ</a></li>
                      <li class="menu-item dropdown">
                        <a href="#" data-toggle="dropdown"  class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">News &amp; Advices</a>
                        <ul class="dropdown-menu">
                          <li class="menu-item"><a href="blog.blade.php">News</a></li>
                          <li class="menu-item"><a href="blog-grid.blade.php">News Grid</a></li>
                          <li class="menu-item"><a href="blog-details.blade.php">News Details</a></li>
                        </ul>
                      </li>
                      <li class="menu-item"><a href="checkout.blade.php">Checkout</a></li>
                      <li class="menu-item"><a href="payment-complete.blade.php">Payment Complete</a></li>
                      <li class="menu-item"><a href="invoice.blade.php">Invoice</a></li>
                      <li class="menu-item"><a href="terms-and-condition.blade.php">Terms And Condition</a></li>
                      <li class="menu-item"><a href="404.blade.php">404 Page</a></li>
                      <li class="menu-item"><a href="login.blade.php">Login</a></li>
                      <li class="menu-item"><a href="register.blade.php">Register</a></li>
                    </ul>
                  </li>
                  <li class="menu-item"><a href="contact.blade.php">Contact Us</a></li>
                  <li class="menu-item post-job"><a href="post-job.blade.php"><i class="fas fa-plus"></i>Post a Job</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>


  <body>

    <header class="header-2">
      <div class="container">
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
                        <h5><a href="#">Robert Chavez</a></h5>
                        <span class="mail">chavez@domain.com</span>
                      </div>
                    </div>
                    <ul class="account-item-list">
                      <li><a href="#"><span class="ti-user"></span>Account</a></li>
                      <li><a href="#"><span class="ti-settings"></span>Settings</a></li>
                      <li><a href="#"><span class="ti-power-off"></span>Log Out</a></li>
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
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Employers</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a  href="employer-listing.html">Employer Listing</a></li>
                      <li class="menu-item"><a  href="employer-details.html">Employer Details</a></li>
                      <li class="menu-item"><a  href="employer-dashboard-post-job.html">Post a Job</a></li>
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
                      <li class="menu-item dropdown">
                        <a href="#" data-toggle="dropdown"  class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Employer Dashboard</a>
                        <ul class="dropdown-menu">
                          <li class="menu-item"><a href="employer-dashboard.html">Employer Dashboard</a></li>
                          <li class="menu-item"><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>
                          <li class="menu-item"><a href="employer-dashboard-manage-candidate.html">Manage Candidate</a></li>
                          <li class="menu-item"><a href="employer-dashboard-manage-job.html">Manage Job</a></li>
                          <li class="menu-item"><a href="employer-dashboard-message.html">Dashboard Message</a></li>
                          <li class="menu-item"><a href="employer-dashboard-pricing.html">Dashboard Pricing</a></li>
                          <li class="menu-item"><a href="employer-dashboard-post-job.html">Post Job</a></li>
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
                  <li class="menu-item post-job"><a href="post-job.html"><i class="fas fa-plus"></i>Post a Job</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Add Resume</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Resume</li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="col-md-6">
            <div class="breadcrumb-form">
              <form action="#">
                <input type="text" placeholder="Enter Keywords">
                <button><i data-feather="search"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="post-container">
              <div class="post-content-wrapper">
                <form action="#" class="job-post-form">
                  <div class="basic-info-input">
                    <h4><i data-feather="plus-circle"></i>Add Resume</h4>
                    <div id="full-name" class="form-group row">
                      <label class="col-md-3 col-form-label">Full Name</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                    </div>
                    <div id="information" class="row">
                      <label class="col-md-3 col-form-label">Information</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control">
                                <option>Select Category</option>
                                <option>Accounting / Finance</option>
                                <option>Health Care</option>
                                <option>Garments / Textile</option>
                                <option>Telecommunication</option>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Your Location">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control">
                                <option>Job Type</option>
                                <option>Part Time</option>
                                <option>Full Time</option>
                                <option>Temperory</option>
                                <option>Permanent</option>
                                <option>Freelance</option>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control">
                                <option>Experience (Optional)</option>
                                <option>Less than 1 Year</option>
                                <option>2 Year</option>
                                <option>3 Year</option>
                                <option>4 Year</option>
                                <option>Over 5 Year</option>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Salary Range">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control">
                                <option>Qualification</option>
                                <option>Matriculation</option>
                                <option>Intermidiate</option>
                                <option>Gradute</option>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control">
                                <option>Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="date" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group datepicker">
                              <input type="text" class="form-control" placeholder="Your Skill">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="about" class="row">
                      <label class="col-md-3 col-form-label">About You</label>
                      <div class="col-md-9">
                        <textarea class="tinymce-editor-1" placeholder="Description text here"></textarea>
                      </div>
                    </div>
                    <div class="container">
                      <form action="" method="post" class="insert form" id="insert_form">
                        <table class="table table-bordered" id="table_field">
                          <thead>
                            <tr>
                                <th>Qualification</th>
                                <th>Institute Name</th>
                                <th>Completion year</th>
                                <th>Percentage</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td><input type="text" name="Qualification[]" class="form-control"></td>
                                <td><input type="text" name="Institute Name[]" class="form-control"></td>
                                <td><input type="text" name="Completion Year[]" class="form-control"></td>
                                <td><input type="text" name="Percentage[]" class="form-control"></td>
                                <td><button type="button" class=" btn btn-primary add_edu_btn" id="add" value="Add">Add</button></td>
                            </tr>
                          </tbody>
                        </table>
                        <button type="button" class=" btn btn-primary" id="save"><i class="fa fa-save"></i></button>
                      </form>
                    </div>

                    <div id="experience" class="row">
                      <label class="col-md-3 col-form-label">Work Experience</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Designation">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Experience 01</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Period">
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" placeholder="Description (Optional)"></textarea>
                        </div>
                        <a href="#" class="add-new-field">+ Add Experience</a>
                      </div>
                    </div>
                    <div id="skill" class="row">
                      <label class="col-md-3 col-form-label">Professional Skill</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Designation">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">SKILL 01</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Title">
                        </div>
                        <div class="form-group">
                          <input type="number" class="form-control" placeholder="value (Percen)">
                        </div>
                        <a href="#" class="add-new-field">+ Add Experience</a>
                      </div>
                    </div>
                    <div id="qualification" class="row">
                      <label class="col-md-3 col-form-label">Special Qualification</label>
                      <div class="col-md-9">
                        <textarea id="tiny" class="tinymce-editor-2" placeholder="Description text here"></textarea>
                      </div>
                    </div>
                    <div id="portfolio" class="row">
                      <label class="col-md-3 col-form-label">Portfolio</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Title">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">PORTFOLIO 01</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">Image</div>
                            </div>
                            <div class="upload-portfolio-image">
                              <div class="update-photo">
                                <img class="image" src="images/portfolio/thumb-1.jpg" alt="">
                              </div>
                              <div class="file-upload">
                                <input type="file" class="file-input">
                                <i data-feather="plus"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Portfolio Link (Optional)">
                        </div>
                        <a href="#" class="add-new-field">+ Add Portfolio</a>
                      </div>
                    </div>
                    <div id="cv" class="row form-group">
                      <label class="col-md-3 col-form-label">Upload CV</label>
                      <div class="col-md-9">
                        <div class="add-cv">
                          <input type="file">CV File<i data-feather="upload-cloud"></i>
                        </div>
                      </div>
                    </div>
                    <div id="cover" class="row">
                      <label class="col-md-3 col-form-label">Cover Letter</label>
                      <div class="col-md-9">
                        <textarea class="tinymce-editor-1" placeholder="Description text here"></textarea>
                      </div>
                    </div>
                    <div id="profile" class="row">
                      <label class="col-md-3 col-form-label">Social Profile</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text dropdown-label">
                                <select class="form-control">
                                  <option>Select</option>
                                  <option>Facebook</option>
                                  <option>Twitter</option>
                                  <option>Linkedin</option>
                                  <option>Instagram</option>
                                </select><i class="fa fa-caret-down"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Input Profile Link">
                          </div>
                        </div>
                        <a href="#" class="add-new-field">+ Add Social</a>
                      </div>
                    </div>
                    <div id="details" class="row">
                      <label class="col-md-3 col-form-label">Personal Details</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Father's Name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Mother's Name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="date" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Nationality">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control">
                                <option>Sex</option>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Your Address">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-9 offset-md-3">
                        <div class="form-group mt-0 terms">
                          <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
                          <label for="radio-4">
                            <span class="dot"></span> You accepts our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label"></label>
                      <div class="col-md-9">
                        <button class="button">Publish Resume</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="post-sidebar">
                <h5><i data-feather="arrow-down-circle"></i>Navigation</h5>
                <ul class="sidebar-menu">
                  <li><a href="#full-name">Full Name</a></li>
                  <li><a href="#information">Informations</a></li>
                  <li><a href="#about">About You</a></li>
                  <li><a href="#education">Education</a></li>
                  <li><a href="#experience">Work Experiance</a></li>
                  <li><a href="#skill">Professional Skill</a></li>
                  <li><a href="#qualification">Special Qualification</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#cv">Upload CV</a></li>
                  <li><a href="#cover">Cover Letter</a></li>
                  <li><a href="#profile">Social Profile</a></li>
                  <li><a href="#details">Personal Details</a></li>
                </ul>
                <div class="signin-option">
                  <p>Have an Account ? Before submit job you need to sign in !</p>
                  <div class="buttons">
                    <a href="#" class="signin">Sign in</a>
                    <a href="#" class="register">Register</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="call-to-action-bg padding-top-90 padding-bottom-90">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="call-to-action-2">
              <div class="call-to-action-content">
                <h2>For Find Your Dream Job or Candidate</h2>
                <p>Add resume or post a job. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
              </div>
              <div class="call-to-action-button">
                <a href="#" class="button">Add Resume</a>
                <span>Or</span>
                <a href="#" class="button">Post A Job</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Call to Action End -->

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
                  <li><a href="#"><i data-feather="facebook"></i></a></li>
                  <li><a href="#"><i data-feather="twitter"></i></a></li>
                  <li><a href="#"><i data-feather="linkedin"></i></a></li>
                  <li><a href="#"><i data-feather="instagram"></i></a></li>
                  <li><a href="#"><i data-feather="youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-widget-wrapper padding-bottom-60 padding-top-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-sm-6">
              <div class="footer-widget footer-shortcut-link">
                <h4>Information</h4>
                <div class="widget-inner">
                  <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="footer-widget footer-shortcut-link">
                <h4>Job Seekers</h4>
                <div class="widget-inner">
                  <ul>
                    <li><a href="#">Create Account</a></li>
                    <li><a href="#">Career Counseling</a></li>
                    <li><a href="#">My Oficiona</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Video Guides</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="footer-widget footer-shortcut-link">
                <h4>Employers</h4>
                <div class="widget-inner">
                  <ul>
                    <li><a href="#">Create Account</a></li>
                    <li><a href="#">Products/Service</a></li>
                    <li><a href="#">Post a Job</a></li>
                    <li><a href="#">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-sm-6">
              <div class="footer-widget footer-newsletter">
                <h4>Newsletter</h4>
                <p>Get e-mail updates about our latest news and Special offers.</p>
                <form action="#" class="newsletter-form form-inline">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email address...">
                  </div>
                  <button class="btn button primary-bg">Submit<i class="fas fa-caret-right"></i></button>
                  <p class="newsletter-error">0 - Please enter a value</p>
                  <p class="newsletter-success">Thank you for subscribing!</p>
                </form>
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
                    <p class="copyright-text">Copyright <a href="#">Oficiona</a> 2020, All right reserved</p>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/feather.min.js"></script>
    <script src="/js/bootstrap-select.min.js"></script>
    <script src="/js/jquery.nstSlider.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/visible.js"></script>
    <script src="/js/jquery.countTo.js"></script>
    <script src="/js/chart.js"></script>
    <script src="/js/plyr.js"></script>
    <script src="/js/tinymce.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery.ajaxchimp.min.js"></script>
    <script src="/js/html5-simple-date-input-polyfill.min.js"></script>

    <script src="js/custom.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>
    <script>
                      $(document).ready(function(){
                        $(".add").click(function(e){
                          e.defaultPrevent();
                          $("#table_field").append(`<tr>
                                <td><input type="text" name="Qualification[]" class="form-control"></td>
                                <td><input type="text" name="Institute Name[]" class="form-control"></td>
                                <td><input type="text" name="Completion Year[]" class="form-control"></td>
                                <td><input type="text" name="Percentage[]" class="form-control"></td>
                                <td><button type="button" class=" btn btn-danger remove_edu_btn"></button></td>
                            </tr>`);
                        });
                      });
    </script>
  </body>
</html>
