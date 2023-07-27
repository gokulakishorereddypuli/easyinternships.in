@extends('home_templet')

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<title>{{ trans('messages.home.title') }}</title>
@section('main')
<!-- Banner -->
<div class="banner banner-1 banner-1-bg">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="banner-content">
          <h1>58,246 Job Listed</h1>
          <p>Create free account to find thousands Jobs, Employment & Career Opportunities around you!</p>
          <a href="add-resume.html" class="button">Upload Resume</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner End -->

<!-- Search and Filter -->
<div class="searchAndFilter-wrapper">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="searchAndFilter-block">
          <div class="searchAndFilter">
            <form action="#" class="search-form">
              <input type="text" placeholder="Enter Keywords">
              <select class="selectpicker" id="search-location">
                <option value="" selected>Location</option>
                <option value="california">California</option>
                <option value="las-vegas">Las Vegas</option>
                <option value="new-work">New Work</option>
                <option value="carolina">Carolina</option>
                <option value="chicago">Chicago</option>
                <option value="silicon-vally">Silicon Vally</option>
                <option value="washington">Washington DC</option>
                <option value="neveda">Neveda</option>
              </select>
              <select class="selectpicker" id="search-category">
                <option value="" selected>Category</option>
                <option value="real-state">Real State</option>
                <option value="vehicales">Vehicales</option>
                <option value="electronics">Electronics</option>
                <option value="beauty">Beauty</option>
                <option value="furnitures">Furnitures</option>
              </select>
              <button class="button primary-bg"><i class="fas fa-search"></i>Search Job</button>
            </form>
            <div class="filter-categories">
              <h4>Job Category</h4>
              <ul>
                <li><a href="job-listing.html"><i data-feather="bar-chart-2"></i>Accounting / Finance <span>(233)</span></a></li>
                <li><a href="job-listing.html"><i data-feather="edit-3"></i>Education <span>(46)</span></a></li>
                <li><a href="job-listing.html"><i data-feather="feather"></i>Design & Creative <span>(156)</span></a></li>
                <li><a href="job-listing.html"><i data-feather="briefcase"></i>Health Care <span>(98)</span></a></li>
                <li><a href="job-listing.html"><i data-feather="package"></i>Engineer & Architects <span>(188)</span></a></li>
                <li><a href="job-listing.html"><i data-feather="pie-chart"></i>Marketing & Sales <span>(124)</span></a></li>
                <li><a href="job-listing.html"><i data-feather="command"></i>Garments / Textile <span>(584)</span></a></li>
                <li><a href="job-listing.html"><i data-feather="globe"></i>Customer Support <span>(233)</span></a></li>
                <li><a href="job-listing.html"><i data-feather="headphones"></i>Digital Media <span>(15)</span></a></li>
                <li><a href="job-listing.html"><i data-feather="radio"></i>Telecommunication <span>(03)</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Search and Filter End -->

<!-- Jobs -->
<div class="section-padding-bottom alice-bg">
  <div class="container">
    <div class="row">
      <div class="col">
        <ul class="nav nav-tabs job-tab" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="true">Recent Job</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="feature-tab" data-toggle="tab" href="#feature" role="tab" aria-controls="feature" aria-selected="false">Feature Job</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-8.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Restaurant Team Member - Crew </a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Geologitic</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                        <span class="job-type temporary"><a href="#"><i data-feather="clock"></i>Temporary</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-9.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Nutrition Advisor</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                        <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-10.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">UI Designer</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                        <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-3.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Land Development Marketer</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Realouse</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Washington, D.C.</a></span>
                        <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>Freelance</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-10.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">UI Designer</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                        <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-3.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Land Development Marketer</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Realouse</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Washington, D.C.</a></span>
                        <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>Freelance</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-1.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Designer Required</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                        <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-2.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Project Manager</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                        <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-8.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Restaurant Team Member - Crew </a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Geologitic</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                        <span class="job-type temporary"><a href="#"><i data-feather="clock"></i>Temporary</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-9.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Nutrition Advisor</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                        <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-1.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Designer Required</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                        <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-2.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Project Manager</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                        <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="feature" role="tabpanel" aria-labelledby="feature-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-10.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-listing.html">UI Designer</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                        <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-1.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-listing.html">Designer Required</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                        <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-2.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-listing.html">Project Manager</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                        <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-1.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-listing.html">Designer Required</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                        <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-8.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-listing.html">Restaurant Team Member - Crew </a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Geologitic</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                        <span class="job-type temporary"><a href="#"><i data-feather="clock"></i>Temporary</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-9.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-listing.html">Nutrition Advisor</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                        <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-3.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Land Development Marketer</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Realouse</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Washington, D.C.</a></span>
                        <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>Freelance</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-2.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Project Manager</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                        <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-8.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Restaurant Team Member - Crew </a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Geologitic</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                        <span class="job-type temporary"><a href="#"><i data-feather="clock"></i>Temporary</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-9.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Nutrition Advisor</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Theoreo</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New York City</a></span>
                        <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-10.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">UI Designer</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Degoin</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>San Francisco</a></span>
                        <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>Part Time</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
                <div class="job-list half-grid">
                  <div class="thumb">
                    <a href="#">
                      <img src="images/job/company-logo-3.png" class="img-fluid" alt="">
                    </a>
                  </div>
                  <div class="body">
                    <div class="content">
                      <h4><a href="job-details.html">Land Development Marketer</a></h4>
                      <div class="info">
                        <span class="company"><a href="#"><i data-feather="briefcase"></i>Realouse</a></span>
                        <span class="office-location"><a href="#"><i data-feather="map-pin"></i>Washington, D.C.</a></span>
                        <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>Freelance</a></span>
                      </div>
                    </div>
                    <div class="more">
                      <div class="buttons">
                        <a href="#" class="button">Apply Now</a>
                        <a href="#" class="favourite"><i data-feather="heart"></i></a>
                      </div>
                      <p class="deadline">Deadline: Oct 31, 2018</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Jobs End -->

<!-- Top Companies -->
<div class="section-padding-top padding-bottom-90">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section-header">
          <h2>Top Companies</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="company-carousel owl-carousel">
          <div class="company-wrap">
            <div class="thumb">
              <a href="#">
                <img src="images/company/company-logo-1.png" class="img-fluid" alt="">
              </a>
            </div>
            <div class="body">
              <h4><a href="employer-details.html">Digoin</a></h4>
              <span>Kansas City, Missouri</span>
              <a href="job-listing.html" class="button">4 Open Positions</a>
            </div>
          </div>
          <div class="company-wrap">
            <div class="thumb">
              <a href="#">
                <img src="images/company/company-logo-2.png" class="img-fluid" alt="">
              </a>
            </div>
            <div class="body">
              <h4><a href="employer-details.html">Orion Ltd.</a></h4>
              <span>Sacramento, California</span>
              <a href="job-listing.html" class="button">2 Open Positions</a>
            </div>
          </div>
          <div class="company-wrap">
            <div class="thumb">
              <a href="#">
                <img src="images/company/company-logo-3.png" class="img-fluid" alt="">
              </a>
            </div>
            <div class="body">
              <h4><a href="employer-details.html">Realhouse</a></h4>
              <span>London, United Kingdom</span>
              <a href="job-listing.html" class="button">4 Open Positions</a>
            </div>
          </div>
          <div class="company-wrap">
            <div class="thumb">
              <a href="#">
                <img src="images/company/company-logo-4.png" class="img-fluid" alt="">
              </a>
            </div>
            <div class="body">
              <h4><a href="employer-details.html">BioPro</a></h4>
              <span>Ajax, Ontarioland</span>
              <a href="job-listing.html" class="button">1 Open Positions</a>
            </div>
          </div>
          <div class="company-wrap">
            <div class="thumb">
              <a href="#">
                <img src="images/company/company-logo-1.png" class="img-fluid" alt="">
              </a>
            </div>
            <div class="body">
              <h4><a href="employer-details.html">Digoin</a></h4>
              <span>Kansas City, Missouri</span>
              <a href="job-listing.html" class="button">4 Open Positions</a>
            </div>
          </div>
          <div class="company-wrap">
            <div class="thumb">
              <a href="#">
                <img src="images/company/company-logo-2.png" class="img-fluid" alt="">
              </a>
            </div>
            <div class="body">
              <h4><a href="employer-details.html">Orion Ltd.</a></h4>
              <span>Sacramento, California</span>
              <a href="job-listing.html" class="button">2 Open Positions</a>
            </div>
          </div>
          <div class="company-wrap">
            <div class="thumb">
              <a href="#">
                <img src="images/company/company-logo-3.png" class="img-fluid" alt="">
              </a>
            </div>
            <div class="body">
              <h4><a href="employer-details.html">Realhouse</a></h4>
              <span>London, United Kingdom</span>
              <a href="job-listing.html" class="button">4 Open Positions</a>
            </div>
          </div>
          <div class="company-wrap">
            <div class="thumb">
              <a href="#">
                <img src="images/company/company-logo-4.png" class="img-fluid" alt="">
              </a>
            </div>
            <div class="body">
              <h4><a href="employer-details.html">BioPro</a></h4>
              <span>Ajax, Ontarioland</span>
              <a href="job-listing.html" class="button">1 Open Positions</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Top Companies End -->

<!-- Fun Facts -->
<div class="padding-top-90 padding-bottom-60 fact-bg">
  <div class="container">
    <div class="row fact-items">
      <div class="col-md-3 col-sm-6">
        <div class="fact">
          <div class="fact-icon">
            <i data-feather="briefcase"></i>
          </div>
          <p class="fact-number"><span class="count" data-form="0" data-to="12376"></span></p>
          <p class="fact-name">Live Jobs</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="fact">
          <div class="fact-icon">
            <i data-feather="users"></i>
          </div>
          <p class="fact-number"><span class="count" data-form="0" data-to="89562"></span></p>
          <p class="fact-name">Candidate</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="fact">
          <div class="fact-icon">
            <i data-feather="file-text"></i>
          </div>
          <p class="fact-number"><span class="count" data-form="0" data-to="28166"></span></p>
          <p class="fact-name">Resume</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="fact">
          <div class="fact-icon">
            <i data-feather="award"></i>
          </div>
          <p class="fact-number"><span class="count" data-form="0" data-to="1366"></span></p>
          <p class="fact-name">Companies</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fun Facts End -->



<!-- Testimonial -->
<div class="section-padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="testimonial">
          <div class="testimonial-quote">
            <img src="images/testimonial/quote.png" class="img-fluid" alt="">
          </div>
          <div class="testimonial-for">
            <div class="testimonial-item">
              <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob One”</p>
              <h5>Maria Marlin @ Google</h5>
            </div>
            <div class="testimonial-item">
              <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Two”</p>
              <h5>Laura Harper @ Amazon</h5>
            </div>
            <div class="testimonial-item">
              <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Three”</p>
              <h5>John Doe @ Envato</h5>
            </div>
            <div class="testimonial-item">
              <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Four”</p>
              <h5>Jenny Doe @ Dribbble</h5>
            </div>
            <div class="testimonial-item">
              <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Five”</p>
              <h5>Michle Clark @ Apple</h5>
            </div>
            <div class="testimonial-item">
              <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Two”</p>
              <h5>Laura Harper @ Amazon</h5>
            </div>
            <div class="testimonial-item">
              <p>“On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charmsto send our denim shorts wardrob Three”</p>
              <h5>John Doe @ Envato</h5>
            </div>
          </div>
          <div class="testimonial-nav">
            <div class="commenter-thumb">
              <img src="images/testimonial/thumb-1.jpg" class="img-fluid commenter" alt="">
              <img src="images/testimonial/1.png" class="comapnyLogo" alt="">
            </div>
            <div class="commenter-thumb">
              <img src="images/testimonial/thumb-2.jpg" class="img-fluid commenter" alt="">
              <img src="images/testimonial/2.png" class="comapnyLogo" alt="">
            </div>
            <div class="commenter-thumb">
              <img src="images/testimonial/thumb-3.jpg" class="img-fluid commenter" alt="">
              <img src="images/testimonial/3.png" class="comapnyLogo" alt="">
            </div>
            <div class="commenter-thumb">
              <img src="images/testimonial/thumb-4.jpg" class="img-fluid commenter" alt="">
              <img src="images/testimonial/4.png" class="comapnyLogo" alt="">
            </div>
            <div class="commenter-thumb">
              <img src="images/testimonial/thumb-5.jpg" class="img-fluid commenter" alt="">
              <img src="images/testimonial/5.png" class="comapnyLogo" alt="">
            </div>
            <div class="commenter-thumb">
              <img src="images/testimonial/thumb-2.jpg" class="img-fluid commenter" alt="">
              <img src="images/testimonial/2.png" class="comapnyLogo" alt="">
            </div>
            <div class="commenter-thumb">
              <img src="images/testimonial/thumb-3.jpg" class="img-fluid commenter" alt="">
              <img src="images/testimonial/3.png" class="comapnyLogo" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonial End -->

<!-- NewsLetter -->
<div class="newsletter-bg padding-top-90 padding-bottom-90">
  <div class="container">
    <div class="row">
      <div class="col-xl-5 col-lg-6">
        <div class="newsletter-wrap">
          <h3>Newsletter</h3>
          <p>Get e-mail updates about our latest news and Special offers. We don’t send spam so don’t worry.</p>
          <form action="#" class="newsletter-form form-inline">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email address...">
            </div>
            <button class="btn button">Submit<i class="fas fa-caret-right"></i></button>
            <p class="newsletter-error">0 - Please enter a value</p>
            <p class="newsletter-success">Thank you for subscribing!</p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- NewsLetter End -->





@stop
