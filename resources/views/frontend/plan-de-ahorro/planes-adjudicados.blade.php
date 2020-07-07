@extends('frontend.layout')

@section('title_and_meta')
  <title>Plan de Ahorro - Planes Adjudicados</title>
  <meta name="description" content="Plan de Ahorro Toyota. Planes adjudicados en Resistencia, Charata, Saenz Peña, Villa Angela, Toyota Cuotas Sin Interes, Plan sin interes Toyota, Plan de Ahorro Etios, Plan de Ahorro Hilux, Plan de Ahorro Yaris, Plan de Ahorro Corolla, Que es un plan de ahorro. Autos 100% financiados sin interes. Toyota 100% financiado. Planes avanzados listos para licitar">
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
#tabla-adjudicados thead tr{
	background-color: #ea1b2f;
}
#tabla-adjudicados tbody td{
	padding: 0.75rem 0.2rem;
}
.ul-adjudicados .header{
	padding: 15px 0px;
	font-weight: bold;
}
.ul-adjudicados .details{
	color: #6c757d!important;
	margin-left: 5px
}
.ul-adjudicados li{
	background-color: #dbdbdb;
}
.ul-adjudicados li .badge{
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
							<h1 class="white"> Planes Adjudicados <br> <small style="color: #d8d8d8">Oportunidades</small></h1>
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
		<div id="lista-adjudicados" class="pb-2">
			@if(sizeof($adjudicados)>0)
				<div class="row py-4">
					<div class="col-xs-12 d-flex">
						<!-- TABLA PARA DESCKTOP -->
						<table id="tabla-adjudicados" class="table table-hover py-1 d-none d-sm-none d-md-block" style="margin:20px 0px; ">
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
						    	@foreach($adjudicados as $adjudicado)
							      <tr>
							        <td class="text-center text-muted" style="font-weight: bold;">{{$adjudicado->grupo_orden}}</td>
							        <td class="text-center text-muted" style="font-weight: bold;">{{$adjudicado->planTpa()->first()->unidad}}</td>
							        <td class="text-center text-muted" style="font-weight: bold;">{{$adjudicado->planTpa()->first()->modalidad}}</td>
							        <td class="text-center text-muted" style="font-weight: bold;">{{$adjudicado->avance_cuotas}}</td>
							        <td class="text-center text-muted" style="font-weight: bold;">
							        	<span class="badge badge-success" style=" font-size: 17px;">$ {{number_format($adjudicado->precio_venta, 2, ',', '.')}}</span>
							        </td>
							        <td class="text-center" style="font-weight: bold; border-top: none;"></td>
							        <td class="text-center" style="font-weight: bold;">$ {{number_format($adjudicado->planTpa()->first()->cuota_pura, 2, ',', '.')}}</td>
							        <td class="text-center" style="font-weight: bold;">
							        	$ {{number_format($adjudicado->avance_en_cuotaspura, 2, ',', '.')}}
							        </td>
							        <td class="text-center" style="font-weight: bold;">
							        	<span class=" badge badge-secondary" style=" font-size: 17px">
							        	$ {{number_format($adjudicado->valor_ahorrado, 2, ',', '.')}}
							        	</span>
							        </td>
							      </tr>
						      	@endforeach
						    </tbody>
					  	</table>

					</div>
				</div>
			  	
			  	<ul class="ul-adjudicados list-group list-group-flush d-block d-sm-block d-md-none py-4">
					@foreach($adjudicados as $adjudicado)
					  <li class="list-group-item">
					  	<div class="header d-flex mx-0">
						  	<div class="d-flex flex-column w-100">
							  	<div class="d-flex justify-content-space-between w-100">
							  		<div>{{ $adjudicado->planTpa()->first()->unidad }}</div>
							  		<span class="badge badge-success">$ {{number_format($adjudicado->precio_venta, 2, ',', '.') }}</span>
							  	</div>
							  	<div class="d-flex w-100">
							  		<div class="font-weight-normal text-muted">Modalidad: </div>
							  		<div class="font-weight-normal ml-1 text-muted">{{ $adjudicado->planTpa()->first()->modalidad }}</div>
							  	</div>
						  	</div>
					  	</div>
					  	<div class="details d-flex">
					  		<div>Grupo/Orden: </div>
					  		<div class="font-weight-bold ml-2">{{ $adjudicado->grupo_orden }}</div>
					  	</div>
					  	<div class="details d-flex">
					  		<div>Avance cuotas: </div>
					  		<div class="font-weight-bold ml-2">{{ $adjudicado->avance_cuotas }}</div>
					  	</div>
					  	<div class="details d-flex">
					  		<div>Cuota Pura: </div>
					  		<div class="font-weight-bold ml-2">$ {{number_format($adjudicado->planTpa()->first()->cuota_pura, 2, ',', '.')}}</div>
					  	</div>
					  	<div class="details d-flex">
					  		<div>Avance del Plan en Cuota Pura: </div>
					  		<div class="font-weight-bold ml-2">$ {{number_format($adjudicado->avance_en_cuotaspura, 2, ',', '.')}}</div>
					  	</div>
					  	<div class="details d-flex">
					  		<div class="text-dark">Valor Ahorrado: </div>
					  		<div class="font-weight-bold ml-2 text-dark">$ {{number_format($adjudicado->valor_ahorrado, 2, ',', '.')}}</div>
					  	</div>
					  </li>
		    		@endforeach
				</ul>
		  	@endif

			@if(sizeof($adjudicados)==0)
			  	<div role="alert" class="my-5 alert alert-info text-center"><i data-v-773d8506="" class="fas fa-info-circle" aria-hidden="true"></i> Por el momento no contamos con planes adjudicados para la venta.</div>
		  	@endif
			
		</div>
	
		<div class="row">
			<div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12" id="form-contacto">
				<div class="main-title">
					<h2 class="text-dark-2">CONSULTA POR NUESTROS PLANES ADJUDICADOS </h2>
					<p class="text-dark-3">Un asesor se pondrá en contacto con usted a la brevedad.</p>
				</div>
				@include('frontend.plan-de-ahorro.includes.contact-form', $data=['from' => 'tpa'])
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