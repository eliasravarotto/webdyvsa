@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Usados - {{$unidad->marca}} {{$unidad->modelo}}</title>
  <meta name="description" content="Derka y Vargas Usados Seleccionados, Usados Certificados Toyota Chaco, financiacion usados {{$unidad->marca}} {{$unidad->modelo}}">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/usados/{{$unidad->slug}}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="DERKA Y VARGAS USADOS" />
    @if($unidad->foto != null)
    <meta property="og:image" content="{{asset($unidad->foto)}}" />
    @else
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
    @endif
@stop

@section('styles_sheets')

@stop

@section('content')
	<div class="container mar-top-20">
		<show-usado v-bind:data="{ unidad: {{$unidad}}, imagenes: {{$imagenes}} }"></show-usado>
	</div>
</article> 
@stop