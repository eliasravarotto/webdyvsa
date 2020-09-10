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
			 	@if($post->image != null)
			 		<img id='output' style="width: 155px; margin-bottom: 10px;" src="{{$post->image->public_path}}" alt="">
			 	@else
			 		<img id='output' style="width: 155px; margin-bottom: 10px;" src="/imagenes/default-img.png" alt="">
			    @endif
			    <p id="texto">Click o Arrastrar para cambiar imagen</p>
			    <input type="file" name="imagen_portada" accept='image/*' onchange='openFile(event)' title=" ">
			 </div>
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

@section('page-script')
<script type="text/javascript">
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

