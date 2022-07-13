<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset/client/css/bootstrap.css')}}">

</head>
<body>
  <form id="quickForm" action="{{route('postRegisterClient')}}" method="POST">
    @csrf
  <section class="vh-100" style="background-color: #7FFFD4;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src=""
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  
                  <div class="card-body">
                    <div class="form-group">
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <span class="h1 fw-bold mb-0">Register</span>
                      </div>
                      <label for="exampleInputEmail1">Username </label>
                      <input type="text" name="username" class="form-control" value="{{old('username')}}" id="exampleInputEmail1" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" value="{{old('email')}}" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="psw">Password</label>
                      <input type="password" name="password" class="form-control" id="psw" placeholder="Enter Password">
                    </div>

                    <div class="form-group">
                      <label for="cpsw">Repeat Password</label>
                      <input type="password" name="" class="form-control" id="cpsw" placeholder="Enter Repeat Password">
                      <span id="ShowError"></span>
                    </div>
                    
                    <div class="form-group mb-0">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="" class="custom-control-input" id="exampleCheck1">
                        <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                      </div>
                    </div>
                  </div>
                  <div class="pt-1 mb-4">
                    <input type="submit" class="btn btn-dark btn-lg btn-block" value="Submit"/>
                  </div>
                  <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">You have an account? <a href="{{route('postLoginClient')}}"
                        style="color: #393f81;">Login here</a></p>
                    

                  <!-- End-->
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>
    


<!-- jQuery -->
<script src="{{asset('asset/page/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('asset/page/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- jquery-validation -->
<script src="{{asset('asset/page/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('asset/page/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/page/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('asset/page/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
  $('#quickForm').validate({
    rules: {
      username:{
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      // password_confirm : {
      //   required: true,
      //   minlength : 5,
      //   equalTo : "#psw",
      // },
      terms: {
        required: true
      },
    },
    messages: {
      username: {
        required: "Please enter a username"
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      // password_confirm:{
      //   required: "Please provide a Repeat_password",
      //   minlength : "Your password must be at least 5 characters long",
      //   equalTo : "Not same",
      // },
      terms: "Please accept our terms"
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
<script type="text/javascript">
    $(document).ready(function () {
        $().validate(){

        }
    })
</script>
</body>
</html>