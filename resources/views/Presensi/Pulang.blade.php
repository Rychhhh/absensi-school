@extends('Layouts.User.index')


@section('title', 'Pulang')
    

@section('content')
     <!-- partial -->
     <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-sm-12">
            <div class="home-tab">
              <div class="tab-content tab-content-basic">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">             

                      <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card card-rounded">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                      <h4 class="card-title card-title-dash">Leave Report</h4>
                                    </div>
                                    <div>
                                      <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                          <h6 class="dropdown-header">week Wise</h6>
                                          <a class="dropdown-item" href="#">Year Wise</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="mt-3">
                                    <canvas id="leaveReport"></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <form action="{{ route('presensi-pulang') }}" method="POST">
                  @csrf
                  <div class="form-group">
                      <center>
                          <label id="clock" style="font-size: 40px; color: #0A77DE; -webkit-text-stroke: 3px #00ACFE;
                                      text-shadow: 4px 4px 10px #36D6FE,
                                      4px 4px 20px #36D6FE,
                                      4px 4px 30px#36D6FE,
                                      4px 4px 40px #36D6FE;">
                          </label>
                      </center>
                  </div>
                  <center>
                      <div class="form-group">
                          <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                              <i class="fas fa-arrow-right"></i>
                          </span>
                          <span class="text">Pulang</span>
                        </button>
                      </div>
                  </center>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('scripts')
<script src="{{ asset('user/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('user/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('user/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('user/vendors/progressbar.js/progressbar.min.js') }}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('user/js/off-canvas.js') }}"></script>
<script src="{{ asset('user/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('user/js/settings.js') }}"></script>
<script src="{{ asset('user/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('user/js/jquery.cookie.js') }}" type="text/javascript"></script>
<script src="{{ asset('user/js/dashboard.js') }}"></script>
<script src="{{ asset('user/js/Chart.roundedBarCharts.js') }}"></script>
<!-- End custom js for this page-->
@endsection