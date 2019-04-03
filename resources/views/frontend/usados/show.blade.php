@extends('layout')


@section('styles_sheets')

@stop

@section('content')
	<div class="container mar-top-20">
		<show-usado v-bind:data="{ unidad: {{$unidad}}, imagenes: {{$imagenes}} }"></show-usado>
	</div>
</article> 
@stop