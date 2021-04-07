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
               Editar {{ $modelo->nombre }} 
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
      <div class="card border border-primary mb-3">
          <div class="card-header d-flex align-items-center">
            <span class="w-10 d-block">
              <i class="fas fa-list-alt"></i> 
            </span>
              <a class="w-90 d-flex justify-content-between align-items-center btn btn-link px-0 py-0" href="/admin/modelos/{{ $modelo->id }}/edit/versiones">
                <span class="d-block">Versiones y Precios </span>
                <span class="d-block">
                    <i class="far fa-edit"  style="font-size: 25px;"></i>
                </span>
              </a>
          </div>
      </div>

      <div class="card border border-primary mb-3">
        <div class="card-header d-flex align-items-center">
          <span class="w-10 d-block">
           <i class="fa fa-palette"></i>
          </span>
          <a class="w-90 d-flex justify-content-between align-items-center btn btn-link px-0 py-0" href="/admin/modelos/{{$modelo->id}}/edit/colores">
            <span class="d-block">Colores</span>
            <span class="d-block">
              <i class="far fa-edit"  style="font-size: 25px;"></i>
            </span>
          </a>
           
        </div>
      </div>

      <div class="card border border-primary mb-3">
        <div class="card-header d-flex align-items-center">
          <span class="w-10 d-block">
            <i class="fas fa-images"></i>
          </span>
          <a class="w-90 d-flex justify-content-between align-items-center btn btn-link px-0 py-0" href="{{ route('modelo-gallery.edit', $modelo->id) }}">
            <span class="d-block">Galeria  </span>
            <span class="d-block"><i class="far fa-edit"  style="font-size: 25px;"></i></span>
          </a>
           
        </div>
      </div>

      <div class="card border border-primary mb-3">
        <div class="card-header d-flex align-items-center">
          <span class="w-10 d-block">
            <i class="fas fa-th-list"></i>
          </span>
          <a class="w-90 d-flex justify-content-between align-items-center btn btn-link px-0 py-0" href="/admin/modelos/{{$modelo->id}}/edit/caracteristicas">
            <span class="d-block">Características </span>
            <span class="d-block"><i class="far fa-edit"  style="font-size: 25px;"></i></span>
          </a>
        </div>
      </div>

      <div class="card border border-primary mb-3">
        <div class="card-header d-flex align-items-center">
          <span class="w-10 d-block">
            <i class="fas fa-external-link-alt"></i>
          </span>
          <a class="w-90 d-flex justify-content-between align-items-center btn btn-link px-0 py-0" href="https://derkayvargas.com/modelos/{{$modelo->slug}}" target="_blank">
            <span class="d-block">Vista Web </span>
          </a>
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