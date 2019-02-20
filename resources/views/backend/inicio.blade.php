@extends('backend.layout')

@section('stylesheet')
<style type="text/css">
	
</style>
@stop

@section('content')
<div class="row">
	<div class="col-sm-12 col-md-4 my-1">
		<div class="card tarjeta-dash">
  			<div class="card-body">
  				<div>
  					<p><i class="fa fa-envelope-o bg-circulo-white"></i></p>
  				</div>
  				<div>
    				<h3>51</h3>
    				<h6>Total de consultas</h6>
    				<p>Contacto - Tpa - Financiación - Usados </p>
  				</div>
  			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-4 my-1">
		<div class="card tarjeta-dash">
  			<div class="card-body">
  				<div>
  					<i class="fa fa-clipboard bg-circulo-white"></i>
  				</div>
    			<div>
    				<h3>20</h3>
    				<h6>Total de turnos</h6>
    				<p>Servicios de posventa </p>
  				</div>
  			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-4 my-1">
		<div class="card tarjeta-dash">
  			<div class="card-body">
  				<div>
  					<i class="fa fa-users bg-circulo-white"></i>
  				</div>
    			<div>
    				<h3>1</h3>
    				<h6>Total de usuarios</h6>
    				<p>Usuarios registrados</p>
  				</div>
  			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12 col-md-4 my-1">
		<div class="card tarjeta-dash">
  			<div class="card-body">
  				<div>
  					<i class="fa fa-car bg-circulo-white "></i>
  				</div>
    			<div>
    				<h3>13</h3>
    				<h6>Total de modelos</h6>
    				<p>Modelos 0KM.</p>
  				</div>
  			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-4 my-1">
		<div class="card tarjeta-dash">
  			<div class="card-body">
  				<div>
  					<i class="material-icons bg-circulo-white" style="font-size: 3rem !important">directions_car</i>
  				</div>
    			<div>
    				<h3>1</h3>
    				<h6>Total de usados</h6>
    				<p>Disponibles para la venta</p>
  				</div>
  			</div>
		</div>
	</div>
</div>
@stop

@section('page-script')

@stop