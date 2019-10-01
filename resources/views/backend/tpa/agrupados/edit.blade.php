@extends('backend.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</h4>
    </div>
    <div class="card-body">
    	<form action="{{ route('tpa_agrupados.update', $agrupado->id) }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
    		<input name="_method" type="hidden" value="PUT">
            @include('backend.tpa.agrupados.form')
            <div class="row form-group" style="margin-top: 50px;">
				<div class="col-9">
					<a href="{{ route('tpa_agrupados.index') }}" class="btn btn-secondary">
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
@stop