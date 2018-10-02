@extends('backend.sufee_admin.index')

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
<div class="card" id="form">
    <div class="card-header bg-secondary">
        <strong class="card-title">Editar {{ $modelo->nombre }}</strong>
    </div>
    <div class="card-body">
    	<form action="{{ route('modelos.update', $modelo->id) }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
    		<input name="_method" type="hidden" value="PUT">
            @include('backend.modelos.form')
            <div class="row form-group">
                <div class="col-9">
                    <a class="btn btn-dark" href="/admin/modelos" style="color: white">
                      <i class="fa fa-lock fa-lg"></i>&nbsp;
                      <span id="payment-button-amount">Cancelar</span>
                    </a>
                    <button type="submit" class="btn btn-info">
                      <i class="fa fa-lock fa-lg"></i>&nbsp;
                      <span id="payment-button-amount">Guardar</span>
                    </button>
                </div>
            </div>
      	</form>
    </div>
</div>

<div class="card border border-primary">
    <div class="card-header">
      <strong class="card-title">Características {{ $modelo->nombre }} 
        <small>
          <span class="float-right mt-1">
            <a href="/admin/modelos/{{$modelo->id}}/edit/caracteristicas">
              <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 25px;"></i>
            </a>
          </span>
        </small>
      </strong>
    </div>
</div>

<div class="card border border-primary">
    <div class="card-header">
      <strong class="card-title">Colores {{ $modelo->nombre }} 
        <small>
          <span class="float-right mt-1">
            <a href="/admin/modelos/{{$modelo->id}}/edit/colores">
              <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 25px;"></i>
            </a>
          </span>
        </small>
      </strong>
    </div>
</div>

<div class="card border border-primary">
    <div class="card-header">
      <strong class="card-title">Galeria {{ $modelo->nombre }} 
        <small>
          <span class="float-right mt-1">
            <a href="/admin/modelos/{{$modelo->id}}/edit/galeria">
              <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 25px;"></i>
            </a>
          </span>
        </small>
      </strong>
    </div>
</div>

<div class="card border border-primary">
    <div class="card-header">
      <strong class="card-title">Parallax {{ $modelo->nombre }} 
        <small>
          <span class="float-right mt-1">
            <a href="/admin/modelos/{{$modelo->id}}/edit/parallax">
              <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 25px;"></i>
            </a>
          </span>
        </small>
      </strong>
    </div>
</div>

<div class="card border border-primary">
    <div class="card-header">
      <strong class="card-title">Slider {{ $modelo->nombre }} 
        <small>
          <span class="float-right mt-1">
            <a href="/admin/modelos/{{$modelo->id}}/edit/slider">
              <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 25px;"></i>
            </a>
          </span>
        </small>
      </strong>
    </div>
</div>

<div class="card border border-primary">
    <div class="card-header">
      <strong class="card-title">Versiones {{ $modelo->nombre }} 
        <small>
          <span class="float-right mt-1">
            <a href="">
              <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 25px;"></i>
            </a>
          </span>
        </small>
      </strong>
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
                                <a id="delete_field" class="btn btn-danger" onclick="removeField(${this.index})" style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></a>
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