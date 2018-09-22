@extends('layout')

@section('content')

	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_color:'#292828', position: 'relative' }"></navbar-desk>
 
	<detalle-modelo></detalle-modelo>

@stop

@section('script')
<script type="text/javascript">
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();

	    if (scroll >= 850) {
	        $(".et-waypoint").removeClass("slide-left");
	        $(".et-waypoint").addClass("slide-left-show");
	    } 
	});
</script>
@stop