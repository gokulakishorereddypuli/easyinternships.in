@extends('employertemplate')
@section('main')
<form action="loginform" method="POST">
    @csrf
    <div class="dashboard-section basic-info-input">
                    <h4><i data-feather="lock"></i>Set Password</h4>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Current Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="Current Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">New Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="New Password" name="newpassword">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Retype Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="Retype Password" name="retypepassword">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <button class="button">Save Changes</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
</form>
@stop
