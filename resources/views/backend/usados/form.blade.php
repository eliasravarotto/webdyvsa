<div>
	<div class="row"> 
		<div class="col-sm-12 col-md-8">
			<div class="row">
				<div class="col-md-3">
					<div class="form-group requerido">
						<label class="control-label mb-1">Marca</label>
						<input name="marca" type="text" class="form-control" value="{{ $usado->marca or old('marca') }}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group requerido">
						<label class="control-label mb-1">Modelo</label>
						<input name="modelo" type="text" class="form-control" value="{{ $usado->modelo or old('modelo') }}" placeholder="Modelo Version">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group requerido">
						<label class="control-label mb-1">Año</label>
						<input name="anio" type="number" size="4" maxlength="4" class="form-control" value="{{ $usado->anio or old('anio') }}">
						<div class="text-danger">{{ $errors->first('anio') }}</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group requerido">
						<label class="control-label mb-1">Color</label>
						{{-- <input name="color" type="text" class="form-control" value="{{ $usado->color }}"> --}}
						<select class="select2-color form-control @if ($errors->first('color')) is-invalid @endif" name="color"></select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label mb-1">Km</label>
						<input name="km" type="text" class="form-control" value="{{ $usado->km or old('km') }}" placeholder="ej: 20.000">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label mb-1">Dominio</label>
						<input name="dominio" type="text" class="form-control" value="{{ $usado->dominio or old('dominio') }}">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label mb-1">Int.</label>
						<input name="interno" type="text" class="form-control" value="{{ $usado->interno or old('interno') }}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label mb-1">Precio</label>
						<input name="precio" type="number" class="form-control" value="{{ $usado->precio or old('precio') }}" onkeyup="verificarPrecio()">
						<div id="error-precio" class="text-danger"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label mb-1">Combustible</label>
						<select class="form-control" name="combustible">
							<option @if($usado->combustible == null) selected @endif></option>
							<option value="NAFTA" @if($usado->combustible == 'NAFTA' || old('combustible')== 'NAFTA') selected @endif>NAFTA</option>
							<option value="DIESEL" @if($usado->combustible == 'DIESEL' || old('combustible')== 'DIESEL') selected @endif>DIESEL</option>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label mb-1">Transmisión</label>
						<select class="form-control" name="transmision">
							<option @if($usado->transmision == null) selected @endif></option>
							<option @if($usado->transmision == 'MANUAL' || old('transmision')== 'MANUAL') selected @endif value="MANUAL">MANUAL</option>
							<option @if($usado->transmision == 'AUTOMÁTICA' || old('transmision')== 'AUTOMÁTICA') selected @endif value="AUTOMÁTICA">AUTOMÁTICA</option>
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
				<div class="col-md-2">
					<div class="form-group">
						<label class="control-label mb-1">Orden</label>
						<input type="number" class="form-control" name="orden" @if($usado->orden != null)value="{{$usado->orden}}" @else value="{{\App\Helpers\Helper::getHighOrdenUsados()}}" @endif>
					</div>
				</div>
				<div class="col-md-1">
					<div class="form-group">
						<label class="control-label mb-1">Visible</label>
						<div class="custom-control custom-checkbox">
                          <input type="checkbox" name="visible" class="custom-control-input" id="visible" @if($usado->visible == 1) checked="" @endif>
                          <label class="custom-control-label" for="visible"></label>
                        </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label mb-1">Estado</label>
						<select class="form-control" name="estado">
							<option @if($usado->estado == "DISPONIBLE" || $usado->estado == null ) selected @endif value="DISPONIBLE">Disponible</option>
							<option @if($usado->estado == "RESERVADO") selected @endif value="RESERVADO">Reservado</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<div id="div_file">
			 	@if($usado->foto != null)
				 	<div class="image">
				    	<input type="file" name="foto" accept='image/*' onchange='openFile(event)' title=" ">
					</div>
			 		<img id="foto" src="{{Storage::url($usado->foto)}}">
			 	@else
				 	<div class="image">
						<div class="content">
				          	<div class="icon-upload text-center"><i class="fas fa-cloud-upload-alt"></i></div>
							<div class="text text-center">Click o Arrastrar para cambiar imagen</div>
						</div>
				    	<input type="file" name="foto" accept='image/*' onchange='openFile(event)' title=" ">
					</div>
			 		<img id="foto" src alt="" class="d-none">
			    @endif
			 </div>
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

	@if($usado->id)
	<div class="content" id="content_dropzone">
		<div class="dropzone needsclick dz-clickable dz-started" 
			  action="{{route('usados_add_photos', $usado->id)}}" 
			  id="dropzone-usados-fotos"
			  >
            <div class="dz-message text-center mb-3" data-dz-message>
            	<span><i class="fas fa-upload"></i> Clic o arrastrar los archivos aquí para subir.</span>
            </div>
        </div>
	</div>
	@endif

	<div class="row my-3">
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
	    	var name = document.getElementById('file_'+index).value.split(/(\\|\/)/g).pop();
	    	$('#label_img_'+index).html(name);
	    }

	    function addNewField(e){
	    	e.preventDefault();
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
	        $('#images_new').append(field);
	        index++;
	    }

	    function verificarPrecio()
	    {
	    	var precio = $('[name ="precio"]').val();
	    	if (precio <= 300000){
		    	$("#error-precio").html('El precio no puede ser menor a 300.000')
		    	$('[name ="precio"]').addClass('is-invalid');
	    	}else if (precio >= 5000000){
		    	$("#error-precio").html('El precio no puede ser mayor a 5.000.000')
		    	$('[name ="precio"]').addClass('is-invalid');
	    	} else{
	    		$("#error-precio").html('');
	    		$('[name ="precio"]').removeClass('is-invalid');
	    	}

	    }


		/***SELECT2***/
	    var data = {!! $colores !!}
	    $('.select2-color').select2({
	    	allowClear: true,
	    	placeholder: 'Color',
	    	data: data,
	    }); //Init
	 	$('.select2-color').val('{{ $usado->color or old('color') }}');//Seleccionar valor por default
	    $('.select2-color').select2().trigger('change');//Seleccionar valor por default
	    @if ($errors->first('color'))//Add class error
			$(".select2-color + span").addClass("is-invalid"); 
   		@endif

   		Dropzone.autoDiscover = false;
   		if (document.getElementById('dropzone-usados-fotos')) {
   			var dropzoneCursoFiles = new Dropzone("#dropzone-usados-fotos",{
   				url: "{{route('usados_add_photos', $usado->id)}}",
   				acceptedFiles: ".jpeg, .jpg, .png,.webp",
   				addRemoveLinks: true,
   				thumbnailWidth: 50,
  				thumbnailHeight: 50,
  				previewTemplate: `
  					<div class="dz-preview dz-file-preview">
					  <div class="dz-details">
					    <img data-dz-thumbnail />
					  </div>
					  <div class="dz-error-message"><span data-dz-errormessage></span></div>
					</div>
  				`,
   				init: function() {
   					this.on("success", function(file, response) {
                        notifier.show('Hecho!', 'La imagen se cargó correctamente.', '', '/imagenes/icons/success.png', 3500);
                    });
                    //display photos
                    var mocks = {!! $usado->photos !!};
				    for (var i = 0; i < mocks.length; i++) {
				        var mock = {
		                    id: mocks[i].id ,
		                    path: mocks[i].public_path,
		                    type: 'image/jpeg',
		                    accepted: true,
		                };
				        this.files.push(mock);
				        this.emit('addedfile', mock);
				        this.emit("thumbnail", mock, mock.path);
				        this.emit('complete', mock);
				    }
   				},
   				sending: function(file, xhr, formData) {
				    formData.append("_token", "{{ csrf_token() }}");
				},
				removedfile: function(file) {
					axios
						.delete("{{route('usados_add_photos', $usado->id)}}", { data: file})
						.then(res=>{
							file.previewElement.remove();
                        	notifier.show('Hecho!', 'La imagen se eliminó correctamente.', '', '/imagenes/icons/success.png', 3500);
						})
				},

   			});
        }
	</script>
@stop