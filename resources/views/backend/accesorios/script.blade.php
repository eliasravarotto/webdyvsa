<script>
	var index = 0;
	var data = {!! $modelos !!}

	/***SELECT2***/
    $('.select2-modelo').select2({
    	allowClear: true,
    	placeholder: 'Seleccionar modelo',
    	data: data,
    }); //Init
 	$('.select2-modelo').val({{ $accesorio->modelo_id or old('modelo_id') }});//Seleccionar valor por default
    $('.select2-modelo').select2().trigger('change');//Seleccionar valor por default
    @if ($errors->first('modelo_id'))//Add class error
	$(".select2-modelo + span").addClass("is-invalid"); 
    @endif

    /**FORM agregar y quitar Fotos**/
    $('.add-file').click( function(event) {
	    var html = `<div class="d-flex flex-column align-items-center" id="element-img-${index}">
						<div class="div-add-img ml-2">
							<div class="_3jk d-flex justify-content-center align-items-center">
								<i class="fa fa-plus"></i>
								<input type="file" id="input_${index}" class="_5f0v" name="imagenes[]" onchange="showImage(event, ${index})">
								<img id="img_${index}" src="">
							</div>
						</div>
						<a href="#" onclick="deleteElement(${index})">Borrar Foto</a>
					</div>`;
        
        $('#galeria').append(html); //Agregar el input
	    $('#input_'+index).trigger('click'); //Abrir el Input
	    index++;
    });

    function deleteElement( id ){
    	$('#element-img-'+id).remove();
    }

    function showImage(event, index){
    	$('#img_'+index)
    		.fadeIn("fast")
			.attr('src',URL.createObjectURL(event.target.files[0]));
	}

</script>