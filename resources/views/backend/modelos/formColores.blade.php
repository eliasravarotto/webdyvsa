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
    <div class="card-header">
        <strong class="card-title">Editar Colores {{ $modelo->nombre }}</strong>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-12 text-right">
          <a style="color: white" v-on:click="addField()" class="btn btn-primary "><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
      </div>
      <br>
    	<form action="/admin/modelos/{{ $modelo->id }}/edit/colores" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			   {{ csrf_field() }}
          <div id="images">
            <div class="form-group row">
              <div class="col-3">
                <div class="input-group">
                  <input name="color[]" placeholder="Nombre del color" type="text" class="form-control" style="height: 39px;">
                </div>
              </div>
              <div class="col-3">
                <div class="input-group">
                  <input name="codigo[]" placeholder="Código del color" type="text" class="form-control" style="height: 39px;">
                </div>
              </div>
              <div class="col-6">
                <div class="input-group">
                  <input name="img_colores[]" type="file" class="form-control" style="height: 39px;">
                    <div class="input-group-btn"><button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></div>
                  </div>
              </div>
            </div>
          </div>
    		
          <input name="_method" type="hidden" value="PUT">
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
                    <div class="form-group row" id="field_${this.index}">
                      <div class="col-3">
                        <div class="input-group">
                          <input name="color[]" placeholder="Nombre del color" type="text" class="form-control" style="height: 39px;">
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="input-group">
                          <input name="codigo[]" placeholder="Código del color" type="text" class="form-control" style="height: 39px;">
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="input-group">
                          <input name="img_colores[]" type="file" class="form-control" style="height: 39px;">
                          <a href="#" class="btn btn-danger" onclick="removeField(${this.index})"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>`
                ;
                $('#images').append(field);
                this.index++;
            }            
          }
        })
    </script>
@stop