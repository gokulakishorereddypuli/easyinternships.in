@extends('candidatetemplet')

@section('main')

<form action="{{ url('add-candidate-profile') }}" class="dashboard-form" method="POST">
    @csrf
    <div class="dashboard-section upload-profile-photo">
      <div class="update-photo">
        <img class="image" src="/images/user-1.jpg" alt="">
      </div>
      <div class="file-upload">
        <input type="file" class="file-input">Change Avatar
      </div>
    </div>

    <div class="dashboard-section basic-info-input">
      <h4><i data-feather="user-check"></i>Basic Info</h4>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Full Name <span class="red-star">*</span></label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Full Name" name="fullname"  required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Phone <span class="red-star">*</span> </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="+91 12345 67890" name="phone" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Address <span class="red-star">*</span></label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Delhi" name="address" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Industry Expertise <span class="red-star">*</span></label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="UI & UX Designer" name="industry_expertise">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 col-form-label">About Me <span class="red-star">*</span></label>
        <div class="col-sm-9">
          <textarea class="form-control" placeholder="Introduce Yourself" name="aboutme" required></textarea>
        </div>
      </div>

    </div>
    <div class="dashboard-section basic-info-input">
      <div class="form-group row">
        <div class="col-sm-9">
          <button class="button" type="submit">Save</button>
        </div>
      </div>
    </div>
  </form>

@stop
