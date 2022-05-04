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
  <title>Sign In | Admin</title>
</head>

<body>
  <!-- container -->
  <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">

        @if(session()->has('message'))
        <div class="alert alert-{{session()->get('message')['type']}} alert-dismissible fade show" role="alert">
          <strong>{{strtoupper(session()->get('message')['type'])}}</strong>
          &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
          {{session()->get('message')['content']}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        @endif
        <!-- Card -->
        <div class="card smooth-shadow-md">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4 text-center">
              <a href="{{route('index')}}">
                <img src="{{asset('parigyan.png')}}" width="150" height="50" alt="" />

              </a>
              <p class="mb-6">Admin::Login</p>
              <p class="mb-6">Please enter your user information</p>
            </div>
            <!-- Form -->
            <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Login') }}">
              @csrf
              <!-- Username -->
              <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                  placeholder="Email address here" name="email" value="{{ old('email') }}" required autocomplete="email"
                  autofocus>
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
                  name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <!-- Checkbox -->
              <div class="d-lg-flex justify-content-between align-items-center
                  mb-4">
                <div class="form-check custom-checkbox">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                    ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">Remember me</label>
                </div>

              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>

                <div class="d-md-flex justify-content-between mt-4">
                  <div class="mb-2 mb-md-0">
                    <a href="{{route('admin.register')}}" class="fs-5">Create An Account </a>
                  </div>
                  <div>
                    <a href="" data-bs-toggle="modal" data-bs-target="#forgetPassword" class="text-inherit fs-5">Forgot
                      your password?</a>
                  </div>

                </div>
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="forgetPassword" tabindex="-1" role="dialog" aria-labelledby="forgetPasswordTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="forgetPasswordTitle">RESET PASSWORD</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            {{-- <span aria-hidden="true">&times;</span> --}}
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('admin.reset.password.email')}}">
            @csrf

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  required>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
        </div>
        <div class="modal-footer text-center">
          <button type="submit" class="btn btn-primary">Change Password To Default</button>
        </div>
      </div>
      </form>

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