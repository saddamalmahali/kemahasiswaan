<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ config('app.name', 'Laravel') }}</title>

	<meta name="description" content="U-TURN Multipurpose HTML Template by JWTheme" >

	<meta name="author" content="JWTheme">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<!-- Bootstrap  -->
	<link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- icon fonts font Awesome -->
	<link href="{{url('assets/css/font-awesome.min.css')}}" rel="stylesheet">

	<!-- Import Custom Styles -->
	<link href="{{url('assets/css/style.css')}}" rel="stylesheet">

	<!-- Import Retina Styles -->
	<link href="{{url('assets/css/retina.css')}}" rel="stylesheet">

	<!-- Import Magnific Pop Up Styles -->
	<link rel="stylesheet" href="{{url('assets/css/magnific-popup.css')}}">

	<!-- Import Responsive Styles -->
	<link href="{{url('assets/css/responsive.css')}}" rel="stylesheet">

	<!-- Important owl stylesheet -->
	<link rel="stylesheet" href="{{url('assets/css/owl.carousel.css')}}">



</head>
<body>

	<!-- Page Top	 -->
	<div id="page-top"></div>
	<!-- Page Top End -->

	<div id="main-content" class="main-content index">
		<div class="container">
			<div class="row">
				<!-- Side Bar -->
				<div class="col-sm-3 sidebar pull-right">
					@include('layouts.home_menu')
				</div><!-- /.col-sm-3 -->
				<!-- Side Bar End -->

				@yield('content')

				
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /#main-content -->



	<div id="scroll-to-top" class="scroll-to-top">
		<span>
			<i class="fa fa-chevron-up"></i>    
		</span>
	</div><!-- /#scroll-to-top -->




	<!-- Include modernizr-2.8.0.min.js -->
	<script src="{{url('assets/js/modernizr-2.8.0.min.js')}}"></script>

	<!-- Include jquery.min.js plugin -->
	<script src="{{url('assets/js/jquery-2.1.0.min.js')}}"></script>

	<!-- Include retina.min.js plugin -->
	<script src="{{url('assets/js/retina.min.js')}}"></script>

	<!-- Javascript Plugins  -->
	<script src="{{url('assets/js/plugins.js')}}"></script>

	<!-- Custom Functions  -->
	<script src="{{url('assets/js/functions.js')}}"></script>

	<!-- Include magnific-popup.min.js -->
	<script src="{{url('assets/js/jquery.magnific-popup.min.js')}}"></script>


	<script type="text/javascript">

		jQuery(document).ready(function($) {
			"use strict";

			/*---------------------- Magnific Pop Up -------------------------*/

			$('.image-popup-vertical-fit').magnificPopup({
				type: 'image',
				closeOnContentClick: true,
				mainClass: 'mfp-img-mobile',
				image: {
					verticalFit: true
				}

			});

			/*---------------------- Retina -------------------------*/

		// Spoof the browser into thinking it is Retina
      // comment the next line out to make sure it works without retina
      window.devicePixelRatio = 2;



  });


	</script>


</body>
</html>
