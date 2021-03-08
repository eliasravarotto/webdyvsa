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
          <div class="card-header">
              <strong class="card-title">Editar {{ $modelo->nombre }}</strong>
          </div>
          <div class="card-body">
            <form action="{{ route('modelos.update', $modelo->id) }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
            {{ csrf_field() }}
              <input name="_method" type="hidden" value="PUT">
                  @include('backend.modelos.form')
                  <div class="row form-group">
                      <div class="col-9">
                          <a class="btn btn-dark" href="/admin/modelos">
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
    <div class="col col-md-4">
      <div class="card border border-primary my-1">
          <div class="card-header">
            <strong class="card-title">Versiones {{ $modelo->nombre }} 
              <small>
                <span class="float-right mt-1">
                  <a href="/admin/modelos/{{ $modelo->id }}/edit/versiones">
                    <i class="far fa-edit"  style="font-size: 25px;"></i>
                  </a>
                </span>
              </small>
            </strong>
          </div>
      </div>

      <div class="card border border-primary mt-1">
          <div class="card-header">
              <strong class="card-title">Características {{ $modelo->nombre }} 
                <small>
                  <span class="float-right mt-1">
                    <a href="/admin/modelos/{{$modelo->id}}/edit/caracteristicas">
                      <i class="far fa-edit"  style="font-size: 25px;"></i>
                    </a>
                  </span>
                </small>
              </strong>
            </div>
      </div>

        <div class="card border border-primary mt-1">
            <div class="card-header">
              <strong class="card-title">Colores {{ $modelo->nombre }} 
                <small>
                  <span class="float-right mt-1">
                    <a href="/admin/modelos/{{$modelo->id}}/edit/colores">
                      <i class="far fa-edit"  style="font-size: 25px;"></i>
                    </a>
                  </span>
                </small>
              </strong>
            </div>
        </div>

        <div class="card border border-primary mt-1">
            <div class="card-header">
              <strong class="card-title">Galeria {{ $modelo->nombre }} 
                <small>
                  <span class="float-right mt-1">
                    <a href="/admin/modelos/{{$modelo->id}}/edit/galeria">
                      <i class="far fa-edit"  style="font-size: 25px;"></i>
                    </a>
                  </span>
                </small>
              </strong>
            </div>
        </div>

        <div class="card border border-primary mt-1">
            <div class="card-header">
              <strong class="card-title">Portada {{ $modelo->nombre }} 
                <small>
                  <span class="float-right mt-1">
                    <a href="/admin/modelos/{{$modelo->id}}/edit/portada">
                      <i class="far fa-edit"  style="font-size: 25px;"></i>
                    </a>
                  </span>
                </small>
              </strong>
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
                    <div class="col-8" style="padding-top:10px;" id="field_${ this.index }">
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