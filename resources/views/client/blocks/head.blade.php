<head>
	<meta charset="UTF-8">
	<title>Belleville Dental</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}" type="text/css">
    
    <!-- css custom -->
    <link rel="stylesheet" href="{{ asset('asset/client/css/rating.css')}}">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="{{ asset('asset/client/css/style.css')}}">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="{{ asset('asset/client/css/responsive.css')}}">
    <!--Color Switcher Mockup-->
    <link rel="stylesheet" href="{{ asset('asset/client/css/color-switcher-design.css')}}">
    <!--Color Themes-->
    <link rel="stylesheet" href="{{ asset('asset/client/css/color-themes/default-theme.css" id="theme-color-file')}}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('asset/client/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('asset/client/images/favicon/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('asset/client/images/favicon/favicon-16x16.png')}}" sizes="16x16">
    <script src="{{asset('asset/page/plugins/jquery-validation/jquery.validates.js')}}"></script>
    <script src="{{asset('asset/page/plugins/jquery-validation/additional-methods.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/36154dd713.js" crossorigin="anonymous"></script>
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>