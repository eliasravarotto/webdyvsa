@extends('frontend.layout')

@section('title_and_meta')
  <title>Derka y Vargas - Contacto</title>
  <meta name="description" content="Derka y Vargas Concesionario Oficial Toyota">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/contact-us" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="DERKA Y VARGAS S.A." />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('content')

<div class="container my-5">
	<div class="main-title my-4">
          <h2 class="text-dark-2">Datos para presupuesto</h2>
          <p class="text-dark-3">Dejanos tus datos y te enviaremos la info que necesites.</p>
    </div>
	<div class="row justify-content-center my-5">
		<div class="col-12 col-md-6 d-flex">
			<form id="myForm" class="w-100" action="{{route('presupuesto_convencional')}}" method="POST" role="form" autocomplete="off">
				{{ csrf_field() }}
				<div class="form-group row">
					<div class=" col-md-12">
						<div class="validate-input">
						    <input type="text" class="input100 form-control" name="cliente" placeholder="Apellido y Nombre" required value="{{old('cliente')}}">
							<label class="label-input100" for="cliente">
								<i class="fas fa-user"></i>
							</label>
						</div>
				  	</div>
				</div>
				<div class="form-group row">
				  	<div class="col-md-12">
						<div class="validate-input">
						    <input type="number" class="form-control input100" name="telefono" placeholder="Teléfono" value="{{old('telefono')}}">
							<label class="label-input100" for="telefono">
								<i class="fas fa-phone-alt"></i>
							</label>
							<span class="text-danger">
								{{  $errors->first('telefono') }}
							</span>
					  	</div>
				  	</div>
			  	</div>
				<div class="form-group row">
				  	<div class="col-md-5 d-flex align-items-center mt-3">
						<button type="submit"  class="btn btn-danger btn-lg btn-block"><i class="fas fa-paper-plane"></i> ENVIAR</button>
					</div>
			  	</div>
			</form>
		</div>
	</div>
</div>

@stop

@section('script')
<script type="text/javascript">
	   $('#myForm').one('submit', function() {
        $(this).find('button[type="submit"]').attr('disabled','disabled');
    });  
</script>
@stop