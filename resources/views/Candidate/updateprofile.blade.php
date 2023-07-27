@extends('candidatetemplet')

@section('main')
 <form action="update-profile" class="dashboard-form" method="POST">
     {{ csrf_field() }}

     <input type="hidden" name="id" value=" {{ $user->candidate_id }}">
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
        <label class="col-sm-3 col-form-label">Full Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Full Name" name="FullName" value=" {{ $user->FullName }}" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Phone</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="+91 12345 67890" name="Phone" value="{{ $user->Phone}}"  required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Address</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Full Address" name="Address" value="{{ $user->Address}} "  required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Indestry Expertise</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="UI & UX Designer" name="IndustryExpertise" value="{{ $user->IndustryExpertise }} "  required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">About Me</label>
        <div class="col-sm-9">
          <textarea class="form-control" placeholder="Introduce Yourself" name="AboutMe" required>{{$user->AboutMe}}</textarea>
        </div>
      </div>
    </div>
    <div class="dashboard-section basic-info-input">



      <div class="form-group row">
        <label class="col-sm-3 col-form-label"></label>
        <div class="col-sm-9">
          <button class="button" type="submit">Save Change</button>
        </div>
      </div>
    </div>

  </form>

@stop

