@extends('layout')


@section('styles_sheets')
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('gallery/css/animate.css') }}">

	<link rel="stylesheet" href="{{ asset('gallery/css/style.css') }}">
@stop

@section('content')
<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.5);', position: 'relative' }"></navbar-desk>
<article>
{{-- 	<div>
		<div class="container">
			<h3 style="font-family:ToyotaFont; color: #404048">DETALLES</h3>
		</div>
	</div> --}}
	<div class="container mar-top-20">
		<show-usado v-bind:data="{ unidad: {{$unidad}}, imagenes: {{$imagenes}} }"></show-usado>
	</div>

</article> 
@stop