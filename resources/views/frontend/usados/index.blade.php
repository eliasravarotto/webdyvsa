@extends('layout')

@section('title_and_meta')
  <title>Autos Usados</title>
  <meta name="description" content="Derka y Vargas Usados Seleccionados, Usados Certificados Toyota Chaco, financiacion usados, autos usados en cuotas, autos usados en Villa Angela, autos usados en Saenz peña, autos usados en Charata, autos usados en Resistencia, autos usados en Chaco">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/usados" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="DERKA Y VARGAS USADOS" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('styles_sheets')
        <style type="text/css">
            .precio{
                    background-color: #797979;
                    color: #fafafa !important;
            }

            .caption {
			    background-color: #d2a7bf;
			}

			.caption-default>h3, .caption-default>h4, .text-shadow {
			    color: #ffffff!important;
			}

			.thumbnail .caption {
				color: white;
			}
			.btn-celeste-pastel {
			    background-color: #5a8cb5;
			    color: #fff;
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
				<ol class="breadcrumb mt-3">
	              <li><a href="/">Inicio</a></li>
	              <li class="active">Usados</li>
	            </ol>
					
				<index-usados v-bind:data="{ unidades: {{ $unidades }} }"></index-usados>

				<div class="row">
					<div class="col-sm-12 col-md-6 col-md-offset-3">
						<div id="contacto-form" @if($errors->isEmpty()) @endif>
						<div class="page-header"><h2>CONSULTAR</h2></div>
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
							<div class="alert alert-info mt-3" role="alert"><p>Un asesor de ventas se pondrá en contacto con usted a la brevedad.</p></div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</article> 

@stop

@section('script')
    <!-- Google FCM -->
    {{-- <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-messaging.js"></script>
    <script src="{{ asset('js/sw-push-msg.js') }}"></script> --}}
    <!-- end -->
    <script type="text/javascript">
    	$('#contacto-form').on('shown.bs.collapse', function (e) {
        $('#cli').focus();
    })
    </script>
@stop