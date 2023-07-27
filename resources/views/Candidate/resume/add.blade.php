@extends('candidate_template')
@section('main')
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
            </div>
          </div>
        </div>
     </div>
 </div>