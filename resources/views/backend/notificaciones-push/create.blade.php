@extends('backend.layout')

@section('content')
<div class="card" id="app">
    <div class="card-header">
        <strong class="card-title">NOTIFICACÍON PUSH</strong>
    </div>
    <div class="card-body">
    	<form action="{{ route('create_push_notification') }}" method="POST" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
			@include('backend.notificaciones-push.form')
			<div class="row form-group">
				<div class="col-9">
					<a href="/admin" class="btn btn-secondary">
					  Cancelar
					</a>
					<button type="submit" class="btn btn-success">
					  Enviar
					</button>
				</div>
			</div>
      	</form>
    </div>
</div>
@stop