@extends('employertemplet')

@section('main')
                <div class="manage-job-container">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Job Title</th>
                        <th>Applications</th>
                        <th>Deadline</th>
                        <th>Status</th>
                        <th class="action">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="job-items">
                        <td class="title">
                          <h5><a href="#">Land Development Marketer</a></h5>
                          <div class="info">
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                          </div>
                        </td>
                        <td class="application"><a href="#">6 Application(s)</a></td>
                        <td class="deadline">Oct 31,  2020</td>
                        <td class="status active">Active</td>
                        <td class="action">
                          <a href="#" class="preview" title="Preview"><i data-feather="eye"></i></a>
                          <a href="#" class="edit" title="Edit"><i data-feather="edit"></i></a>
                          <a href="#" class="remove" title="Delete"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                      <tr class="job-items">
                        <td class="title">
                          <h5><a href="#">Designer Required </a></h5>
                          <div class="info">
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>Freelance</a></span>
                          </div>
                        </td>
                        <td class="application"><a href="#">6 Application(s)</a></td>
                        <td class="deadline">Oct 31,  2020</td>
                        <td class="status pending">Pending</td>
                        <td class="action">
                          <a href="#" class="preview" title="Preview"><i data-feather="eye"></i></a>
                          <a href="#" class="edit" title="Edit"><i data-feather="edit"></i></a>
                          <a href="#" class="remove" title="Delete"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                      <tr class="job-items">
                        <td class="title">
                          <h5><a href="#">Restaurant Team Member - Crew</a></h5>
                          <div class="info">
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            <span class="job-type temporary"><a href="#"><i data-feather="clock"></i>Temporary</a></span>
                          </div>
                        </td>
                        <td class="application"><a href="#">6 Application(s)</a></td>
                        <td class="deadline">Oct 31,  2020</td>
                        <td class="status expired">Expired</td>
                        <td class="action">
                          <a href="#" class="preview" title="Preview"><i data-feather="eye"></i></a>
                          <a href="#" class="edit" title="Edit"><i data-feather="edit"></i></a>
                          <a href="#" class="remove" title="Delete"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                      <tr class="job-items">
                        <td class="title">
                          <h5><a href="#">Land Development Marketer</a></h5>
                          <div class="info">
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                          </div>
                        </td>
                        <td class="application"><a href="#">6 Application(s)</a></td>
                        <td class="deadline">Oct 31,  2020</td>
                        <td class="status active">Active</td>
                        <td class="action">
                          <a href="#" class="preview" title="Preview"><i data-feather="eye"></i></a>
                          <a href="#" class="edit" title="Edit"><i data-feather="edit"></i></a>
                          <a href="#" class="remove" title="Delete"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                      <tr class="job-items">
                        <td class="title">
                          <h5><a href="#">Designer Required </a></h5>
                          <div class="info">
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>Freelance</a></span>
                          </div>
                        </td>
                        <td class="application"><a href="#">6 Application(s)</a></td>
                        <td class="deadline">Oct 31,  2020</td>
                        <td class="status pending">Pending</td>
                        <td class="action">
                          <a href="#" class="preview" title="Preview"><i data-feather="eye"></i></a>
                          <a href="#" class="edit" title="Edit"><i data-feather="edit"></i></a>
                          <a href="#" class="remove" title="Delete"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                      <tr class="job-items">
                        <td class="title">
                          <h5><a href="#">Restaurant Team Member - Crew</a></h5>
                          <div class="info">
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>New Orleans</a></span>
                            <span class="job-type temporary"><a href="#"><i data-feather="clock"></i>Temporary</a></span>
                          </div>
                        </td>
                        <td class="application"><a href="#">6 Application(s)</a></td>
                        <td class="deadline">Oct 31,  2020</td>
                        <td class="status expired">Expired</td>
                        <td class="action">
                          <a href="#" class="preview" title="Preview"><i data-feather="eye"></i></a>
                          <a href="#" class="edit" title="Edit"><i data-feather="edit"></i></a>
                          <a href="#" class="remove" title="Delete"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="pagination-list text-center">
                    <nav class="navigation pagination">
                      <div class="nav-links">
                        <a class="prev page-numbers" href="#"><i class="fas fa-angle-left"></i></a>
                        <a class="page-numbers" href="#">1</a>
                        <span aria-current="page" class="page-numbers current">2</span>
                        <a class="page-numbers" href="#">3</a>
                        <a class="page-numbers" href="#">4</a>
                        <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
                      </div>
                    </nav>
                  </div>
                </div>




@stop
