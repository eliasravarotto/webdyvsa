@extends('backend.layout')

@section('content')
<style type="text/css">
	.col-buttons-inline{
		display: flex;
		justify-content: 
		flex-start; 
		align-self: flex-end;
	}
	.col-buttons-inline > button{
		height: 59%;
		margin-right: 10px;
	}
</style>
<div class="card" id="formVersiones">
    <div class="card-body">

      <div class="card-panel mb-5">
        <div class="row">
          <div class="col-12 col-md-8">
            <div class="d-flex align-items-center">
              <div class="icon-header bg-warning"><i class="fas fa-th-list"></i></div>
              <div class="d-block">
                <h5 class="card-title mb-0">VERSIONES Y PRECIOS</h5>
                <small class="text-muted">{{ $modelo->marca->nombre }} {{ $modelo->nombre }}</small>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 text-right">
            <a href="#" onclick="addField(event)" class="btn btn-link ">
              <i class="fa fa-plus" aria-hidden="true"></i> Agregar
            </a>
          </div>
        </div>
      </div>

    	<form action="/admin/modelos/{{ $modelo->id }}/edit/versiones" method="POST" autocomplete="off">
          <input name="_method" type="hidden" value="PUT">
			    {{ csrf_field() }}
          <div id="versiones">
            @php $ix = 0 @endphp
            @foreach($modelo->versiones as $version)
              @php $ix++ @endphp
              <div class="form-group row" id="row_{{$ix}}">
                <div class="col-5">
                  <div class="input-group">
                    <input name="versiones[]" value="{{$version->nombre}}" placeholder="Versión" type="text" class="form-control form-control-sm" required>
                  </div>
                </div>
                <div class="col-4">
                  <div class="input-group">
                    <input name="precios[]" value="{{$version->precio}}" placeholder="Precio" type="text" class="form-control form-control-sm" required>
                  </div>
                </div>
                <div class="col-2">
                  <div class="input-group">
                    <select class="form-control form-control-sm" name="monedas[]" required>
                      <option value="ARS" @if($version->moneda == 'ARS') selected @endif>ARS</option>
                      <option value="USD" @if($version->moneda == 'USD') selected @endif>USD</option>
                    </select>
                  </div>
                </div>
                <div class="col-1">
                  <div class="input-group">
                    <a href="#" class="btn btn-danger btn-sm" onclick="removeField({{$ix}})"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

          <div class="row">
            <div class="col-12 text-right">
              <a href="#" onclick="addField(event)" class="btn btn-link my-3">
                <i class="fa fa-plus" aria-hidden="true"></i> Agregar
              </a>
            </div>
          </div>

          <div class="row form-group mt-5">
              <div class="col-12 text-right">
                  <a class="btn btn-dark" href="/admin/modelos">
                    Cancelar
                  </a>
                  <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Guardar
                  </button>
              </div>
          </div>
    	</form>
    </div>
</div>
@stop

@section('page-script')
<script type="text/javascript">
  var ix = '{{ $ix }}';
  function removeField(id){
      $('#row_'+id).remove();
  }
  function addField(e){
    e.preventDefault();
    ix++;

    var row = `<div class="form-group row" id="row_${ix}">
                <div class="col-5">
                  <div class="input-group">
                    <input name="versiones[]" placeholder="Versión" type="text" class="form-control form-control-sm" required>
                  </div>
                </div>
                <div class="col-4">
                  <div class="input-group">
                    <input name="precios[]" placeholder="Precio" type="text" class="form-control form-control-sm" required>
                  </div>
                </div>
                <div class="col-2">
                  <div class="input-group">
                    <select class="form-control form-control-sm" name="monedas[]" required>
                      <option value="ARS">ARS</option>
                      <option value="USD">USD</option>
                    </select>
                  </div>
                </div>
                <div class="col-1">
                  <div class="input-group">
                    <a href="#" class="btn btn-danger btn-sm" onclick="removeField(${ix})"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>`;

    $("#versiones").append(row);

  }
</script>
@stop