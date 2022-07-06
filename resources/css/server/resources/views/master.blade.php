<!DOCTYPE html>
<head>
	@include('admin.blocks.head')
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
    @include('admin.blocks.header')
</header>
<!--header end-->
<!--sidebar start-->
    @include('admin.blocks.sidebar')
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	@yield('content')
    <!-- footer -->
		<div class="footer">
		    <div class="wthree-copyright">
			  <p>© 2022 Techwiz. All rights reserved | Design by Dark Riddle</p>
			</div>
		</div>
    <!-- / footer -->
</section>
<!--main content end-->
</section>
@include('admin.blocks.foot')
</body>
</html>
