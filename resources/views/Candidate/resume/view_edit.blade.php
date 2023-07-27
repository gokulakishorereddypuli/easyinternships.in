@extends('candidatetemplet')

@section('main')
                <div class="download-resume dashboard-section">
                  <a href="#">Download CV<i data-feather="download"></i></a>
                  <a href="#">Download Cover Letter<i data-feather="download"></i></a>
                </div>
                
                <div class="about-details details-section dashboard-section">
                  @foreach($in as $in)
                  <h4><i data-feather="align-left"></i><li>{{$in->about_you}}</li></h4>
                  <div class="information-and-contact">
                    <div class="information">
                      <h4>Information</h4>
                      <ul>
                        <li><span>Category:</span> {{$in->category}}</li>
                        <li><span>Location:</span> {{$in->location}}</li>
                        <li><span>Status:</span> {{$in->job_type}}</li>
                        <li><span>Experience:</span> {{$in->experience}}</li>
                        <li><span>Qualification:</span> {{$in->highest_qualification}}</li>
                      </ul>
                    </div>
                  </div>
                  @break
                  @endforeach
                </div>
                
                <div class="edication-background details-section dashboard-section">
                  <h4><i data-feather="book"></i>Education Background</h4>
                    @foreach($dt as $i)
                    <div class="education-label">
                    <span class="study-year"><li>{{$i->period}}</li></span>
                    <h5><li>{{$i->qualification}}<span>@ {{$i->institute}}</span></li></h5>
                    <span class="study-year"><li>{{$i->percentage}}</li></span>
                    </div>
                    @endforeach
                </div>
                
                <div class="experience dashboard-section details-section">
                  <h4><i data-feather="briefcase"></i>Work Experiance</h4>
                  @foreach($ex as $x)
                  <div class="experience-section">
                    <span class="service-year"><li>{{$x->duration}}</li></span>
                    <h5><li>{{$x->designation}}<span>@ {{$x->companyname}}</span></li></h5>
                    <p><li>{{$x->description}}</li></p>
                  </div>
                  @endforeach
                </div>
                
                <div class="professonal-skill dashboard-section details-section">
                  <h4><i data-feather="feather"></i>Professional Skill</h4>
                  <div class="progress-group">
                    @foreach($sk as $s )
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on"><li>{{$s->skill_name}}</li></p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          
                          <div class="progress-bar" role="progressbar" aria-valuenow= "{{$s->rating}}" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to"><li>{{$s->rating}} %</li></p>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
                
                <div class="personal-information dashboard-section last-child details-section">
                  <h4><i data-feather="user-plus"></i>Personal Deatils</h4>
                  @foreach($pd as $pd)
                  <ul>
                    <li><span>Full Name:</span>{{$pd->name}}</li>
                    <li><span>Father's Name:</span>{{$pd->father_name}}</li>
                    <li><span>Mother's Name:</span>{{$pd->mother_name}}</li>
                    <li><span>Date of Birth:</span>{{$pd->dob}}</li>
                    <li><span>Nationality:</span>{{$pd->nationality}}</li>
                    <li><span>Sex:</span>{{$pd->sex}}</li>
                    <li><span>Address:</span>{{$pd->address}}</li>
                  </ul>
                  @break
                  @endforeach
                </div>
                
                <div class="skill-and-profile dashboard-section">
                  <div class="social-profile">
                    <label>Social:</label>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                  </div>
                </div>
              
        
                
@stop