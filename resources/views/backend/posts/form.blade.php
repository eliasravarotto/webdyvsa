<div class="row"> 
	<div class="col-sm-12 col-md-9">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group requerido">
					<label class="control-label mb-1">Título</label>
					<input name="titulo" type="text" class="form-control" value="{{ $post->titulo or old('titulo') }}" required>
					<span class="text-danger">{{ $errors->first('titulo') }}</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10">
				<div class="form-group requerido">
					<label class="control-label mb-1">Categorías</label>
					<span class="text-danger">{{ $errors->first('categories') }}</span>
					<select class="from-select form-control w-100"  multiple="multiple" name="categories[]" required>
			            @foreach( $categories as $c )
			                <option value="{{$c->id}}" @if($post->categories()->get()->contains($c)) selected @endif>{{$c->name}}</option>
			            @endforeach
		          	</select>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label class="control-label mb-1">Orden</label>
					<input class="form-control" type="number" name="orden" value="{{ $post->orden or old('orden') }}">
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-3">
		<div id="div_file">
		 	@if($post->image != null)
		 		{{-- <img id='output' style="width: 155px; margin-bottom: 10px;" src="{{$post->image->public_path}}" alt=""> --}}
		 		<div class="image">
			    	<input type="file" name="foto" accept='image/*' onchange='openFile(event)' title=" ">
				</div>
		 		<img id="foto" src="{{$post->image->public_path}}" alt="Avatar Image">
		 	@else
		 		<img id='output' style="width: 155px; margin-bottom: 10px;" src="/imagenes/default-img.png" alt="">
		    @endif

		    @if($post->id)
		    	<input type="file" name="imagen_portada" accept='image/*' onchange='openFile(event)' title="Foto Portada">
		    @else
		    	<input type="file" name="imagen_portada" accept='image/*' onchange='openFile(event)' title="Foto Portada" required>
	 		@endif
	 		
	 		<span class="text-danger">{{ $errors->first('imagen_portada') }}</span>
		 </div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="form-group requerido">
			<label class="control-label mb-1 ">Contenido</label>
			<textarea class="ckeditor" name="contenido" id="editor1" rows="10" cols="80">{{ $post->contenido or old('contenido')}}</textarea>
		</div>
		<span class="text-danger">{{ $errors->first('contenido') }}</span>
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

	//CONFIGURACION SELECT2
	$('.from-select').select2({
      placeholder: "Recibido desde",
      width: '100%'
    });
	
</script>
@stop

