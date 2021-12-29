@extends('Layouts.User.index')


@section('title', 'Seleksi')
    

@section('content')
     <!-- partial -->
     <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">

          <div class="col-lg-4">

            <a class="btn btn-primary" href="{{ url('student/datang') }}">Datang</a>  
            <a class="btn btn-danger" href="{{ url('student/tidakdatang')}}">Tidak Datang</a>
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