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
<div class="card" id="form">
    <div class="card-header">
        <strong class="card-title">Características {{ $modelo->nombre }}</strong>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-12 text-right">
          <a style="color: white" v-on:click="addField()" class="btn btn-primary "><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
      </div>
      <br>
    	<form action="/admin/modelos/{{ $modelo->id }}/edit/caracteristicas" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			   {{ csrf_field() }}
          <div id="images" style="padding-top: 10px; padding-bottom: 10px">
            <div class="container" id="field_0">
              <a href="#" class="btn btn-danger pull-right" onclick="removeField(0)"><i class="fa fa-trash" aria-hidden="true"></i></a>
              
              <div class="row">
                <div class="col-7" style="margin-bottom: 10px;">
                  <div class="input-group">
                    <input name="titulo[]" placeholder="Título" type="text" class="form-control" style="height: 39px;">
                  </div>
                </div>
                <div class="col-5">
                  <div class="input-group">
                    <input name="img[]" type="file" class="form-control" style="height: 39px;">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <label>Descripción</label>
                  <div class="input-group">
                    <textarea class="form-control" name="desc[]"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
    		
          <input name="_method" type="hidden" value="PUT">
          <div class="row form-group container">
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
            index: 1
          },
          mounted(){ },
          methods:{
            addField(){
                var field = `
                    <div class="container" id="field_${this.index}">
                      <hr style="border-top:3px solid #ffa0c3; margin-bottom:25px">
                      <a href="#" class="btn btn-danger pull-right" onclick="removeField(${this.index})"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      
                      <div class="row">
                        <div class="col-7" style="margin-bottom: 10px;">
                          <div class="input-group">
                            <input name="titulo[]" placeholder="Título" type="text" class="form-control" style="height: 39px;">
                          </div>
                        </div>
                        <div class="col-5">
                          <div class="input-group">
                            <input name="img[]" type="file" class="form-control" style="height: 39px;">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <label>Descripción</label>
                          <div class="input-group">
                            <textarea class="form-control" name="desc[]"></textarea>
                          </div>
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