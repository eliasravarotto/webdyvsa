@extends('backend.layout')

@section('content')
<div class="card border-info" id="app">
    <div class="card-header bg-default font-weight-bold">
        SERVICIOS
  	</div>
    <div class="card-body">
    	<form id="form" action="{{ route('admin_servicios.store') }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
			@include('backend.servicios.form')
      	</form>
    </div>
</div>
@stop