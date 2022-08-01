<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="	{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset/page/plugins/fontawesome-free/css/all.min.css')}}">
</head>
<body>
  <section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black">
          @if (Session::has('success'))
          <div class="alert alert-success alert-block">
              <strong>{{Session::get('success')}}</strong>
          </div>
          @endif
          @if (Session::has('error'))
          <div class="alert alert-danger">
              <strong>{{Session::get('error')}}</strong>
          </div>
          @endif
          <div class="px-5 ms-xl-4">
            <i class="fa fa-solid fa-tooth me-3 pt-5 mt-xl-4" style="color: #06e4e472; font-size: 2em"></i>
            <span class="h1 fw-bold mb-0">Log in</span>
          </div>
  
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
  
            <form style="width: 23rem;" action="{{route('postLoginClient')}}" method="POST" id="checkform">
              @csrf
  
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"></h3>
  
              <div class="form-outline mb-4">
                <div class="form-group">
                  <label class="form-label" for="form2Example18">Email address</label>
                  <input type="email" name="email" id="form2Example18" class="form-control form-control-lg" value="{{old('email')}}"/>
                  @error('email')
                        <span style="color: red">{{$message}}</span>
                  @enderror
                </div>
              </div>
  
              <div class="form-outline mb-4">
                <div class="form-group">
                  <label class="form-label" for="form2Example28">Password</label>
                  <input type="password" name="password" id="form2Example28" class="form-control form-control-lg" />
                  @error('password')
                        <span style="color: red">{{$message}}</span>
                  @enderror
                </div>
              </div>
  
              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit" style="background: #06e4e472; border: #06e4e472 1px solid">Login</button>
              </div>
  
              <p class="small mb-5 pb-lg-2"><a class="text-muted" href="{{route('send_mail_pass')}}">Forgot password?</a></p>
              <p>Don't have an account? <a href="{{route('getRegisterClient')}}" class="link-info">Register here</a></p>
  
            </form>
  
          </div>
  
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{asset('asset/client/images/slides/login_home.jpg')}}"
            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </section>
    <!-- jQuery -->
<script src="{{asset('asset/page/plugins/jquery/jquery.min.js')}}"></script>
<!-- jquery-validation -->
<script src="{{asset('asset/page/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('asset/page/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script>
    $(function () {
      $.validator.setDefaults({
        submitHandler: function () {
          return true;
        }
      });
      $('#checkform').validate({
        rules: {
          email:{
            required: true,
          },
          password: {
            required: true,
            minlength: 6,
            maxlength: 20,
          }
        },
        messages: {
          email:{
            required: "Please Enter Email",
          },
          password: {
            required: "Please Enter Password",
            minlength: "Password needs at least 6 characters",
            maxlength: "Password cannot exceed 20 characters",
          }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
</body>
</html>

