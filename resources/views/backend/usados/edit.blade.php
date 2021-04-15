@extends('backend.layout')

@section('content')
<div class="card border-info">

    <div class="card-body">
    	<form action="{{ route('usados.update', $usado->id) }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			<div class="card-panel mb-5">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="d-flex align-items-center">
                            <div class="icon-header bg-warning"><i class="fa fa-car"></i></div>
                            <div class="d-block">
                                    <h5 class="card-title mb-0">USADOS</h5>
                                <small class="text-muted">#{{ $usado->id }} - {{ $usado->marca }} {{ $usado->modelo }} </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 text-right">
                        <a href="/admin/usados" class="btn btn-secondary">
					  Cancelar
					</a>
					<button type="submit" class="btn btn-success">
					  Guardar
					</button>
                    </div>
                </div>
            </div>

			{{ csrf_field() }}
    		<input name="_method" type="hidden" value="PUT">
            @include('backend.usados.form')
            <div class="row form-group" style="margin-top: 50px;">
				<div class="col-9">
					<a href="/admin/usados" class="btn btn-secondary">
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