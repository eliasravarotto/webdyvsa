@extends('frontend.layout')

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
<style type="text/css">
	.fz-20{
	font-size: 20px;
}

span.bg-red{
	background-color: #f30827;
}
#tabla-agrupados thead tr{
	background-color: #ea1b2f;
}
#tabla-agrupados tbody td{
	padding: 0.75rem 0.2rem;
}
.ul-agrupados .header{
	padding: 15px 0px;
	font-weight: bold;
}
.ul-agrupados .details{
	color: #6c757d!important;
	margin-left: 5px
}
.ul-agrupados li{
	background-color: #dbdbdb;
}
.ul-agrupados li .badge{
	font-size: 15px;
	line-height: initial;
}
</style>
@stop

@section('content')
<section>
	<div class="mu-call-to-action mu-call-to-action-dark bg-header-tpa-avanzados">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-call-to-action-area d-flex justify-content-space-around">
						<div class="mu-call-to-action-left">
							<h1 class="white"> Planes Avanzados<br> <small style="color: #d8d8d8">Oportunidades</small></h1>
							{{-- <p class="fs-17">Solicitá una pruba de manejo completando el formulario. Un asesor se comunicará con usted para confirmar la disponibilidad.</p> --}}
						</div>
						<div style="margin-top: 15px">
							<a href="#" class="mu-btn mu-white-btn" onclick="masDetalles(event)">CONSULTAR <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div id="lista-agrupados" class="pb-2">
		@if(sizeof($agrupados)>0)
			<div class="row py-4">
				<div class="col-xs-12 d-flex">
					<!-- TABLA PARA DESCKTOP -->
					<table id="tabla-agrupados" class="table table-hover py-1 d-none d-sm-none d-md-block" style="margin:20px 0px; ">
					    <thead>
					      <tr>
					        <th class="text-center w-10" style="color: white; font-weight: bold;">G/O</th>
					        <th class="text-center w-20" style="color: white; font-weight: bold;">Unidad</th>
					        <th class="text-center w-10" style="color: white; font-weight: bold;">Modalidad</th>
					        <th class="text-center w-10" style="color: white; font-weight: bold;">Avance Cuotas</th>
					        <th class="text-center w-10" style="color: white; font-weight: bold;">Precio Venta Bonificado</th>
					        <th class="text-center" style="color: white; font-weight: bold; background-color: white; border-bottom: none; width: 15px"></th>
					        <th class="text-center w-10" style="color: white; font-weight: bold;">Cuota Pura</th>
					        <th class="text-center w-10" style="color: white; font-weight: bold;">Avance del Plan en Cuota Pura</th>
					        <th class="text-center w-10" style="color: white; font-weight: bold;">Valor Ahorrado</th>
					      </tr>
					    </thead>
					    <tbody>
					    	@foreach($agrupados as $agrupado)
						      <tr>
						        <td class="text-center text-muted" style="font-weight: bold;">{{$agrupado->grupo_orden}}</td>
						        <td class="text-center text-muted" style="font-weight: bold;">{{$agrupado->planTpa()->first()->unidad}}</td>
						        <td class="text-center text-muted" style="font-weight: bold;">{{$agrupado->planTpa()->first()->modalidad}}</td>
						        <td class="text-center text-muted" style="font-weight: bold;">{{$agrupado->avance_cuotas}}</td>
						        <td class="text-center text-muted" style="font-weight: bold;">
						        	<span class="badge badge-success" style=" font-size: 17px;">$ {{number_format($agrupado->precio_venta, 2, ',', '.')}}</span>
						        </td>
						        <td class="text-center" style="font-weight: bold; border-top: none;"></td>
						        <td class="text-center" style="font-weight: bold;">$ {{number_format($agrupado->planTpa()->first()->cuota_pura, 2, ',', '.')}}</td>
						        <td class="text-center" style="font-weight: bold;">
						        	$ {{number_format($agrupado->avance_en_cuotaspura, 2, ',', '.')}}
						        </td>
						        <td class="text-center" style="font-weight: bold;">
						        	<span class=" badge badge-secondary" style=" font-size: 17px">
						        	$ {{number_format($agrupado->valor_ahorrado, 2, ',', '.')}}
						        	</span>
						        </td>
						      </tr>
					      	@endforeach
					    </tbody>
				  	</table>

				</div>
			</div>
		  	
		  	<ul class="ul-agrupados list-group list-group-flush d-block d-sm-block d-md-none py-4">
				@foreach($agrupados as $agrupado)
				  <li class="list-group-item">
				  	<div class="header d-flex mx-0">
					  	<div class="d-flex flex-column w-100">
						  	<div class="d-flex justify-content-space-between w-100">
						  		<div>{{ $agrupado->planTpa()->first()->unidad }}</div>
						  		<span class="badge badge-success">$ {{number_format($agrupado->precio_venta, 2, ',', '.') }}</span>
						  	</div>
						  	<div class="d-flex w-100">
						  		<div class="font-weight-normal text-muted">Modalidad: </div>
						  		<div class="font-weight-normal ml-1 text-muted">{{ $agrupado->planTpa()->first()->modalidad }}</div>
						  	</div>
					  	</div>
				  	</div>
				  	<div class="details d-flex">
				  		<div>Grupo/Orden: </div>
				  		<div class="font-weight-bold ml-2">{{ $agrupado->grupo_orden }}</div>
				  	</div>
				  	<div class="details d-flex">
				  		<div>Avance cuotas: </div>
				  		<div class="font-weight-bold ml-2">{{ $agrupado->avance_cuotas }}</div>
				  	</div>
				  	<div class="details d-flex">
				  		<div>Cuota Pura: </div>
				  		<div class="font-weight-bold ml-2">$ {{number_format($agrupado->planTpa()->first()->cuota_pura, 2, ',', '.')}}</div>
				  	</div>
				  	<div class="details d-flex">
				  		<div>Avance del Plan en Cuota Pura: </div>
				  		<div class="font-weight-bold ml-2">$ {{number_format($agrupado->avance_en_cuotaspura, 2, ',', '.')}}</div>
				  	</div>
				  	<div class="details d-flex">
				  		<div class="text-dark">Valor Ahorrado: </div>
				  		<div class="font-weight-bold ml-2 text-dark">$ {{number_format($agrupado->valor_ahorrado, 2, ',', '.')}}</div>
				  	</div>
				  </li>
	    		@endforeach
			</ul>
  		@endif

		@if(sizeof($agrupados)==0)
		  	<div role="alert" class="my-5 alert alert-info text-center"><i data-v-773d8506="" class="fas fa-info-circle" aria-hidden="true"></i> Por el momento no contamos con planes avanzados para la venta.</div>
	  	@endif
	</div>
	
	<div class="row">
		<div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12" id="form-contacto">
			<div class="main-title">
				<h2 class="text-dark-2">CONSULTA POR NUESTROS PLANES AGRUPADOS </h2>
				<p class="text-dark-3">Un asesor se pondrá en contacto con usted a la brevedad.</p>
			</div>
			@include('frontend.plan-de-ahorro.includes.contact-form', $data=['from' => 'tpa'])
		</div>
	</div>
</div>

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