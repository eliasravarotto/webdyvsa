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
			<div class="col-md-7">
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
			<div class="col-md-3">
				<div class="form-group">
					<label class="control-label mb-1">Vencimiento</label>
					<input class="form-control" type="date" name="vencimiento" value="{{ $post->vencimiento or old('vencimiento') }}">
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-3">
		<div id="div_file">
			 	@if($post->imagen_portada != null)
				 	<div class="image">
				    	<input type="file" name="imagen_portada" accept='image/*' onchange='openFile(event)' title=" ">
					</div>
			 		<img id="imagen_portada" src="{{$post->imagen_portada}}">
			 	@else
				 	<div class="image">
						<div class="content">
				          	<div class="icon-upload text-center"><i class="fas fa-cloud-upload-alt"></i></div>
							<div class="text text-center">Click o Arrastrar para cambiar imagen</div>
						</div>
				    	<input type="file" name="imagen_portada" accept='image/*' onchange='openFile(event)' title=" ">
					</div>
			 		<img id="imagen_portada" src alt="" class="d-none">
			    @endif
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

