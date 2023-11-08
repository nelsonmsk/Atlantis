
<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">


<head>
 
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="env" content="{{ config('app.url') }}">

    <title>{{ config('app.name', 'ConstructionFirmApp') }}</title>

    <!-- Styles  -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">	
	<link href="{{ asset('material/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet"> 
	<link href="{{ asset('css/parsley.css') }}" rel="stylesheet"> 	 
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">	
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link href="css/shortcodes/shortcodes.css" rel="stylesheet">	
    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">	
      <!-- OWL CAROUSEL -->
    <link href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet" type="text/css">
	
    <link href="{{ asset('plugins/line-icons/line-icons.css') }}" rel="stylesheet">		
	<link href="{{ asset('plugins/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">	
	<link href="{{ asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

</head>


<body class="{{ $class ?? '' }}">
	<!--=== Preloader section starts ===-->
	<section id="preloader">
		<div class="loading-circle fa-spin"></div>
	</section>
	<!--=== Preloader section Ends ===-->
	@if (Route::has('login'))
       @auth
	   
	   		   	<form id="logoutForm" action="logout" method="POST" style="display: none;">
				{{csrf_token()}}
			   </form>
	  
			  @include('layouts.page_templates.auth')
		   
	   @else
	 
			   @include('layouts.page_templates.guest')
	 
		@endauth
		
    @endif
	  <!-- main Scripts -->
   
		<!-- <script src="{{ asset('js/app.js') }}"></script> -->
	
        <script src="{{ asset('material/js/core/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>		
		<script src="{{ asset('js/main.js') }}"></script>
	    
		<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
		<script src="{{ asset('js/load-image.all.min.js') }}"></script>
		<!-- The Canvas to Blob plugin is included for image resizing functionality -->
		<script src="{{ asset('js/canvas-to-blob.min.js') }}"></script>
		<script src="{{ asset('js/parsley.min.js') }}"></script>
      <!--   Core JS Files   -->
       <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
     <!--   <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script> -->
       <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
       <!-- Plugin for the momentJs  -->
       <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
       <!--  Plugin for Sweet Alert -->
      <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
       <!-- Forms Validations Plugin -->
       <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
       <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
      <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
       <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
      <!-- <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script> -->
      <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
       <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
	  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
      <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
      <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
       <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
      <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
       <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
     <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
      <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
      <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
     <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
      <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
      <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
     <!-- Library for adding dynamic elements -->
      <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
      <!--  Google Maps Plugin    -->
     <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script>	 
      <!-- Chartist JS -->
      <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
       <!--  Notifications Plugin    -->
      <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script> 
      <!-- Control Center for Dashboard: parallax effects, scripts for the example pages etc -->
       <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
 
      <!-- <script src="{{ asset('material') }}/js/settings.js"></script> -->
      <!-- Jquery-->
	  
      <script src="{{ asset('js/jquery.js') }}"></script>	 
      <script src="{{ asset('js/jquery.easing.min.js') }}"></script> 
	  
      <!-- Smooth Scroll--> 
      <script type="text/javascript" src="{{ asset('plugins/SmoothScroll/SmoothScroll.js') }}"></script>
      <!-- Stellar-->
      <script type="text/javascript" src="{{ asset('plugins/stellar/jquery.stellar.min.js') }}"></script> 
      <!-- Waypoint and Counters--> 
      <script type="text/javascript" src="{{ asset('plugins/counter/waypoints.min.js') }}"></script> 
      <script type="text/javascript" src="{{ asset('plugins/counter/jquery.counterup.min.js') }}"></script>
	  <!-- Purecounter counter for statistics numbers -->	
	   <script type="text/javascript" src="{{ asset('plugins/counter/purecounter.min.js') }}"></script> 
      <!--Magnific Popup-->
      <script type="text/javascript" src="{{ asset('plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>	  
      <!-- Owl Carousel--> 
      <script type="text/javascript" src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script>	
      <!--Wow Animation -->
      <script src="{{ asset('plugins/wow/wow.min.js') }}"></script>	
	  <script src="{{ asset('js/modernizr.js') }}"></script>	  
      <!--Fitvids-->
      <script type="text/javascript" src="{{ asset('plugins/fitvids/fitvids.js') }}"></script>
	  
	   <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	   <script src="{{ asset('plugins/glightbox/js/glightbox.min.js') }}"></script>
	   <script src="{{ asset('plugins/isotope-layout/isotope.pkgd.min.js') }}"></script>
	  <script src="{{ asset('plugins/swiper/swiper-bundle.min.js') }}"></script>	  
		
      <!--Custom JS-->
      <script src="{{ asset('js/custom.js') }}"></script>
	  <script src="{{ asset('plugins') }}/dropzone/dist/dropzone-min.js"></script> 
	  
	 @stack('js')  

</body>

</html>
