<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon icon-->
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon_io/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon_io/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon_io/favicon-16x16.png')}}">
  <link rel="manifest" href="{{asset('favicon_io/site.webmanifest')}}">

  <!-- Libs CSS -->

  <link rel="stylesheet" href="{{asset('assets/libs/prismjs/themes/prism.css')}}">
  <link rel="stylesheet" href="{{asset('assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.css')}}">
  <link rel="stylesheet" href="{{asset('assets/libs/prismjs/plugins/toolbar/prism-toolbar.css')}}">
  <link rel="stylesheet" href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/libs/dropzone/dist/dropzone.css')}}">
  <link rel="stylesheet" href="{{asset('assets/libs/@mdi/font/css/materialdesignicons.min.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
  <title>Sign Up | Admin</title>
</head>

<body>
  <!-- container -->
  <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
        <!-- Card -->
        <div class="card smooth-shadow-md">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4">
              <a href="{{route('index')}}"><img src="{{asset('assets/images/brand/logo/cms.png')}}" class="mb-2"
                  alt=""></a>
              <p class="mb-6">Admin:: Create New Account</p>

            </div>
            <!-- Form -->
            <form method="POST" action="{{ route('admin.register') }}">
              @csrf
              <!-- Username -->
              <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name"
                  value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                  name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                  autocomplete="new-password">
              </div>
              <!-- Checkbox -->
              <div class="mb-3">
                <div class="form-check custom-checkbox">
                  <input type="checkbox" class="form-check-input" id="agreeCheck">
                  <label class="form-check-label" for="agreeCheck"><span class="fs-5">I agree to the <a href="">Terms of
                        Service </a>and
                      <a href="">Privacy Policy.</a></span></label>
                </div>
              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">
                    Create Account
                  </button>
                </div>

                <div class="d-md-flex justify-content-between mt-4">
                  <div class="mb-2 mb-md-0">
                    <a href="{{route('admin.login')}}" class="fs-5">Already
                      member? Login </a>
                  </div>
                  <div>
                    <a href="forget-password.html" class="text-inherit
                        fs-5">Forgot your password?</a>
                  </div>

                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <!-- Libs JS -->
  <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset('assets/libs/feather-icons/dist/feather.min.js')}}"></script>
  <script src="{{asset('assets/libs/prismjs/components/prism-core.min.js')}}"></script>
  <script src="{{asset('assets/libs/prismjs/components/prism-markup.min.js')}}"></script>
  <script src="{{asset('assets/libs/prismjs/plugins/line-numbers/prism-line-numbers.min.js')}}"></script>
  <script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>

  <!-- clipboard -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>

  <!-- Theme JS -->
  <script src="{{asset('assets/js/theme.min.js')}}"></script>

</body>

</html>