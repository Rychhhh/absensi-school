<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login - Page</title>
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
                <h6 class="fw-light">Log In To Continue .</h6>

              <form class="pt-3" method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="form-group">
                  <input type="text" name="nis" class="form-control form-control-lg @error('nis') is-invalid @enderror" placeholder="Nis" required autocomplete="nis" autofocus>

                  {{-- If Error --}}
                  @error('Nis')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror"  placeholder="Password" required autocomplete="current-password">

                  {{-- If Error --}}
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>

                <div class="my-2 d-flex justify-content-between align-items-center">

                  <div class="form-check" style="margin-left: 40px;">
                    <label>Remember Me</label>
                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  </div>

                </div>

                <div class="mb-2">

                  <button type="submit" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-user me-2"></i>{{ __('Login') }}
                  </button>

                </div>

                <div class="text-center mt-4 fw-light">
                  Tidak punya akun ?
                    <a href="{{ route('register') }}">Register</a>
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
