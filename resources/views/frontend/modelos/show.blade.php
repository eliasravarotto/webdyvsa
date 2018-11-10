@extends('layout')

@section('content')

	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.5);', position: 'relative' }"></navbar-desk>

	<detalle-modelo 
		v-bind:data="{ 
						modelo: {{ $modelo }}, 
						imagenesSlider: {{ $imagenesSlider }}, 
						imagenesColores: {{ $imagenesColores }}, 
						imagenesGaleria: {{ $imagenesGaleria }},
						caracteristicas: {{ $caracteristicas }},
						parallax: {{ $parallax }},
						versiones: {{ $versiones }} }">
	</detalle-modelo>

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