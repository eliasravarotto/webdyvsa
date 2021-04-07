@extends('backend.layout')

@section('content')
<div class="row">
  <div class="col-12 col-md-8">
    <div class="card">
      <div class="card-header">
          <strong class="card-title">{{ $modelo->nombre }} - Nuevo Item </strong>
      </div>
      <div class="card-body">
        <form action="/admin/modelos/{{ $modelo->id }}/edit/caracteristicas" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
          {{ csrf_field() }}
          <input name="_method" type="hidden" value="PUT">
          <div id="images">
            <div class="row" id="row_0">
              <div class="col">
                <div class="form-group">
                  <div class="row">
                    <div class="col-10">
                      <input name="titulo[]" placeholder="Título" type="text" class="form-control form-control-sm">
                    </div>
                    <div class="col-2">
                      <a href="#" class="btn btn-danger btn-sm" onclick="removeField(0)"><i class="fa fa-trash"></i></a>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-12">
                          <input name="img[]" type="file" class="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-12">
                      <label>Descripción</label>
                      <textarea class="form-control form-control-sm" name="desc[]"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group">
              <div class="col-12 text-right">
                <a href="#" onclick="addField(event)" class="btn btn-link">
                  <i class="fa fa-plus"></i>
                  Agregar
                </a>
              </div>
            </div>
          </div>
         
          <div class="row">
              <div class="col-9">
                  <a class="btn btn-dark" href="/admin/modelos" style="color: white">
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
  </div>
  <div class="col-12 col-md-4">
    <div class="card">
      <div class="card-header">
          <strong class="card-title">Características {{ $modelo->nombre }}</strong>
      </div>
      <div class="card-body">
        <div class="container">
          <div class="row">
            @foreach($modelo->caracteristicas as $caracteristica)
              <div class="col-12">
                <div class="card mb-3">
                  <img src="{{$caracteristica->img}}" class="card-img-top">
                  <div class="card-body">
                    <p class="card-text">
                      {{ $caracteristica->titulo }}
                    </p>
                  </div>
                  <a href="{{ route('borrar_caracterisica_modelo', $caracteristica->id) }}" style="position: absolute;" onclick="return confirm('Desea eliminar el item?');" class="btn btn-danger delete-user">
                    <i class="fa fa-trash"></i>
                  </a>
                </div>
              </div>
            @endforeach
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@stop

@section('page-script')
<script type="text/javascript">
    var ix = 0;
    function removeField(ix){
        $('#row_'+ix).remove();
    }

    function addField(e){
      e.preventDefault();
      ix++;
      var row = `
            <div class="row" id="row_${ix}">
              <div class="col">
              <hr class="my-4"> 
                <div class="form-group">
                  <div class="row">
                    <div class="col-10">
                      <input name="titulo[]" placeholder="Título" type="text" class="form-control form-control-sm">
                    </div>
                    <div class="col-2">
                      <a href="#" class="btn btn-danger btn-sm" onclick="removeField(${ix})"><i class="fa fa-trash"></i></a>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-12">
                          <input name="img[]" type="file" class="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-12">
                      <label>Descripción</label>
                      <textarea class="form-control form-control-sm" name="desc[]"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>`;
      $('#images').append(row);
    }  
</script>
@stop