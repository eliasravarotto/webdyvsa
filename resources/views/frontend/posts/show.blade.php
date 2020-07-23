@extends('frontend.layout')

@section('title_and_meta')
  <title>{{$post->titulo}}</title>
  <meta name="description" content="Derka y Vargas Responsabilidad Social Empresarial, Noticias Toyota Chaco, Eventos Toyota Chaco">
@stop

@section('mark-up-facebook')
  <meta property="og:type" content="article" />
  <meta property="og:image" content="{{url()->current().$post->imagen_portada}}" />
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
    <div class="col-xs-12 col-sm-12 col-md-8">
      <div class="blog-1 blog-big">
        <img class="w-100" src="{{$post->imagen_portada}}" alt="{{$post->alt_img}}" title="{{$post->titulo}}" style="display: inline-block;">
        <div class="detail">
          <h3>{{$post->titulo}}</h3>
          <ul class="list-unstyled list-inline data-post">
            <li class="text-muted"><i aria-hidden="true" class="fa fa-calendar"></i> {{$post->created_at}}</li> 
            <li class="text-muted">
              <div class="magazine-loop-views">
                <div class="magazine-category-tema normal-font">{{$post->tema->tema}}</div>
              </div>
            </li>
          </ul>
          <div>{!!$post->contenido!!}</div>

          <div class="share-links">
            <div class="title">
              <p class="mb-1">Compartir en:</p>
            </div>
            {!!
              Share::page(\Request::fullUrl(), $post->titulo)
                  ->facebook()
                  ->whatsapp()
                  ->twitter()
              !!}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
      <div class="sidebar-right">
        @include('frontend.posts.widget-recent-posts', [ 'postInView' => $post ])
        @include('frontend.posts.widget-tags')
      </div>
    </div>
  </div>

</div>

@stop