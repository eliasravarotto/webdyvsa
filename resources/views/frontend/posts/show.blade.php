@extends('frontend.layout')

@section('title_and_meta')
  <title>{{$post->titulo}}</title>
  <meta name="description" content="Derka y Vargas Resistencia Chaco. Accede a un Toyota 0km. Encontra el auto usado que estas buscando con la mejor financiación.">
@stop

@section('mark-up-facebook')
  <meta property="og:type" content="article" />
  <meta property="og:url"   content="{{url()->current()}}" />
  <meta property="og:image" content="{{Request::root().$post->imagen_portada}}" />
@stop

@section('styles_sheets')
<style type="text/css">
  a{
    word-wrap: break-word !important;
  }
  .widget a:hover{
    text-decoration: none;
  }
</style>
@stop

@section('content')

<div class="container mt-3">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8">
      <div class="blog-1 blog-big">
        @if($post->image != null)
          <img class="w-100" src="{{$post->image->public_path}}" alt="{{$post->alt_img}}" title="{{$post->titulo}}" style="display: inline-block;">
        @endif
        <div class="detail">

          <ul class="list-unstyled list-inline data-post">
            <li class="text-muted">{{$post->created_at->format('d M Y')}}</li> 
          </ul>

          <h3>{{$post->titulo}}</h3>

          <div class="w-100">{!!$post->contenido!!}</div>

          <div class="share-links">
            <div class="title">
              <p class="mb-1">CATEGORÍAS</p>
            </div>
            <div class="tags-box">
              <ul class="tags mx-0 ">
                @foreach($post->categories as $category)
                <li><a href="#">Novedades</a></li> 
                @endforeach
              </ul>
            </div>
          </div>

          <!-- LARAVEL SHARE -->
          <div class="share-links">
            <div class="title">
              <p class="mb-1">COMPARTIR</p>
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