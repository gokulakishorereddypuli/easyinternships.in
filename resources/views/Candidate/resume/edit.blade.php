@extends('candidatetemplet')

@section('main')
                <div class="download-resume dashboard-section">
                  <div class="update-file">
                    <input type="file">Update CV <i data-feather="edit-2"></i>
                  </div>
                  <div class="update-file">
                    <input type="file">Update Cover Letter <i data-feather="edit-2"></i>
                  </div>
                  <span>Upload PDF File</span>
                </div>
                <div class="skill-and-profile dashboard-section">
                  <div class="skill">
                    <label>Skills:</label>
                    <a href="#">Design</a>
                    <a href="#">Illustration</a>
                    <a href="#">iOS</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary edit-button" data-toggle="modal" data-target="#modal-skill">
                      <i data-feather="edit-2"></i>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-skill" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="title">
                              <h4><i data-feather="git-branch"></i>MY SKILL</h4>
                              <a href="#" class="add-more">+ Add Skills</a>
                            </div>
                            <div class="content">
                              <form action="#">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Type Skills</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">01</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">02</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">03</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">04</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">05</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">06</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="buttons">
                                      <button class="primary-bg">Save Update</button>
                                      <button class="" data-dismiss="modal">Cancel</button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary edit-button" data-toggle="modal" data-target="#modal-social">
                      <i data-feather="edit-2"></i>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-social" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="title">
                              <h4><i data-feather="git-branch"></i>Social Networks</h4>
                              <a href="#" class="add-more">+ Add Social</a>
                            </div>
                            <div class="content">
                              <form action="#">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Social Links</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-facebook-f"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="facebook.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-twitter"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="twitter.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-google-plus"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="google.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-linkedin-in"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="linkedin.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-pinterest-p"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="pinterest.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="instagram.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-behance"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="behance.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-dribbble"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="dribbble.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-github"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="github.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text dropdown-label">
                                          <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Select</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                          </select><i class="fa fa-caret-down"></i>
                                        </div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="Input Profile Link">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="buttons">
                                      <button class="primary-bg">Save Update</button>
                                      <button class="" data-dismiss="modal">Cancel</button>
                                    </div>
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
                
                <div class="about-details details-section dashboard-section">
                  <h4><i data-feather="align-left"></i>About Me</h4>
                  {{strip_tags($resume[0]->about_you)}}
                  <div class="information-and-contact">
                    <div class="information">
                      <h4>Information</h4>
                      <ul>
                        <li><span>Full Name:</span>{{$resume[0]->fullname}}</li>
                        <li><span>Category:</span>{{$resume[0]->category}}</li>
                        <li><span>Location:</span> {{$resume[0]->location}}</li>
                        <li><span>Job Type:</span>{{$resume[0]->job_type}} </li>
                        <li><span>Experience:</span>{{$resume[0]->experience}} year(s)</li>
                        <li><span>Qualification:</span>{{$resume[0]->highest_qualification}}</li>
                      </ul>
                    </div>
                  </div>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-about-me">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="modal-about-me" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="align-left"></i>About Me</h4>
                          </div>
                          <div class="content">
                            <form action="{{url('/edit-resume')}}" method="POST">
                                @csrf
                                <input type="hidden" name="modeltype" value="candidate_resume">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Write Yourself</label>
                                <div class="col-sm-9">
                                  <textarea class="form-control" placeholder="Write Yourself" name="about_you" >{{strip_tags($resume[0]->about_you)}}</textarea>
                                </div>
                              </div>
                              <h4><i data-feather="align-left"></i>Information</h4>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Full name</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="Design &amp; Creative" name="fullname" value="{{$resume[0]->fullname}}">
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Select Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="category" required>
                                        <option value="">Select Category</option>
                                        <option value="Accounting / Finance">Accounting / Finance</option>
                                        <option value="Health Care">Health Care</option>
                                        <option value="Garments / Textile">Garments / Textile</option>
                                        <option value="Telecommunication">Telecommunication</option>
                                      </select>
                                    </div>
                             </div>
                             
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Location</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="Location" value="{{$resume[0]->location}}" name="location">
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Job Type</label>
                                    <div class="col-sm-9">
                                       <select class="form-control" name="job_type" required >
                                        <option value="">Job Type</option>
                                        <option value="Part Time">Part Time</option>
                                        <option value="Full Time">Full Time</option>
                                        <option value="Temperory">Temperory</option>
                                        <option value="Permanent">Permanent</option>
                                        <option value="Freelance">Freelance</option>
                                        <option value="Intern">Intern</option>
                                      </select>
                                    </div>
                             </div>
                              
                              <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Experience</label>
                                    <div class="col-sm-9">
                                       <select class="form-control" name="experience" required>
                                        <option value="">Experience</option>
                                        <option value="No Experience">No Experience</option>
                                        <option value="Less than 1 Year">Less than 1 Year</option>
                                        <option value="2 Year">2 Year</option>
                                        <option value="3 Year">3 Year</option>
                                        <option value="4 Year">4 Year</option>
                                        <option value="Over 5 Year">Over 5 Year</option>
                                      </select>
                                    </div>
                             </div>
                             
                             <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Highest Qualification</label>
                                    <div class="col-sm-9">
                                       <select class="form-control" name="highest_qualification" required>
                                            <option value="">Highest Qualification</option>
                                            <option value="Matriculation">Matriculation</option>
                                            <option value="Intermidiate">Intermidiate</option>
                                            <option value="Gradute">Gradute</option>
                                         </select>
                                    </div>
                             </div>
                              
                              
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button class="primary-bg" type="submit">Save Update</button>
                                    <button class="" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                              
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                <div class="edication-background details-section dashboard-section">
                    
                  <h4><i data-feather="book"></i>Education Background</h4>
                  @foreach($education as $education)
                    <div class="education-label">
                    <span class="study-year"><li>{{$education->period}}</li></span>
                    <h5><li>{{$education->qualification}}<span>@ {{$education->institute}}</span></li></h5>
                    <span class="study-year"><li>{{$education->percentage}}</li></span>
                    </div>
                  @endforeach
                  
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-education">
                    <i data-feather="edit-2"></i>
                  </button>
                  
                  
                  <!-- Modal -->
                  <div class="modal fade modal-education" id="modal-education" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="book"></i>Education</h4>
                            <a href="#" class="add-more">+ Add Education</a>
                          </div>
                          <div class="content">
                            <form action="#">
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">01</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Title</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Institute</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Period</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Description</div>
                                      </div>
                                      <textarea class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">02</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Title</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Institute</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Period</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Description</div>
                                      </div>
                                      <textarea class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button class="primary-bg">Save Update</button>
                                    <button class="" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                
                <div class="experience dashboard-section details-section">
                  <h4><i data-feather="briefcase"></i>Work Experiance</h4>
                  <div class="experience-section">
                    <span class="service-year">2016 - Present</span>
                    <h5>Lead UI/UX Designer<span>@ Codepassengers LTD</span></h5>
                    <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                  </div>
                  <div class="experience-section">
                    <span class="service-year">2012 - 2016</span>
                    <h5>Former Graphic Designer<span>@ Graphicreeeo CO</span></h5>
                    <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                  </div>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-experience">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade modal-experience" id="modal-experience" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="briefcase"></i>Experience</h4>
                            <a href="#" class="add-more">+ Add Experience</a>
                          </div>
                          <div class="content">
                            <form action="#">
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">01</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Title</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Company</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Period</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Description</div>
                                      </div>
                                      <textarea class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">02</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Title</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Company</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Period</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Description</div>
                                      </div>
                                      <textarea class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button class="primary-bg">Save Update</button>
                                    <button class="" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="professonal-skill dashboard-section details-section">
                  <h4><i data-feather="feather"></i>Professional Skill</h4>
                  <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which  It has survived not only five centuries, but also the leap into electronic typesetting</p>
                  <div class="progress-group">
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">Photoshop</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">70%</p>
                      </div>
                    </div>
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">HTML/CSS</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">90%</p>
                      </div>
                    </div>
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">JavaScript</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">74%</p>
                      </div>
                    </div>
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">PHP</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">86%</p>
                      </div>
                    </div>
                  </div>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-pro-skill">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade modal-pro-skill" id="modal-pro-skill" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="feather"></i>Professional Skill</h4>
                            <a href="#" class="add-more">+ Add Skill</a>
                          </div>
                          <div class="content">
                            <form action="#">
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">About Skill</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Description</div>
                                      </div>
                                      <textarea class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Skill 01</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Skill Name</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Percentage</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Skill 02</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Skill Name</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Percentage</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Skill 03</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Skill Name</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Percentage</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Skill 04</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Skill Name</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Percentage</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button class="primary-bg">Save Update</button>
                                    <button class="" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="special-qualification dashboard-section details-section">
                  <h4><i data-feather="gift"></i>Special Qualification</h4>
                  <ul>
                    <li>5 years+ experience designing and building products.</li>
                    <li>Skilled at any Kind Design Tools.</li>
                    <li>Passion for people-centered design, solid intuition.</li>
                    <li>Hard Worker & Quick Lerner.</li>
                  </ul>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-qualification">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="modal-qualification" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="align-left"></i>Special Qualification</h4>
                            <a href="#" class="add-more">+ Add Another</a>
                          </div>
                          <div class="content">
                            <form action="#">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Type Here</label>
                                <div class="col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">01</div>
                                    </div>
                                    <input type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">02</div>
                                    </div>
                                    <input type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">03</div>
                                    </div>
                                    <input type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">04</div>
                                    </div>
                                    <input type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">05</div>
                                    </div>
                                    <input type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button class="primary-bg">Save Update</button>
                                    <button class="" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="portfolio dashboard-section details-section">
                  <h4><i data-feather="gift"></i>Portfolio</h4>
                  <div class="portfolio-slider owl-carousel">
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-3.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-1.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-2.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-3.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-2.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                  </div>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-portfolio">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade modal-portfolio" id="modal-portfolio" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="grid"></i>Portfolio</h4>
                            <a href="#" class="add-more">+ Add Another</a>
                          </div>
                          <div class="content">
                            <form action="#">
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Portfolio 01</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Title</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Image</div>
                                      </div>
                                      <div class="upload-profile-photo">
                                        <div class="update-photo">
                                          <img class="image" src="images/portfolio/thumb-1.jpg" alt="">
                                        </div>
                                        <div class="file-upload">            
                                          <input type="file" class="file-input">Change Avatar
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Link</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Portfolio 02</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Title</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Image</div>
                                      </div>
                                      <div class="upload-profile-photo">
                                        <div class="update-photo">
                                          <img class="image" src="images/portfolio/thumb-1.jpg" alt="">
                                        </div>
                                        <div class="file-upload">            
                                          <input type="file" class="file-input">Change Avatar
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Link</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Portfolio 03</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Title</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Image</div>
                                      </div>
                                      <div class="upload-profile-photo">
                                        <div class="update-photo">
                                          <img class="image" src="images/portfolio/thumb-1.jpg" alt="">
                                        </div>
                                        <div class="file-upload">            
                                          <input type="file" class="file-input">Change Avatar
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Link</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button class="primary-bg">Save Update</button>
                                    <button class="" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="personal-information dashboard-section last-child details-section">
                  <h4><i data-feather="user-plus"></i>Personal Deatils</h4>
                  <ul> 
                    <li><span>Full Name:</span>{{$personal[0]->name}}</li>
                    <li><span>Father's Name:</span>{{$personal[0]->father_name}}</li>
                    <li><span>Mother's Name:</span>{{$personal[0]->mother_name}}</li>
                    <li><span>Date of Birth:</span>{{$personal[0]->dob}}</li>
                    <li><span>Nationality:</span>{{$personal[0]->nationality}}</li>
                    <li><span>Sex:</span>{{$personal[0]->sex}}</li>
                    <li><span>Address:</span> {{$personal[0]->address}}</li>
                  </ul>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-personal-details">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="modal-personal-details" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="user-plus"></i>Personal Details</h4>
                          </div>
                          <div class="content">
                            <form action="#">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Full Name</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="Micheal N. Taylor" >
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Father’s Name</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="Howard Armour">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mother’s Name</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="Megan Higbee">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date Of Birth</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="22/08/1992">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nationality</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="American">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="Male">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Age</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="25 Years">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="2018 Nelm Street, Beltsville, VA 20705">
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button class="primary-bg">Save Update</button>
                                    <button class="" data-dismiss="modal">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
             
               
                
@stop