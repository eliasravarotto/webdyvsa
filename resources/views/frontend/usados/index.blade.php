@extends('layout')


@section('styles_sheets')
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('gallery/css/animate.css') }}">

	<link rel="stylesheet" href="{{ asset('gallery/css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('gallery/js/modernizr-2.6.2.min.js') }}"></script>
@stop

@section('content')
	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.5);', position: 'relative' }"></navbar-desk>

 <article>
	<div>
		<div class="container">
			<h3 style="font-family:ToyotaFont; color: #404048">ELEGI TU USADO</h3>
		</div>
	</div>
	<div class="container">
		<index-usados></index-usados>
	</div>
	
</article> 

@stop

@section('script')
	<!-- jQuery Easing -->
	<script src="/gallery/js/jquery.easing.1.3.js"></script>

	<!-- Waypoints -->
	<script src="/gallery/js/jquery.waypoints.min.js"></script>
	<!-- Portfolio Filter Mixitup -->
	<script type="text/javascript" src="/gallery/js/jquery.mixitup.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="/gallery/js/main.js"></script>

	<script type="text/javascript">
		$(function () {
			
			var filterList = {
			
				init: function () {
				
					// MixItUp plugin
					// http://mixitup.io
					$('#portfoliolist').mixItUp({
	  				selectors: {
	    			  target: '.portfolio',
	    			  filter: '.filter'	
	    		  },
	    		  load: {
	      		  filter: '.all'  
	      		}     
					});								
				
				}

			};
			
			// Run the show!
			filterList.init();
			
		});	
	</script>
@stop