

@extends('employertemplet')

@section('main')
@php
    if(Auth::guard('web')->user()->user_type=='Employer'){
    $result= Auth::guard('web')->user();
    }
@endphp
<form action="{{ url('update-employer-profile') }}" class="dashboard-form" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="dashboard-section upload-profile-photo">
      <div class="update-photo">
        <img class="image" src="{{ '/images/users/employer/logo'.$result->id.'.png' }} " alt="">
      </div>
      <div class="file-upload">
        <input type="file" class="file-input" name="img" accept="image/png, image/jpeg" >Change Avatar
      </div>
    </div>

    <div class="dashboard-section basic-info-input">
      <h4><i data-feather="user-check"></i>Basic Info  <span class="red-star">*</span> </h4>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Company Name <span class="red-star">*</span> </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Company Name" name="company_name" value="{{ $company->company_name }}" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Support Email  <span class="red-star">*</span> </label>
        <div class="col-sm-9">
          <input type="email" class="form-control" placeholder="email@example.com" name="email" value="{{ $company->support_email }}" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Phone <span class="red-star">*</span>  </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="+91 12345 67890" name="phone" value="{{ $company->phone }}"required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Address <span class="red-star">*</span>  </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Delhi" name="address" value="{{ $company->address }}" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Category <span class="red-star">*</span> </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="UI & UX Designer" name="category" value="{{ $company->category }}" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">About Us <span class="red-star">*</span> </label>
        <div class="col-sm-9">
          <textarea class="form-control" placeholder="" name="aboutus" required>{{ $company->aboutus }}</textarea>
        </div>
      </div>
    </div>
    <div class="dashboard-section media-inputs">
      <h4><i data-feather="image"></i>Photo &amp; Video</h4>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Intro Video</label>
        <div class="col-sm-9">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">Link</div>
            </div>
            <input type="text" class="form-control" placeholder="https://www.youtube.com/watch?v=ZRkdyjJ_489M">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Gallery</label>
        <div class="col-sm-9">
          <div class="input-group image-upload-input">
            <div class="input-group-prepend">
              <div class="input-group-text">Image</div>
            </div>
            <div class="active">
              <div class="upload-images">
                <div class="pic">
                  <span class="ti-plus"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="dashboard-section social-inputs">
      <h4><i data-feather="cast"></i>Social Networks  <span class="red-star">*</span>  </h4>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Social Links</label>
        <div class="col-sm-9">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fab fa-facebook-f"></i> </div>
            </div>
            <input type="text" class="form-control" placeholder="facebook.com/username" name="fb" value="{{ $social->fb }}" required>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-3 col-sm-9">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fab fa-twitter"></i></div>
            </div>
            <input type="text" class="form-control" placeholder="twitter.com/username" name="twitter" value="{{ $social->twitter }}" required>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-3 col-sm-9">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"><i class="fab fa-google-plus"></i></div>
            </div>
            <input type="text" class="form-control" placeholder="google.com/username" name="google" value="{{ $social->google }}" required>
          </div>
        </div>
      </div>

    </div>
    <div class="dashboard-section basic-info-input">

      <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <div class="col-sm-9">
          <button class="button" type="submit">Save</button>
        </div>
      </div>
    </div>
  </form>
  @stop
@push('style')

@endpush


