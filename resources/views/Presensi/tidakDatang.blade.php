@extends('Layouts.User.index')


@section('title', 'Seleksi')
    

@section('content')
     <!-- partial -->
     <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">

          <form action="{{ route('tidak-hadir') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <label>Nis Anda</label>
              <input type="text" class="form-control" name="nis" value="{{ auth()->user()->nis }}" >
              <small id="nisHelp" class="form-text text-muted pt-2">Anda tidak bisa mengisi absen orang lain.</small>
            </div>

           

            <div class="form-group">
              @php
                $keterangans = [
                  'alpa', 'sakit'
                ];
              @endphp
              <label for="exampleInputPassword1">Keterangan</label>
              <select name="keterangan" class="form-control">
                @foreach ($keterangans as $keterangan)
                    <option>{{ ucfirst($keterangan) }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group ">
              <label>Bukti</label>
              <input type="file" class="form-control" name="bukti">
              <small id="nisHelo" class="form-text text-muted pt-2">Beri bukti keterangan yang jelas.</small>
            </div>
            
            <button type="submit" class="btn btn-primary">Kirim</button>
          </form>

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