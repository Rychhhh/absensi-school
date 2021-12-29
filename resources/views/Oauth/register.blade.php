<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register - Page</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('user/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('user/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('user/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('user/vendors/typicons/typicons.css') }}">
  <link rel="stylesheet" href="{{ asset('user/vendors/simple-line-icons/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('user/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('user/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('user/images/favicon.png') }}" />
</head>

<body class="text-center">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <h1 style="font-family: Roboto">
                  <span style="color: blue">A</span>
                  <span style="color: red">P</span>
                  <span style="color: yellow">P</span>
                  <span style="color: blue">S</span>
                  <span style="color: green">E</span>
                  <span style="color: yellow">N</span>
                  <span style="color: red">S</span>
                  <span style="color: blue">I</span>
                </h1>
              </div>
              <h4>Hello AppSenser! </h4>
              <h6 class="fw-light">Register To Continue .</h6>

              <form class="pt-3" method="POST" action="{{ route('register') }}">
                @csrf
                
                <div class="form-group">
                  <input type="text" name="nis" class="form-control form-control-lg @error('nis') is-invalid @enderror" placeholder="Nis" required autocomplete="name" autofocus>

                  @error('nis')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="form-group">
                  <input type="text" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Nama Lengkap" required autocomplete="name">

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

                <div class="form-group">
                 

                  @php
                      use App\Models\Rombel;

                      $rombelData = Rombel::all();
                  @endphp

                  <select name="rombel" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm mt-4 text-center" style="width: 100%">
                    <option value="None" selected>None</option>
                      @foreach ($rombelData as $rombel)
                      <option value="{{ $rombel->nama_rombel }}">{{ $rombel->nama_rombel }}</option>   
                      @endforeach
                  </select>

                    @error('rombel')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                @php
                      use App\Models\Rayon;

                      $rayonData = Rayon::all();
                @endphp

                <div class="form-group">

                  <select name="rayon" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm mt-4 text-center" style="width: 100%">
                    <option value="None" selected>None</option>
                    @foreach ($rayonData as $rayon)
                    <option value="{{ ucfirst($rayon->nama_rayon) }}">{{ ucfirst($rayon->nama_rayon) }}</option>   
                    @endforeach
                </select>

                    @error('rayon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>

                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">

                </div>

                <div class="mb-2">
                  <button type="submit" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook me-2"></i>{{ __('Register') }}
                  </button>
                </div>
                <div class="text-center mt-4 fw-light">
                  Punya akun ? <a href="{{ route('login') }}" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="{{ asset('user/js/off-canvas.js') }}"></script>
      <script src="{{ asset('user/js/hoverable-collapse.js') }}"></script>
      <script src="{{ asset('user/js/template.js') }}"></script>
      <script src="{{ asset('user/js/settings.js') }}"></script>
      <script src="{{ asset('user/js/todolist.js') }}"></script>
  <!-- endinject -->
</body>

</html>
