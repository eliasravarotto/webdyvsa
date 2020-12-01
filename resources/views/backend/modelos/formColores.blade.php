@extends('backend.layout')

@section('content')
<div class="card" id="form">
    <div class="card-header">
        <strong class="card-title">Editar Colores {{ $modelo->nombre }}</strong>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-12 text-right">
          <a href="#" onclick="addRowColor()" class="btn btn-link "><i class="fa fa-plus"></i> Agregar</a>
        </div>
      </div>
      <br>
    	<form action="/admin/modelos/{{ $modelo->id }}/edit/colores" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
		    {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">
        <div id="images">
          <div class="form-group row mb-4"></div>
        </div>
        <div id="old-images">
          @foreach($modelo->colores as $color)
            <div class="form-group row" id="row-old-images{{$color->id}}">
              <input type="hidden" name="old_color_id[]" value="{{$color->id}}">
              <div class="col-2">
                <img src="{{$color->url}}" class="img-fluid">
              </div>
              <div class="col-3">
                <div class="row">
                  <div class="form-group col-12">
                    <div class="input-group input-group-sm">
                      <input name="old_color[]" type="text" class="form-control" value="{{$color->color}}">
                    </div>
                  </div>
                  <div class="form-group col-12">
                    <div class="input-group input-group-sm">
                      <input name="old_codigo[]" type="text" class="form-control" value="{{$color->codigo}}">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="row">
                  <div class="col-12 form-group">
                    <div class="input-group input-group-sm">
                        <input type="file" name="old_img_colores[]">
                    </div>
                  </div>
                  <div class="col-12 form-group text-right">
                    <div class="input-group input-group-sm-btn">
                      <a href="#" class="btn btn-link" title="Eliminar" onclick="event.preventDefault(); addIdToDelete({{$color->id}})"><i class="fa fa-trash text-danger"></i> Eliminar</a>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <hr>
          @endforeach

        </div>
         
        <div class="row form-group">
            <div class="col-9">
                <a class="btn btn-dark" href="/admin/modelos" style="color: white">
                  Cancelar
                </a>
                <button type="submit" class="btn btn-info">
                  <i class="fas fa-save"></i> Guardar
                </button>
            </div>
        </div>
      	</form>
    </div>
</div>
@stop


<script type="text/javascript">
  var index = 0;
    function removeField(id){
        $('#field_'+id).remove();
            index--;
            console.log(id);
    }

    function addRowColor(){
      var field = `
                <div class="form-group row" id="field_${index}">
                  <div class="col-3">
                    <div class="input-group input-group-sm">
                      <input name="color[]" placeholder="Color" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="input-group input-group-sm">
                      <input name="codigo[]" placeholder="Código" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-5">
                    <div class="input-group input-group-sm">
                        <input type="file" name="img_colores[]">
                    </div>
                  </div>
                  <div class="col-2">
                    <div class="input-group input-group-sm-btn">
                      <a href="#" class="btn btn-link" title="Eliminar" onclick="event.preventDefault(); removeField(${index})"><i class="fa fa-trash text-danger"></i> Eliminar</a>
                    </div>
                  </div>
                </div>
                <hr>`
            ;
            $('#images').append(field);
            this.index++;
    }

    function addIdToDelete(id){
      $("#row-old-images"+id).fadeOut(350, function(){ $(this).remove();});
      var input = `<input type="hidden" name="delete_color_ids[]" value="${id}">`;
      $('form').append(input);
    }
</script>
