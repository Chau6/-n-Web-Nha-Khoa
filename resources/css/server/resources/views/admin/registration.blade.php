<!DOCTYPE html>
<head>
	<title>Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);
		function hideURLbar(){
			window.scrollTo(0,1);
		}
	</script>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" >
	<link href="{{ asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('assets/css/style-responsive.css') }}" rel="stylesheet"/>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('assets/css/font.css') }}" type="text/css"/>
	<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet"> 
	<script src="{{ asset('assets/js/jquery2.0.3.min.js') }}"></script>
</head>
<body>
    <div class="reg-w3">
        <div class="w3layouts-main">
            <h2>Register Now</h2>
                <form action="#" method="post">
                    <input type="text" class="ggg" name="Name" placeholder="NAME" required="">
                    <input type="email" class="ggg" name="Email" placeholder="E-MAIL" required="">
                    <input type="text" class="ggg" name="Phone" placeholder="PHONE" required="">
                    <input type="password" class="ggg" name="Password" placeholder="PASSWORD" required="">
                    <h4><input type="checkbox" />I agree to the Terms of Service and Privacy Policy</h4>
                    
                        <div class="clearfix"></div>
                        <input type="submit" value="submit" name="register">
                </form>
                <p>Already Registered.<a href="{{ route('getlogin') }}">Login</a></p>
        </div>
    </div>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollTo.js') }}"></script>
</body>
</html>
