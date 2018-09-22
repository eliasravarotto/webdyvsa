@extends('layout')


@section('styles_sheets')
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('gallery/css/animate.css') }}">

	<link rel="stylesheet" href="{{ asset('gallery/css/style.css') }}">
@stop

@section('content')
<!-- Navbar Desktop -->
<navbar-desk v-bind:data="{ bg_color:'#292828', position: 'relative' }"></navbar-desk>
<article>
	<div>
		<div class="container">
			<h3 style="font-family:ToyotaFont; color: #404048">TOYOTA COROLLA XEI</h3>
		</div>
	</div>
	<div class="container">
		<show-usado></show-usado>
	</div>

</article> 
@stop