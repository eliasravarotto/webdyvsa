@extends('backend.sufee_admin.index')

@section('content')
<style type="text/css">
	.col-buttons-inline{
		display: flex;
		justify-content: 
		flex-start; 
		align-self: flex-end;
	}
	.col-buttons-inline > button{
		height: 59%;
		margin-right: 10px;
	}
</style>
<div class="card">
    <div class="card-header">
        <strong class="card-title" v-if="headerText">Nuevo Modelo</strong>
    </div>
    <div class="card-body">
    	<form action="{{ route('modelos.store') }}" method="post" novalidate="novalidate">
			{{ csrf_field() }}
			<div class="form-group row">
	          	<div class="offset-md-1 col-9">
				  <label for="cc-payment" class="control-label mb-1">Nombre</label>
				  <input name="nombre" type="text" class="form-control">
				</div>
			</div>
          
     		<div class="row form-group">
	          	<div class="offset-md-1 col-9">
	              	<label class="control-label mb-1">Colores</label>
      		    	<select class="js-example-basic-multiple form-control" name="colores[]" multiple="multiple">
					  <option value="1">Blanco</option>
					  <option value="2">Blanco Perla</option>
					  <option value="WY">Gris Plata</option>
					</select>
      			</div>
     		</div>
     		<div class="row form-group">
	          	<div class="offset-md-1 col-9">
	              	<label class="control-label mb-1">Versiones</label>
      		    	<select class="js-example-basic-multiple form-control" name="versiones[]" multiple="multiple">
					</select>
      			</div>
     		</div>
        
        	<div class="row form-group">
	          	<div class="offset-md-1 col-9">
					<button type="submit" class="btn btn-info">
					  <i class="fa fa-lock fa-lg"></i>&nbsp;
					  <span id="payment-button-amount">Guardar</span>
					</button>
	          	</div>
          	</div>
      	</form>
    </div>
</div>
@stop

@section('script')

<script type="text/javascript">
    $('.js-example-basic-multiple')
    	.select2({tags: true})
    	.select2('val','[1,2]');


  

</script>
@stop