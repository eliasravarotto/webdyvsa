@extends('layout')

@section('title_and_meta')
  <title>{{$post->titulo}}</title>
  <meta name="description" content="Derka y Vargas Responsabilidad Social Empresarial, Noticias Toyota Chaco, Eventos Toyota Chaco">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/post/{{$post->slug}}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{$post->titulo}}" />
    <meta property="og:image" content="{{$post->imagen_portada}}"/>
@stop

@section('content')

<div class="container mt-3">
{{-- 	<ol class="breadcrumb">
      <li><a href="/">Inicio</a></li>
      @switch($post->tema->tema)
          @case('RSE')
            <li><a href="{{route('rse')}}">{{$post->tema->tema}}</a></li>
            @break
          @case('NOTICIAS')
            <li><a href="{{route('noticias')}}">{{$post->tema->tema}}</a></li>
            @break
          @case('EVENTOS')
            <li><a href="{{route('eventos')}}">{{$post->tema->tema}}</a></li>
            @break
          @default
          <li><a href="#">{{$post->tema->tema}}</a></li>
      @endswitch
      <li class="active">{{$post->titulo}}</li>
  </ol> --}}

  <div class="row">
    <div class="col-xs-12 col-md-12 text-center">
      <img class="img-responsive box-shadow border-rad-7" src="{{$post->imagen_portada}}" alt="{{$post->alt_img}}" title="{{$post->titulo}}" style="display: inline-block;">
    </div>
    <div class="col-xs-12 col-md-10 col-offset-md-1">
      <h2>{{$post->titulo}}</h2>
    <ul class="list-unstyled list-inline data-post">
      <li class="text-muted"><i aria-hidden="true" class="fa fa-calendar"></i> {{$post->created_at}}</li> 
      <li class="text-muted">
        <div class="magazine-loop-views">
          <div class="magazine-category-tema normal-font">{{$post->tema->tema}}</div>
        </div>
      </li>
    </ul>
      {{-- <div style="overflow: hidden;">
          <img class="img-portada" src="{{$post->imagen_portada}}" alt="{{$post->alt_img}}" title="{{$post->titulo}}" style="max-height: 275px; float: right;">
          <div>{!!$post->contenido!!}</div>
      </div> --}}
    <div>{!!$post->contenido!!}</div>
    </div>
  </div>

</div>

@stop