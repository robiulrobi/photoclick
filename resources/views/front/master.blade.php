
<!DOCTYPE html>
  <head>
  	<title>@yield('title')</title>
    <meta name="description" content="">
	<meta name="keywords" content="" />
<!--

Solidity Template

http://www.templatemo.com/tm-407-solidity

-->
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">
	
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{asset('/')}}frontend/css/animate.css">
	<link rel="stylesheet" href="{{asset('/')}}frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('/')}}frontend/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('/')}}frontend/css/templatemo_misc.css">
	<link rel="stylesheet" href="{{asset('/')}}frontend/css/templatemo_style.css">
    <!-- JavaScripts -->
	<script src="{{asset('/')}}frontend/js/jquery-1.10.2.min.js"></script>
	<script src="{{asset('/')}}frontend/js/jquery.singlePageNav.js"></script>
	<script src="{{asset('/')}}frontend/js/jquery.flexslider.js"></script>
	
	<script src="{{asset('/')}}frontend/js/custom.js"></script>
     <script src="{{asset('/')}}frontend/js/jquery-1.10.2.min.js"></script>
	<script src="{{asset('/')}}frontend/js/jquery.lightbox.js"></script>
	<script src="{{asset('/')}}frontend/js/templatemo_custom.js"></script>
    <script src="{{asset('/')}}frontend/js/jquery-git2.js"></script><!-- previous next script -->
  </head>
  <body>
  <!-- title start -->
  	@include('front.includes.menu')
        <div id="menu-container">
            @yield('body')
        </div>
	<!-- footer start -->
   @include('front.includes.footer')
    <!-- footer end --> 
  <!-- templatemo 407 solidity -->
  </body>
</html>
