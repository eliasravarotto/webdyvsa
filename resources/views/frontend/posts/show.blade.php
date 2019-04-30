@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Empresa</title>
  <meta name="description" content="Derka y Vargas Responsabilidad Social Empresarial, Noticias Toyota Chaco, Eventos Toyota Chaco">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/post/{{$post->slug}}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{$post->titulo}}" />
    <meta property="og:image" content="{{$post->imagen_portada}}"/>
@stop

@section('styles_sheets')
  <style type="text/css">


  </style>
@stop

@section('mark-up-facebook')
    {{-- <meta property="og:url" content="https://www.derkayvargas.com" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="INICIO" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" /> --}}
@stop

@section('content')

<div class="container mt-3">
	<ol class="breadcrumb">
      <li><a href="/">Inicio</a></li>
      <li><a href="/">{{$post->tema->tema}}</a></li>
      <li class="active">{{$post->titulo}}</li>
  </ol>

</div>

@stop