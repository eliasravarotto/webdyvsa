@extends('backend.layout')

@section('content')
<div class="card" id="app">
    <div class="card-header">
        <strong class="card-title">Servicios</strong>
    </div>
    <div class="card-body">
    	<form id="form" action="{{ route('admin_servicios.store') }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
			@include('backend.servicios.form')
      	</form>
    </div>
</div>
@stop