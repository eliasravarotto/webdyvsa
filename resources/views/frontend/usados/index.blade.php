@extends('layout')
        <style type="text/css">
            .precio{
                    background-color: #016a87;
                    color: #fafafa !important;
                    text-shadow: 0px 0px 0px #ffffff;
            }
        </style>

@section('styles_sheets')
@stop

@section('content')
	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.5);', position: 'relative' }"></navbar-desk>
	
	<article>
		<section>
			<div class="container">
				<div class="page-header">
				  <h1>ELEGÍ TU USADO<small></small></h1>
				</div>
				<div class="row container">
					<button class="btn btn-toyota btn-lg pull-right" data-toggle="modal" data-target="#contacto">
						<i class="fa fa-envelope-o"></i> CONSULTAR
					</button>
				</div>
				<br>
				<index-usados v-bind:data="{ unidades: {{ $unidades }} }"></index-usados>
			</div>
		</section>
	</article> 

@stop

@section('script')
	<!-- jQuery Easing -->
	{{-- <script src="/gallery/js/jquery.easing.1.3.js"></script> --}}

	<!-- Waypoints -->
	{{-- <script src="/gallery/js/jquery.waypoints.min.js"></script> --}}
	<!-- Portfolio Filter Mixitup -->
	{{-- <script type="text/javascript" src="/gallery/js/jquery.mixitup.min.js"></script> --}}

	<!-- Main JS (Do not remove) -->
	{{-- <script src="/gallery/js/main.js"></script> --}}
@stop