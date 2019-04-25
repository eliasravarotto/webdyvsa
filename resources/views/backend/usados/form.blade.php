<div>
	<div class="row"> 
		<div class="col-sm-12 col-md-8">
			<div class="row">
				<div class="col-md-3">
					<div class="form-group requerido">
						<label class="control-label mb-1">Marca</label>
						<input name="marca" type="text" class="form-control" value="{{ $usado->marca }}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group requerido">
						<label class="control-label mb-1">Modelo</label>
						<input name="modelo" type="text" class="form-control" value="{{ $usado->modelo }}" placeholder="Modelo Version">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group requerido">
						<label class="control-label mb-1">Año</label>
						<input name="anio" type="number" size="4" maxlength="4" class="form-control" value="{{ $usado->anio }}">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group requerido">
						<label class="control-label mb-1">Color</label>
						<input name="color" type="text" class="form-control" value="{{ $usado->color }}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label mb-1">Km</label>
						<input name="km" type="text" class="form-control" value="{{ $usado->km }}" placeholder="ej: 20.000">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label mb-1">Dominio</label>
						<input name="dominio" type="text" class="form-control" value="{{ $usado->dominio }}">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label mb-1">Int.</label>
						<input name="interno" type="text" class="form-control" value="{{ $usado->interno }}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label mb-1">Precio</label>
						<input name="precio" type="number" class="form-control" value="{{ $usado->precio }}" placeholder="ej: 380000">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label mb-1">Combustible</label>
						<select class="form-control" name="combustible">
							<option @if($usado->combustible == null) selected @endif></option>
							<option value="NAFTA" @if($usado->combustible == 'NAFTA') selected @endif>NAFTA</option>
							<option value="DIESEL" @if($usado->combustible == 'DIESEL') selected @endif>DIESEL</option>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label mb-1">Transmisión</label>
						<select class="form-control" name="transmision">
							<option @if($usado->transmision == null) selected @endif></option>
							<option @if($usado->transmision == 'MANUAL') selected @endif value="MANUAL">MANUAL</option>
							<option @if($usado->transmision == 'AUTOMÁTICA') selected @endif value="AUTOMÁTICA">AUTOMÁTICA</option>
						</select>
					</div>
				</div>
				<div class="col-md-2">
				<div class="form-group">
				  <label class="control-label mb-1">UCT</label>
				  <select class="form-control" name="uct">
						<option @if($usado->uct == 0) selected @endif value="0">NO</option>
						<option @if($usado->uct == 1) selected @endif value="1">SI</option>
					</select>
				</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div id="div_file">
			 	{{-- <img id='output'> --}}
			 	@if($usado->foto != null)
			 		<img id='output' style="width: 155px; margin-bottom: 10px;" src="{{$usado->foto}}" alt="">
			 	@else
			 		<img id='output' style="width: 155px; margin-bottom: 10px;" src="/imagenes/default-img.png" alt="">
			    @endif
			    <p id="texto">Click o Arrastrar para cambiar imagen</p>
			    <input type='file' name="foto" accept='image/*' onchange='openFile(event)' title=" ">
			 </div>
			{{-- <div class="form-group">
				<label class="control-label mb-1">Foto</label>
				<input type="file" name="foto">
			</div> --}}
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label class="control-label mb-1">Descripcion</label>
				<textarea class="form-control" name="descripcion">{{ $usado->descripcion }}</textarea>
			</div>
		</div>
	</div>

<div class="card">
	<div class="card-body">
@if($usado->id)
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4><i class="fa fa-picture-o"></i> Galeria de Imagenes</h4>
			</div>
			<div class="col-md-6 text-right">
				<a href="#" onclick="addNewField(event)" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="row my-3">
			@foreach($imagenes_galeria as $imagen)
			<div class="col-md-3">
				<div class="thumbnail" style="position: relative;">
                      	<a href="{{ route('borrar_img_usado', $imagen->id) }}" style="position: absolute;" onclick="return confirm('Desea eliminar la imagen?');" class="btn btn-danger delete-user">
                      		<i class="fa fa-trash"></i>
                      	</a>
	      			<img src="{{$imagen->url}}" alt="..." style="width: 190px;">
	      		</div>
			</div>
      		@endforeach
		</div>
		<div id="images_new" class="my-3"></div>
	</div>
@else
	<br>
	<div id="images">
		<div class="row">
			<div class="col-md-6">
				<h4><i class="fa fa-picture-o" aria-hidden="true"></i> Galeria de Imagenes</h4>
			</div>
			<div class="col-md-6 text-right">
				<a style="color: white" onclick="addField()" class="btn btn-primary "><i class="fa fa-plus" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
@endif
	</div>
</div>
<div class="row my-1">
	<div class="col-md-12">
		<p class="text-danger">(*) Campos obligatorios</p>
	</div>
</div>

</div>

@section('page-script')
	<script type="text/javascript">
		var index = 0;
		function addField(){
	        var field = `
	              	<div class="input-group my-2" id="field_${index}">
					  <div class="custom-file">
					    <input name="img_galeria[]" type="file" class="custom-file-input" onchange="updateNameImg(${index})" id="file_${index}">
					    <label class="custom-file-label" id="label_img_${index}">Seleccionar imagen</label>
					  </div>
					  <div class="input-group-append">
					    <button class="btn btn-outline-danger" type="button" onclick="removeField(event,${index})">
					    	<i class="fa fa-trash" aria-hidden="true"></i>
					    </button>
					  </div>
					</div>
	              `
	        ;
	        $('#images').append(field);
	        index++;
	    }
	    function removeField(e, index){
	    	e.preventDefault();
	    	$( "#field_"+index ).remove();
	    }

	    function updateNameImg(index){
	    	console.log(index);
	    	var name = document.getElementById('file_'+index).value.split(/(\\|\/)/g).pop();
	    	$('#label_img_'+index).html(name);
	    }

	    function addNewField(e){
	    	e.preventDefault();
	    	console.log('new');
	    	var field = `
	              	<div class="input-group my-2" id="field_${index}">
					  <div class="custom-file">
					    <input name="nuevas_imagenes[]" type="file" class="custom-file-input" onchange="updateNameImg(${index})" id="file_${index}">
					    <label class="custom-file-label" id="label_img_${index}">Seleccionar imagen</label>
					  </div>
					  <div class="input-group-append">
					    <button class="btn btn-outline-danger" type="button" onclick="removeField(event,${index})">
					    	<i class="fa fa-trash" aria-hidden="true"></i>
					    </button>
					  </div>
					</div>
	              `
	        ;
	        $('#images_new').append(field);
	        index++;
	    }

	    //Script field foto
	    var openFile = function(event) {
	    var input = event.target;

	    var reader = new FileReader();
	    reader.onload = function(){
	      var dataURL = reader.result;
	      var output = document.getElementById('output');
	      output.src = dataURL;
	    };
	    reader.readAsDataURL(input.files[0]);
	  };

	</script>
@stop