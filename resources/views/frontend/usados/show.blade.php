@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Usados - {{$unidad->marca}} {{$unidad->modelo}}</title>
  <meta name="description" content="Derka y Vargas Usados Seleccionados, Usados Certificados, financiacion usados {{$unidad->marca}} {{$unidad->modelo}}">
@stop

@section('styles_sheets')

@stop

@section('content')
	<div class="container mar-top-20">
		<show-usado v-bind:data="{ unidad: {{$unidad}}, imagenes: {{$imagenes}} }"></show-usado>
	</div>
</article> 
@stop