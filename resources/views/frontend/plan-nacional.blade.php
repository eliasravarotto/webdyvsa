@extends('layout')

@section('title_and_meta')
  <title>Nuevo Plan Nacional Para tu 0km - Descuentos imperdibles</title>
  <meta name="description" content="Gobierno y terminales subsidian por un mes la venta de 0km. El Gobierno Nacional y la Asociación de Fabricantes de Automotores (ADEFA) lanzaron en conjunto el programa “Junio 0km”, que se extenderá durante 30 días y subsidiará la venta al público de automóviles cero kilómetro. Los descuentos serán de 50.000 pesos para vehículos cuyo precio de venta se ubique por debajo de los 750.000 pesos, mientras que para los de gama más alta el descuento alcanzará los 90.000 pesos. El techo de los descuentos son los impuestos internos: no correrá para aquellas unidades que tienen un precio al público que ronda los US$ 2,1 millones o más. Los utilitarios y las pick ups no estarán alcanzados por estos descuentos.">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/nuevo-plan-nacional" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Nuevo Plan Nacional Para tu 0km" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop


@section('content')
<div class="container">
		<h1>NUEVO PLAN NACIONAL</h1>

		<p class="text-muted">😁 👉¿Ya te enteraste de las promociones de Junio? TENEMOS DESCUENTOS IMPERDIBLES EN TU NUEVO TOYOTA‼️</p>

		<p class="text-muted">✅ Consúltanos Y SE DUEÑO DE UN TOYOTA 0 KM 🚗🚙 </p>
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="col-xs-12">
						<img style="border-radius: 5px;" src="{{asset('imagenes/financiacion/innova.png')}}" class="img-responsive" alt="Nuevo Plan Nacional Para tu 0km">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-12">
						<img style="border-radius: 5px;" src="{{asset('imagenes/financiacion/corolla.png')}}" class="img-responsive" alt="Nuevo Plan Nacional Para tu 0km">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-12">
						<img style="border-radius: 5px;" src="{{asset('imagenes/financiacion/yaris.png')}}" class="img-responsive" alt="Nuevo Plan Nacional Para tu 0km">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-12">
						<img style="border-radius: 5px;" src="{{asset('imagenes/financiacion/etios.png')}}" class="img-responsive" alt="Nuevo Plan Nacional Para tu 0km">
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="containe">
				<div class="row" style="padding-top: 15px; padding-bottom: 15px; border-radius: 7px; background-color: rgb(224, 226, 230)">
					<div class="col-md-12">
						<form id="form" class="form-horizontal" action="/contacto" method="POST" role="form" autocomplete="off">
							{{ csrf_field() }}
							<input type="hidden" name="from" value="financiacion_plan_nacional">
							<div class="row">
								<div class=" col-md-12">
							    <label class="control-label">Nombre y Apellido</label>
							    <input type="text" class="form-control" name="cliente" required value="{{old('cliente')}}">
						  	</div>
						  	<div class=" col-md-12">
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
								<div class="col-md-12">
									<div class="g-recaptcha" 
								           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
								    </div>
									@if ($errors->has('g-recaptcha-response'))
									    <span class="text-danger">
									        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
									    </span>
									@endif
								</div>
								<div class="col-md-12">
									{{-- <button type="submit" class="btn btn-default btn-submit">ENVIAR</button> --}}
									{{-- <button type="submit"  class="btn btn-default">ENVIAR</button> --}}
									<input type="submit" class="btn btn-default btn-block" value="ENVIAR">
								</div>
							</div>
						</form>
					</div>
				</div>
				<br>
				<div class="row" style="padding-top: 15px; padding-bottom: 15px; border-radius: 7px; background-color: rgb(224, 226, 230)">
					<div class="col-md-12">
						<p style="font-size: 1.9rem">Consultanos por Whatsapp</p>
						<a href="https://wa.me/5493644178456?text=Hola%20estoy%20interesado/a%20en%20el%20nuevo%20plan%20nacional" target="_blank" class="btn btn-default d-block" style="font-size: 16px;"><i class="fa fa-whatsapp" style="font-size: 20px; font-weight: bold; color: rgb(19, 130, 10);"></i>
		                    CONSULTAR
		                </a>
		            </div>
	            </div>
	            </div>
			</div>
		</div>

	
</div>
@stop
