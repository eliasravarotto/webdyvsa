	<div class="row"> 
		<div class="col-sm-12 col-md-8">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group requerido">
						<label class="control-label mb-1">Título</label>
						<input name="titulo" type="text" class="form-control" value="{{ $post->titulo or old('titulo') }}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group requerido">
						<label class="control-label mb-1">Tema</label>
						<select class="form-control" name="tema_id">
							<option @if($post->tema_id == null) selected @endif></option>
							@foreach($temas as $tema)
								<option value="{{$tema->id}}" @if($post->tema_id == $tema->id or $tema->id == old('tema_id')) selected @endif>{{$tema->tema}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label mb-1">Creado</label>
						<input class="form-control" type="date" name="created_at" value="@if($post->created_at) {{$post->created_at->format('Y-m-d')}} @endif">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label mb-1">Orden</label>
						<input class="form-control" type="number" name="orden" value="{{ $post->orden or old('orden') }}">
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div id="div_file">
			 	{{-- <img id='output'> --}}
			 	@if($post->imagen_portada != null)
			 		<img id='output' style="width: 155px; margin-bottom: 10px;" src="{{$post->imagen_portada}}" alt="">
			 	@else
			 		<img id='output' style="width: 155px; margin-bottom: 10px;" src="/imagenes/default-img.png" alt="">
			    @endif
			    <p id="texto">Click o Arrastrar para cambiar imagen</p>
			    <input type='file' name="imagen_portada" accept='image/*' onchange='openFile(event)' title=" ">
			 </div>
			{{-- <div class="form-group">
				<label class="control-label mb-1">Foto</label>
				<input type="file" name="foto">
			</div> --}}
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		<div class="form-group requerido">
			<label class="control-label mb-1">ATTR Alt Img</label>
			<textarea class="form-control" name="alt_img">{{ $post->alt_img or old('alt_img') }}</textarea>
		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label class="control-label mb-1">Contenido</label>
				<textarea class="ckeditor" name="contenido" id="editor1" rows="10" cols="80">{{ $post->contenido or old('contenido')}}</textarea>
			</div>
		</div>
	</div>

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
	@if($post->id != null)
		<div class="row my-3">
			@foreach($post->imagenes as $imagen)
			<div class="col-md-3">
				<div class="thumbnail" style="position: relative;">
                  	<a href="{{ route('borrar_img_post', $imagen->id) }}" style="position: absolute;" onclick="return confirm('Desea eliminar la imagen?');" class="btn btn-danger delete-user">
                  		<i class="fa fa-trash"></i>
                  	</a>
	      			<img src="{{$imagen->url}}" alt="..." style="width: 190px;">
	      		</div>
			</div>
      		@endforeach
		</div>
		<div id="images_new" class="my-3"></div>
	@endif
	
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

  	// CONFIGURACION UTF-8 CKEDITOR
  	CKEDITOR.config.entities  = false;
	CKEDITOR.config.basicEntities = false;
	CKEDITOR.config.entities_greek = false;
	CKEDITOR.config.entities_latin = false;
	
</script>
@stop

