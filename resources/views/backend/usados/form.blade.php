<div id="form">
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
			<label class="control-label mb-1">Marca</label>
			<input name="marca" type="text" class="form-control" value="{{ $usado->marca }}">
		</div>
	</div>
	<div class="col-md-5">
		<div class="form-group">
			<label class="control-label mb-1">Modelo</label>
			<input name="modelo" type="text" class="form-control" value="{{ $usado->modelo }}">
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
			<label class="control-label mb-1">Dominio</label>
			<input name="dominio" type="text" class="form-control" value="{{ $usado->dominio }}">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-3">
		<div class="form-group">
			<label class="control-label mb-1">Año</label>
			<input name="anio" type="text" class="form-control" value="{{ $usado->anio }}">
		</div>
	</div>
		<div class="col-md-3">
		<div class="form-group">
			<label class="control-label mb-1">Km</label>
			<input name="km" type="text" class="form-control" value="{{ $usado->km }}">
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
			<label class="control-label mb-1">Color</label>
			<input name="color" type="text" class="form-control" value="{{ $usado->color }}">
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
			<label class="control-label mb-1">Precio</label>
			<input name="precio" type="text" class="form-control" value="{{ $usado->precio }}">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label class="control-label mb-1">Foto</label>
			<input type="file" name="foto">
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
<div class="container">
<div class="row">
	<div class="col-md-12">
		<h4><i class="fa fa-picture-o" aria-hidden="true"></i> Galeria de Imagenes</h4>
	</div>
	<hr style="width: 100%">
	<div class="col-md-12 text-right">
		<a style="color: white" v-on:click="addNewField()" class="btn btn-primary "><i class="fa fa-plus" aria-hidden="true"></i></a>
	</div>
</div>
<div id="images_new" style="margin-top: 10px;"></div>
<div class="row">
	<div class="col-md-12">
		<div style="display: flex; justify-content: flex-start;">
			@foreach($imagenes_galeria as $imagen)
			<div style="padding-right: 5px; padding-left: 5px;" id="img_galeria_{{$imagen->id}}">
				
			<div class="thumbnail" style="position: relative;">
				<a class="absolute btn btn-danger" href="#" v-on:click.prevent="deleteImg({{$imagen->id}})" style="right: 0px; font-size: 18px;">
					<i class="fa fa-trash"></i>
				</a>
      			<img src="{{$imagen->url}}" alt="..." style="width: 190px;">
      		</div>
			</div>	
      		@endforeach
		</div>
	</div>
</div>
</div>
@else
<br>
<div id="images">
	<div class="row">
		<div class="col-md-6">
			<h4><i class="fa fa-picture-o" aria-hidden="true"></i> Galeria de Imagenes</h4>
		</div>
		<div class="col-md-6 text-right">
			<a style="color: white" v-on:click="addField()" class="btn btn-primary "><i class="fa fa-plus" aria-hidden="true"></i></a>
		</div>
	</div>
	<hr>
</div>
@endif


</div>



@section('script')
    <script type="text/javascript">
        function removeField(e, id){
        	e.preventDefault();
            $('#field_'+id).remove();
                this.index--;
                console.log(id);
        }
        new Vue({
          el: '#form',
          data: {
            index: 1
          },
          mounted(){console.log(this.index); },
          methods:{
            addField(){
            	console.log(this.index);
                var field = `
                      <div class="form-group row" id="field_${this.index}">
                        <div class="col-12">
                          <div class="input-group">
                            <input name="img_galeria[]" type="file" class="form-control" style="height: 39px;">
                              <div class="input-group-btn">
                                <a href="#" class="btn btn-danger" onclick="removeField(event,${this.index})"><i class="fa fa-trash" aria-hidden="true"></i></a>
                              </div>
                            </div>
                        </div>
                      </div>
                      `
                ;
                $('#images').append(field);
                this.index++;
            },
            addNewField(){
            	var field = `
                      <div class="form-group row" id="field_${this.index}">
                        <div class="col-12">
                          <div class="input-group">
                            <input name="nuevas_imagenes[]" type="file" class="form-control" style="height: 39px;">
                              <div class="input-group-btn">
                                <a href="#" class="btn btn-danger" onclick="removeField(event,${this.index})"><i class="fa fa-trash" aria-hidden="true"></i></a>
                              </div>
                            </div>
                        </div>
                      </div>
                      `
                ;
                $('#images_new').append(field);
                this.index++;
            },
            deleteImg(id){
            	console.log(id);
	            swal({
					  title: '<strong>Desea eliminar la imagen?</strong>',
					  type: 'info',
					  html:'',
					  showCloseButton: true,
					  showCancelButton: true,
					  focusConfirm: false,
					  cancelButtonColor: '#3085d6',
                  	  confirmButtonColor: '#d33',
					  confirmButtonText:'<i class="fa fa-trash"></i> Eliminar',
					  confirmButtonAriaLabel: 'Thumbs up, great!',
					  cancelButtonText:'Cancelar',
					  cancelButtonAriaLabel: 'Thumbs down',
					}).then((result) => {
                  if (result) {
                    axios
                        .get('/admin/usados/borrar-img-galeria/'+id)
                        .then((res) => { 
                            if (res.status == 200){
                                $('#img_galeria_'+id).fadeOut(400, function() {
                                     $(this).remove(); 
                                });
                            }
                        })
                  }
                })
            }            
          }
        })
    </script>
@stop