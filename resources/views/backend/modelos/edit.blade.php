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

<div class="container">
  <div class="row">
    <div class="col col-md-8">
      <div class="card" id="form">
          <div class="card-body">
            <div class="card-panel mb-4">
                <div class="row">
                  <div class="col-12 col-md-12">
                    <div class="d-flex align-items-center">
                      <div class="icon-header bg-warning"><i class="fa fa-car"></i></div>
                      <div class="d-block">
                        <h5 class="card-title mb-0">EDITAR</h5>
                        <small class="text-muted"> #{{ $modelo->id }} - {{ $modelo->marca->nombre }} {{ $modelo->nombre }}</small>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <form action="{{ route('modelos.update', $modelo->id) }}" method="POST"  autocomplete="off" enctype="multipart/form-data" files="true">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="PUT">
              @include('backend.modelos.form')
              <div class="row">
                  <div class="col-12 text-right mt-4">
                      <a class="btn btn-dark" href="/admin/modelos">
                        Cancelar
                      </a>
                      <button type="submit" class="btn btn-success">
                        Guardar
                      </button>
                  </div>
              </div>
              </form>
          </div>
      </div>
    </div>
    <div class="col col-md-4">
      <div class="card   mb-3">
          <div class="card-body">
            <div class="card-panel mb-0">
                <div class="row">
                  <div class="col-9">
                    <div class="d-flex align-items-center">
                      <div class="icon-header bg-warning"><i class="fa fa-car"></i></div>
                      <div class="d-block">
                        <h5 class="card-title mb-0">Versiones y Precios </h5>
                        <small class="text-muted">{{ $modelo->nombre }}</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <a class="btn btn-link" href="/admin/modelos/{{ $modelo->id }}/edit/versiones">
                      <i class="far fa-edit"></i>
                    </a>
                  </div>
                </div>
            </div>
          </div>
      </div>

      <div class="card   mb-3">
        <div class="card-body">
          <div class="card-panel mb-0">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center">
                  <div class="icon-header bg-warning"><i class="fa fa-palette"></i></div>
                  <div class="d-block">
                    <h5 class="card-title mb-0">Colores</h5>
                    <small class="text-muted">{{ $modelo->nombre }}</small>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <a class="btn btn-link" href="/admin/modelos/{{$modelo->id}}/edit/colores">
                  <i class="far fa-edit"></i>
                </a>
              </div>
            </div>
          </div>           
        </div>
      </div>

      <div class="card   mb-3">
        <div class="card-body">
          <div class="card-panel mb-0">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center">
                  <div class="icon-header bg-warning"><i class="fas fa-images"></i></div>
                  <div class="d-block">
                    <h5 class="card-title mb-0">Galería</h5>
                    <small class="text-muted">{{ $modelo->nombre }}</small>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <a class="btn btn-link" href="{{ route('modelo-gallery.edit', $modelo->id) }}">
                  <i class="far fa-edit"></i>
                </a>
              </div>
            </div>
          </div>           
        </div>
      </div>

      <div class="card   mb-3">
        <div class="card-body">
          <div class="card-panel mb-0">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center">
                  <div class="icon-header bg-warning"><i class="fas fa-th-list"></i></div>
                  <div class="d-block">
                    <h5 class="card-title mb-0">Características</h5>
                    <small class="text-muted">{{ $modelo->nombre }}</small>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <a class="btn btn-link" href="/admin/modelos/{{$modelo->id}}/edit/caracteristicas">
                  <i class="far fa-edit"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card   mb-3">
        <div class="card-body">
          <div class="card-panel mb-0">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center">
                  <div class="icon-header bg-warning"><i class="fas fa-external-link-alt"></i></div>
                  <div class="d-block">
                    <h5 class="card-title mb-0">Vista Web</h5>
                    <small class="text-muted">{{ $modelo->nombre }}</small>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <a class="btn btn-link" href="https://derkayvargas.com/modelos/{{$modelo->slug}}" target="_blank">
                  <i class="fas fa-external-link-alt"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>





@stop

@section('script')
    <script type="text/javascript">
        function removeField(id){
            $('#field_'+id).remove();
                this.index--;
                console.log(id);
        }
        new Vue({
          el: '#form',
          data: {
            message: 'Hello Vue!',
            index: 1
          },
          mounted(){ },
          methods:{
            addField(){
                var field = `
                    <div class="col-9" style="padding-top:10px;" id="field_${ this.index }">
                        <div class="input-group">
                            <input name="img_slider[]" type="file" class="form-control" style="height: 39px;">
                            <div class="input-group-btn">
                                <a id="delete_field" class="btn btn-danger" onclick="removeField(${this.index})" style="color:white"><i class="fa fa-trash" ></i></a>
                            </div>
                        </div>
                    </div>`
                ;
                $('#images_slider').append(field);
                this.index++;
                console.log(this.index);    
            }            
          }
        })
    </script>
@stop