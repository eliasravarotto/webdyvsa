@extends('layout')

@section('title_and_meta')
  <title>Plan de Ahorro - Planes avanzados</title>
  <meta name="description" content="Plan de Ahorro Toyota Resistencia, Charata, Saenz Peña, Villa Angela, Toyota Cuotas Sin Interes, Plan sin interes Toyota, Plan de Ahorro Etios, Plan de Ahorro Hilux, Plan de Ahorro Yaris, Plan de Ahorro Corolla, Que es un plan de ahorro. Autos 100% financiados sin interes. Toyota 100% financiado. Planes avanzados listos para licitar">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/plan-de-ahorro" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="PLANES AVANZADOS DERKA Y VARGAS" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('styles_sheets')
@stop

@section('content')
<section>
	<div class="mu-call-to-action mu-call-to-action-dark bg-header-tpa-avanzados">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-call-to-action-area d-flex justify-content-space-around">
						<div class="mu-call-to-action-left">
							<h1> <b>PLANES ADJUDICADOS</b><br> <small style="color: #d8d8d8">Oportunidades</small></h1>
						</div>
						<div style="margin-top: 15px">
							<a href="#" class="mu-btn mu-white-btn" onclick="masDetalles(event)">CONSULTAR <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row py-4">
			<div class="col-xs-12 d-flex">
				<table id="tabla-agrupados" class="table table-hover py-1" style="margin:20px 0px; ">
				    <thead>
				      <tr style="background-color: #af8e8e">
				        <th class="text-center" style="color: white; font-weight: bold;">G/O</th>
				        <th class="text-center" style="color: white; font-weight: bold;">Unidad</th>
				        <th class="text-center visible-md visible-lg" style="color: white; font-weight: bold;">Modalidad</th>
				        <th class="text-center" style="color: white; font-weight: bold;">Avance Cuotas</th>
				        <th class="text-center" style="color: white; font-weight: bold;">Precio Venta Bonificado</th>
				        <th class="text-center" style="color: white; font-weight: bold; background-color: white; border-bottom: none; width: 35px"></th>
				        <th class="text-center" style="color: white; font-weight: bold;">Cuota Pura</th>
				        <th class="text-center" style="color: white; font-weight: bold;">Valor Avance del Plan en Cuota Pura</th>
				      </tr>
				    </thead>
				    <tbody>
				    	@foreach(\App\Helpers\Helper::getAdjudicados() as $agrupado)
					      <tr>
					        <td class="text-center" style="font-weight: bold;">{{$agrupado->grupo}}/{{$agrupado->orden}}</td>
					        <td class="text-center" style="font-weight: bold;">{{$agrupado->unidad}}</td>
					        <td class="text-center visible-md visible-lg" style="font-weight: bold;">{{$agrupado->modalidad}}</td>
					        <td class="text-center" style="font-weight: bold;">{{$agrupado->avance_cuotas}}</td>
					        <td class="text-center" style="font-weight: bold;"><span class="badge" style="background-color: #f30827; font-size: 17px">$ {{number_format($agrupado->precio_venta, 2, ',', '.')}}</span></td>
					        <td class="text-center" style="font-weight: bold; border-top: none;"></td>
					        <td class="text-center" style="font-weight: bold;">$ {{number_format($agrupado->cuota_pura, 2, ',', '.')}}</td>
					        <td class="text-center" style="font-weight: bold;">$ {{number_format( $agrupado->cuota_pura*$agrupado->avance_cuotas , 2, ',', '.')}}</td>
					      </tr>
					      @endforeach
				    </tbody>
			  	</table>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12" id="form-contacto">
							<h2>CONSULTÁ POR NUESTROS PLANES ADJUDICADOS <br>
							<small>Un asesor se pondrá en contacto con usted a la brevedad.</small></h2>
							<form id="form" class="form-horizontal" action="/contacto" method="POST" role="form" autocomplete="off">
								{{ csrf_field() }}
								<input type="hidden" name="from" value="tpa">
								<div class="row">
									<div class=" col-md-6">
								    <label class="control-label">Nombre y Apellido</label>
								    <input type="text" class="form-control cliente" name="cliente" required value="{{old('cliente')}}">
							  	</div>
							  	<div class=" col-md-6">
								    <label class="control-label">Teléfono</label>
								    <input type="text" class="form-control" name="telefono" required value="{{old('telefono')}}">
							  	</div>
								</div>
								<div class="row">
									<div class=" col-md-12">
										<label class="control-label">Email</label>
								    <input type="email" class="form-control" name="email" value="{{old('email')}}">
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
										<input type="submit" class="btn btn-default btn-round" name="ENVIAR">
									</div>
								</div>
							</form>
						</div>
		</div>
	</div>
</section>

@stop

@section('script')
<script>
function masDetalles(e){
		e.preventDefault();
		$('html,body').animate({
	        scrollTop: $("#form-contacto").offset().top
	    }, 'slow');
	    $(".cliente").focus();
	}
</script>
@stop