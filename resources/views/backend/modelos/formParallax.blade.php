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
        <strong class="card-title">Parallax {{ $modelo->nombre }}</strong>
    </div>
    <div class="card-body">
    	<form action="/admin/modelos/{{ $modelo->id }}/edit/parallax" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			   {{ csrf_field() }}
          <div id="images">
            <div class="form-group row">
              <div class="col-7">
                <div class="input-group">
                  <input name="texto" placeholder="Texto a mostrar" type="text" class="form-control" style="height: 39px;">
                </div>
              </div>
              <div class="col-5">
                <div class="input-group">
                  <input name="img" type="file" class="form-control" style="height: 39px;">
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
