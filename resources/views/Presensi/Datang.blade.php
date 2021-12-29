@extends('Layouts.User.index')


@section('title', 'Student')
    

@section('content')
     <!-- partial -->
     <div class="main-panel">
      <div class="content-wrapper">
        <div class="row mt-5">
              <div class="col-sm-12">
                <form action="{{ route('student.store') }}" method="post">
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
                          <button type="submit" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                              <i class="fas fa-arrow-right"></i>
                          </span>
                          <span class="text">Absensi Masuk</span>
                          </button>
                      </div>
                      @php
                          use App\Models\Presensi;

                          $user = auth()->user();

                      @endphp
                      
                      @if (Presensi::all()->where('user_nis') === $user->nis)
                          
                      <div class="form-group">
                        <a href="{{ url('student/pulang') }}" class="btn btn-success btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-arrow-right"></i>
                          </span>
                          <span class="text">Absen Pulang</span>
                        </a>
                      </div>

                      @endif

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