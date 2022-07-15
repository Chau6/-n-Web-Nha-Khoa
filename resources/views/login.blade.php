<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN | LOGIN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('asset/page/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('asset/page/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('asset/page/dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <div class="h1"><b>LOGIN</b></div>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      @if (Session::has('success'))
      <div class="alert alert-success alert-block">
          <strong>{{Session::get('success')}}</strong>
      </div>
      @endif
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif

      <form action="{{route('postLogin')}}" method="POST" id="quickForm">
        @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="username" placeholder="UserName" value="{{old('username')}}">
                <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
                </div>
            </div>

            <div class="input-group mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
              <div class="input-group-append">
                  <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                  </div>
              </div>
              </div>

            <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                    Remember Me
                </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
            </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        {{-- <a href="{{route('reset_password')}}">I forgot my password</a> --}}
      </p>
      <p class="mb-0">
        <a href="{{route('getRegister')}}" class="text-center">Register</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('asset/page/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('asset/page/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/page/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
