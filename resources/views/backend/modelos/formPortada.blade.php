@extends('backend.layout')

@section('content')
<div class="card" id="form">
    <div class="card-header">
        <strong class="card-title">Portada {{ $modelo->nombre }}</strong>
    </div>
    <div class="card-body container">
    	<form action="/admin/modelos/{{ $modelo->id }}/edit/portada" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
		   {{ csrf_field() }}
	    	<div class="row">
		    	<div class="col-md-3">
					<div id="div_file">
					 	@if($modelo->portada()->first() != null)
					 		<img id='foto_desk' style="width: 155px; margin-bottom: 10px;" src="{{Storage::url($modelo->portada()->first()->imagen_desktop)}}" alt="">
					 	@else
					 		<img id='foto_desk' style="width: 155px; margin-bottom: 10px;" src="/imagenes/default-img.png" alt="">
					    @endif
					    <p id="texto">Imagen Desktop</p>
					    <input type='file' name="foto_desk" accept='image/*' onchange='openFile(event)' title=" ">
				 	</div>
				</div>
				<div class="col-md-3">
					<div id="div_file">
					 	@if($modelo->portada()->first() != null)
					 		<img id='foto_mobile' style="width: 155px; margin-bottom: 10px;" src="{{Storage::url($modelo->portada()->first()->imagen_mobile)}}" alt="">
					 	@else
					 		<img id='foto_mobile' style="width: 155px; margin-bottom: 10px;" src="/imagenes/default-img.png" alt="">
					    @endif
					    <p id="texto">Imagen Mobile</p>
					    <input type='file' name="foto_mobile" accept='image/*' onchange='openFile(event)' title=" ">
				 	</div>
				</div>
				<div class="col-md-3">
					<div id="div_file">
					 	@if($modelo->portada()->first() != null)
					 		<img id='foto_logo' style="width: 155px; margin-bottom: 10px;" src="{{Storage::url($modelo->portada()->first()->logo)}}" alt="">
					 	@else
					 		<img id='foto_logo' style="width: 155px; margin-bottom: 10px;" src="/imagenes/default-img.png" alt="">
					    @endif
					    <p id="texto">Logo</p>
					    <input type='file' name="foto_logo" accept='image/*' onchange='openFile(event)' title=" ">
				 	</div>
				</div>
	    	</div>
	    	<div class="row">
	    		<div class="col">
	    			<label>Html sobre la portada</label>
					@if($modelo->portada()->first() != null)
	    				<textarea name="html" class="form-control">{{$modelo->portada()->first()->html}}</textarea>
	    			@else
	    				<textarea name="html" class="form-control"></textarea>
	    			@endif
	    		</div>
	    	</div>

    		<input name="_method" type="hidden" value="PUT">
    		<input name="create" type="hidden" value="{{$modelo->portada()->first() == null ? 1 : 0}}">

			<div class="row form-group mt-5">
			  <div class="col-12">
			      <a class="btn btn-dark" href="/admin/modelos">
			        Cancelar
			      </a>
			      <button type="submit" class="btn btn-info">
			        Guardar
			      </button>
			  </div>
			</div>
    	</form>
	</div>
</div>
@stop

@section('page-script')
<script type="text/javascript">

	    

</script>
@stop