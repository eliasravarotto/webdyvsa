@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - {{$modelo->nombre}}</title>
  <meta name="description" content="Derka y Vargas Toyota, {{$modelo->nombre}}, {{$modelo->nombre}} versiones, {{$modelo->nombre}} precios">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/modelos/etios" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Toyota {{$modelo->nombre}}" />
    <meta property="og:image" content="{{$modelo->img_modelo}}" />
@stop

@section('content')
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