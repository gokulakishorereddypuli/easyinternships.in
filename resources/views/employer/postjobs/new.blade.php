@extends('employertemplet')

@section('main')

<form action="post-job" class="dashboard-form job-post-form" method="POST">
    @csrf


    <div class="dashboard-section basic-info-input">
      <h4><i data-feather="user-check"></i>Post A Job</h4>
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Job Title</label>
        <div class="col-md-9">
          <input type="text" class="form-control" placeholder="Your job title here" name = "job_title">
        </div>
      </div>
      <div class="row">
        <label class="col-md-3 col-form-label">Job Summery</label>
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control" value ="" name = "category">
                  <option>Select Category</option>
                  <option value="Accounting / Finance">Accounting / Finance</option>
                  <option value="Health Care">Health Care</option>
                  <option value="Garments / Textile">Garments / Textile</option>
                  <optionvalue="Telecommunication">Telecommunication</option>
                </select>
                <i class="fa fa-caret-down"></i>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control" value =""  name = "job_type">
                  <option>Job Type</option>
                  <option value="Part Time">Part Time</option>
                  <option value="Full Time">Full Time</option>
                  <option value="Temperory">Temperory</option>
                  <option value="Permanent">Permanent</option>
                  <option value="Freelance">Freelance</option>
                </select>
                <i class="fa fa-caret-down"></i>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control" value =""  name = "experience" >
                  <option>Experience (Optional)</option>
                  <option value="Less than 1 Year">Less than 1 Year</option>
                  <option value="2 Year">2 Year</option>
                  <option value="3 Year">3 Year</option>
                  <option value="4 Year">4 Year</option>
                  <option value="Over 5 Year">Over 5 Year</option>
                </select>
                <i class="fa fa-caret-down"></i>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Salary Range" name="salary_range">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <select class="form-control" placeholder="Qualification" value="" name ="qualification">
                  <option>Qualification</option>
                  <option value="Matriculation">Matriculation</option>
                  <option value="Intermidiate">Intermidiate</option>
                  <option value="Gradute">Gradute</option>
                </select>
                <i class="fa fa-caret-down"></i>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Vacancy" value="" name="vacancy">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group datepicker">
                <input type="date" class="form-control" placeholder="Start Date" name = "start_date">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group datepicker">
                <input type="date" class="form-control" placeholder="End Date" name = "end_date">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <label class="col-md-3 col-form-label">Job Description</label>
        <div class="col-md-9">
          <textarea id="mytextarea" class="tinymce-editor tinymce-editor-1" placeholder="Description text here" name = "job_description"></textarea>
        </div>
      </div>
      <div class="row">
        <label class="col-md-3 col-form-label">Responsibilities</label>
        <div class="col-md-9">
          <textarea id="mytextarea2" class="tinymce-editor tinymce-editor-2" placeholder="Responsibilities (Optional)" name ="responsibilities"></textarea>
        </div>
      </div>
      <div class="row">
        <label class="col-md-3 col-form-label">Other Benefits</label>
        <div class="col-md-9">
          <textarea id="mytextarea4" class="tinymce-editor tinymce-editor-2" placeholder="Description text here" name="benefits"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label">Your Location</label>
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Country" name = "country" >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="City" name = "city" id="autocomplete">
                <input type="hidden" id="latitude" name="latitude" class="form-control">
                <input type="hidden" name="longitude" id="longitude" class="form-control">

              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Zip Code" name = "zip_code" >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Location" name ="your_location">
              </div>
            </div>
            <div class="col-md-6">
              <div class="set-location">
                <h5>Pin Location</h5>
                <div id="map-area" class="contact-location">
                  <div class="cp-map" id="location" data-lat="40.713355" data-lng="-74.005535" data-zoom="10"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-9 offset-md-3">
          <div class="form-group terms">
            <input class="custom-radio" type="checkbox" id="radio-4" name="Tc" required>
            <label for="radio-4">
              <span class="dot"></span> You accepts our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
            </label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 col-form-label"></label>
        <div class="col-md-9">
          <button class="button" type="submit">Post Your Job</button>
        </div>
      </div>
    </div>
  </form>

@stop
