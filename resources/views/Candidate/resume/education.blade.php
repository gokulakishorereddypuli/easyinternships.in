@extends('candidate_template')
@section('main')

<li class="menu-item login-popup"><button title="Title" type="button" data-toggle="modal" data-target="#exampleModalLong">Education</button></li>
<div class="account-entry">
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div id="education" class="row">
                      <label class="col-md-3 col-form-label">Education</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Designation">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">EDUCATION 01</label>
                      <div class="col-md-9">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Institute">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Period">
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" placeholder="Description (Optional)"></textarea>
                        </div>
                        <a href="#" class="add-new-field">+ Add Education</a>
                      </div>
                    </div>
            </div>
          </div>
        </div>