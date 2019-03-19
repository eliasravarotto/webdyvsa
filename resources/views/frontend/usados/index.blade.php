@extends('layout')

@section('styles_sheets')
        <style type="text/css">
            .precio{
                    background-color: #016a87;
                    color: #fafafa !important;
                    text-shadow: 0px 0px 0px #ffffff;
            }
        </style>
@stop

@section('mark-up-facebook')
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Usados Destacados" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('content')
	
	<article>
		<section>
			<div class="container">
				<div class="row">
					<div class="page-header flex justify-content-space-between" style="flex-direction: row;">
	                    <h1>ELEGÍ TU USADO<small></small></h1>
	                    <div class="flex align-items-center">
	                        <button class="btn btn-toyota btn-lg" data-toggle="collapse" data-target="#contacto-form">
	                        <i class="fa fa-envelope-o"></i> CONSULTAR
	                        </button>
	                    </div>
					</div>
			    </div>
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div id="contacto-form" @if($errors->isEmpty()) class="collapse" @endif>
							<form id="form" class="form-horizontal" action="/contacto" method="POST" role="form" autocomplete="off">
								{{ csrf_field() }}
								<input type="hidden" name="from" value="usados">
								<div class="row">
									<div class=" col-md-6">
								    <label class="control-label">Nombre y Apellido</label>
								    <input id="cli" type="text" class="form-control" name="cliente" required value="{{old('cliente')}}">
							  	</div>
							  	<div class=" col-md-6">
								    <label class="control-label">Teléfono</label>
								    <input type="text" class="form-control" name="telefono" value="{{old('telefono')}}">
									<span class="text-danger">
										{{  $errors->first('telefono') }}
									</span>
							  	</div>
								</div>
								<div class="row">
									<div class=" col-md-12">
										<label class="control-label">Email</label>
								    <input type="email" class="form-control" name="email" value="{{old('email')}}">
								    <span class="text-danger">
										{{  $errors->first('email') }}
									</span>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label class="control-label">Mensaje</label>
								    <textarea name="mensaje" class="form-control" required>{{old('mensaje')}}</textarea>
									</div>
								</div>
								<div class="row pad-top-20">
									<div class="col-md-6">
										<div class="g-recaptcha" 
									           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
									    </div>
										@if ($errors->has('g-recaptcha-response'))
										    <span class="text-danger">
										        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
										    </span>
										@endif
									</div>
									<div class="col-md-6 text-right">
										{{-- <button type="submit" class="btn btn-default btn-submit">ENVIAR</button> --}}
										{{-- <button type="submit"  class="btn btn-default">ENVIAR</button> --}}
										<input type="submit" class="btn btn-default" value="ENVIAR">
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				<br>
				<index-usados v-bind:data="{ unidades: {{ $unidades }} }"></index-usados>
			</div>
		</section>
	</article> 

@stop

@section('script')
    <!-- Google FCM -->
    <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-messaging.js"></script>
    <script src="{{ asset('js/sw-push-msg.js') }}"></script>
    <!-- end -->
    <script type="text/javascript">
    	$('#contacto-form').on('shown.bs.collapse', function (e) {
        $('#cli').focus();
    })
    </script>
@stop