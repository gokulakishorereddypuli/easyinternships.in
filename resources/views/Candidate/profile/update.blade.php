@extends('candidatetemplet')

@section('main')
@php
    if(Auth::guard('web')->user()->user_type=='Candidate'){
    $result= Auth::guard('web')->user();
    }
@endphp
<form action="{{ url('update-candidate-profile') }}" class="dashboard-form" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="dashboard-section upload-profile-photo">
      <div class="update-photo">
        <img class="image" src="" alt="">
      </div>
      <div class="file-upload">
        <input type="file" class="file-input" accept="image/png, image/jpeg" >Change Avatar
      </div>
    </div>

    <div class="dashboard-section basic-info-input">
      <h4><i data-feather="user-check"></i>Basic Info  <span class="red-star">*</span> </h4>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Full Name <span class="red-star">*</span> </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Full Name" name="fullname" value="{{ $candidate->fullname }}" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Phone <span class="red-star">*</span>  </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="+91 12345 67890" name="phone" value="{{ $candidate->phone }}"required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Address <span class="red-star">*</span>  </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Delhi" name="address" value="{{ $candidate->address }}" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Indestry Expertise <span class="red-star">*</span> </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Washington D.C" name="industry_expertise" value="{{ $candidate->industry_expertise }}" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">About Me <span class="red-star">*</span> </label>
        <div class="col-sm-9">
          <textarea class="form-control" placeholder="Introduce Yourself" name="aboutme" required>{{ $candidate->aboutme }}</textarea>
        </div>
      </div>
    </div>
    <div class="dashboard-section basic-info-input">

      <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <div class="col-sm-9">
          <button class="button" type="submit">Update</button>
        </div>
      </div>
    </div>
  </form>
  @stop



