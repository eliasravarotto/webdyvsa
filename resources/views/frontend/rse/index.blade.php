@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Empresa</title>
  <meta name="description" content="Derka y Vargas Servicios de Posventa, Mantenimiento express, Plan de mantenimiento Toyota, Servicio técnico oficial Toyota">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/responsabilidad-social-empresarial" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="RSE DERKA Y VARGAS" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('styles_sheets')
  <style type="text/css">
    .stm_widget_recent_news .stm_magazine_single_list .stm-magazine-loop-data {
        width: 100%;
        padding: 0; 
    }
    .stm_widget_recent_news .stm_magazine_single_list .magazine-list-img {
      width: 100%;
  }

  .has-post-thumbnail .magazine-grid-img img{
        max-width: 100%;
        height: auto;
        vertical-align: middle;
        border: 0;
  }

.features-big-wrap {
      display: block;
    overflow: hidden;
    position: relative;
    float: left;
}

.features-big-wrap .stm-magazine-loop-data {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    position: absolute;
    bottom: 0;
    padding: 0;
}
 .features-big-wrap .stm-magazine-loop-data .magazine-category {
    display: inline-block;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-line-pack: center;
    align-content: center;
    color: #fff;
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 700;
    background: #18ca3e;
    padding: 4px 10px 3px;
    margin: 0 0 0 30px;
    text-overflow: ellipsis;
    white-space: nowrap;
}
 .features-big-wrap .stm-magazine-loop-data .news-meta-wrap {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    background: rgba(42,64,69,.3);
    padding: 15px 30px 18px;
    -webkit-transition: all .2s ease-in;
    transition: all .2s ease-in;
}
 .features-big-wrap .stm-magazine-loop-data .news-meta-wrap h3 {
    display: block;
    width: 100%;
    clear: both;
    font-size: 24px !important;
    color: #fff;
    letter-spacing: -1px;
    margin-bottom: 15px;
}
 .features-big-wrap .stm-magazine-loop-data .news-meta-wrap .left {
    display: block;
    width: 50%;
    padding-left: 2px;
}
 .features-big-wrap .stm-magazine-loop-data .news-meta-wrap .left .magazine-loop-Date {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    color: #fff;
    float: left;
    margin-right: 35px;
}

 .features-big-wrap .stm-magazine-loop-data .news-meta-wrap .left .magazine-loop-Date div {
    color: #fff;
    font-size: 12px;
}

 .features-big-wrap .stm-magazine-loop-data .news-meta-wrap .right {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    width: 50%;
    text-align: right;
}
 .features-big-wrap .stm-magazine-loop-data .news-meta-wrap .right .magazine-loop-reviews {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    color: #fff;
    margin-right: 35px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
 .features-big-wrap .stm-magazine-loop-data .news-meta-wrap .right .magazine-loop-views {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    color: #fff;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

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
      <li class="active">RSE</li>
  </ol>
  <div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="vc_column-inner ">
          <div class="wpb_wrapper">
            <div class="stm_widget_recent_news">
              <div class="recentNewsAnimate">
                @foreach($posts as $post)
                    <a href="{{ route('show_post', $post->slug) }}" title="{{$post->titulo}}" class="visible-md visible-lg stm_magazine_single_list no_deco post-208 type-post status-publish format-standard has-post-thumbnail hentry category-news tag-future tag-interior tag-multimedia">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="magazine-list-img">
                            <img width="255" height="160" src="{{$post->imagen_portada}}" class="attachment-stm-img-255-160 size-stm-img-255-160 wp-post-image" alt="">
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="stm-magazine-loop-data">
                            <h3>
                              {{$post->titulo}}
                            </h3>
                            <div class="middle-content">
                              <div class="magazine-category normal-font">
                                {{$post->tema}}        
                              </div>
                              <div class="magazine-loop-date">
                                  <i class="stm-service-icon-calendar_service" style="margin-right: 5px;"></i> 
                                  {{date('d M Y', strtotime($post->created_at))}}
                              </div>
                              <div class="magazine-loop-reviews">
                                <i class="stm-icon-ico_mag_reviews"></i> 4
                              </div>
                              <div class="magazine-loop-views">
                                <i class="stm-icon-ico_mag_eye"></i> 157
                              </div>
                            </div>
                            <div class="bottom-content">
                              <p>{{str_limit(strip_tags($post->contenido), 200, '...')}}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        @foreach($posts as $post)
            <div class="features-big-wrap">
              <a href="{{ route('show_post', $post->slug) }}" title="Citroen CEO Redmund Dipak" class="visible-xs visible-sm stm_magazine_single_grid no_deco post-270 post type-post status-publish format-standard has-post-thumbnail hentry category-interview tag-brabus tag-future tag-interior tag-multimedia">
                  <div class="magazine-grid-img">
                      <img src="{{$post->imagen_portada}}" class="attachment-stm-img-690-410 size-stm-img-690-410 wp-post-image" alt="">        </div>
                  <div class="stm-magazine-loop-data">
                      <div class="magazine-category heading-font">
                          {{$post->tema}}                
                      </div>
                      <div class="news-meta-wrap">
                          <h3 class="ttc">{{$post->titulo}}</h3>
                          <div class="left">
                              <div class="magazine-loop-Date">
                                  <i class="stm-service-icon-calendar_service" style="margin-right: 7px; font-size: 1.7rem"></i>
                                  <div class="heading-font" style="font-size: 1.7rem">{{date('d M Y', strtotime($post->created_at))}}</div>
                              </div>
                          </div>
                          <div class="right">
                             {{--  <div class="magazine-loop-reviews">
                                  <i class="stm-icon-ico_mag_reviews"></i>
                                  <div class="heading-font">0</div>
                              </div>
                              <div class="magazine-loop-views">
                                  <i class="stm-icon-ico_mag_eye"></i>
                                  <div class="heading-font">1402</div>
                              </div> --}}
                          </div>
                      </div>
                  </div>
              </a>
            </div>
        @endforeach
    </div>
  </div>
</div>

@stop