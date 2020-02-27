@extends('frontend.layout')

@section('title_and_meta')
  <title>Responsabilidad Social Empresarial</title>
  <meta name="description" content="Responsabilidad social empresarial, responsabilidad social empresaria, Toyota RSE, Toyota responsabilidad social empresarial">
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
    margin-bottom: 15px;
}

.features-big-wrap .stm-magazine-loop-data,
.header-rse .stm-magazine-loop-data {
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
 .features-big-wrap .stm-magazine-loop-data .news-meta-wrap,
 .header-rse .news-meta-wrap{
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
 .features-big-wrap .stm-magazine-loop-data .news-meta-wrap h3, 
 .header-rse .news-meta-wrap h3, 
 .header-rse .news-meta-wrap p {
    display: block;
    width: 100%;
    clear: both;
    font-size: 24px !important;
    color: #fff;
    letter-spacing: -1px;
    margin-bottom: 15px;
}

 .header-rse .news-meta-wrap p{
  color: white;
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


.header-rse{
  position: relative;
}

.header-rse .news-meta-wrap {
  padding: 10px;
}

 .header-rse .news-meta-wrap{
    background: rgba(42,64,69,.6);
 }

  .header-rse .news-meta-wrap p {
    font-size: 18px !important;
  }


.owl-carousel .item p{
    color: black;
    font-size: 1.5rem;
    font-weight: 400;
}

.carousel-caption p{
  font-size: 1rem;
  text-align: justify;
}

.p-absolute{
  position: absolute;
  background-color: darkcyan;
  bottom: 25%
}

#mu-call-to-action{
  background: url('imagenes/rse/bg-gestion-ambiental.jpg');
}
</style>


@stop

@section('content')

<section>
  <div id="mu-call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-call-to-action-area">
          <div class="mu-call-to-action-left">
            <h1><b>RESPONSABILIDAD SOCIAL EMPRESARIAL</b></h1>
            <p class="fs-17">Construyamos juntos la mejor comunidad.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="my-3">
  <div class="container">
    <div class="text-center py-3">
      <h1 class="text-center text-muted">Programa de Desarrollo de RSE</h1>
      {{-- <h3 class="text-center text-muted">Concesionarios 2018</h3> --}}
      <p class="fs-17 text-center text-muted mt-3">La RSE y el desarrollo sustentable para una empresa significan adoptar estrategias de negocio que cumplan con las necesidades de la organización y sus accionistas, al tiempo que gestionan sus impactos positivos y negativos en el ambiente y en la sociedad.
        Las empresas que logren involucrarse en los asuntos y actividades relacionadas con su comunidad serán capaces de demostrar que son un contribuyente responsable con el futuro del desarrollo social.
      </p>
    </div>
    <div class="text-center py-3">
      <h3 class="text-muted mt-3">
        El Programa se basa en tres pilares fundamentales
      </h3>
      <div class="row my-3">
        <div class="col-sm-12 col-md-4 text-center">EDUCACIÓN</div>
        <div class="col-sm-12 col-md-4 text-center">MEDIO AMBIENTE</div>
        <div class="col-sm-12 col-md-4 text-center">SEGURIDAD</div>
      </div>
    </div>
  </div>
</section>

<section class="header-rse py-1">
  <div class="container" style="box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);border-radius: 7px; padding: 0px !important">
    <div>
    <img src="{{asset('imagenes/rse/portadarse.png')}}" style="width: 100%; border-top-right-radius: 7px; border-top-left-radius: 7px;">
    <div class="stm-magazine-loop-data" style="position: relative;">
      <a class="news-meta-wrap" href="{{route('programa_desarrollo_concesionarios')}}" style="text-decoration: none;">
        <h3 class="ttc text-center">Programa de Desarrollo de RSE</h3>
        <p class="text-center">Concesionarios 2018</p> 
      </a>
    </div>
    </div>
  </div>
</section>


<section class="py-5">
    <div class="container" style="box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);">
        <h3 class="ttc text-center">Programa RSE Derka y Vargas</h3>
        <p class="text-center">2018/2021</p> 
        <div class="row py-3">
            <div class="owl-carousel owl-theme">
                <a href="{{route('programa_rse_dyv')}}" class="item thumbnail thumbnail-no-bg thumbnail-no-border">
                    <img src="{{asset('imagenes/rse/rsedyv1.jpg')}}" alt="...">
                    <div class="caption caption-default">
                        <!-- <h4 class="text-center"></h4> -->
                        <p class="text-center">RECONOCIMIENTO A DyV COMO EMPRESA SOCIALMENTE RESPONSABLE (Sec.Empleo)</p>
                    </div>
                </a>

                <a href="{{route('programa_rse_dyv')}}" class="item thumbnail thumbnail-no-bg thumbnail-no-border">
                    <img src="{{asset('imagenes/rse/rsedyv2.jpg')}}" alt="...">
                    <div class="caption caption-default">
                        <!-- <h4 class="text-center"></h4> -->
                        <p class="text-center">MUJERES PROMOTORAS DE LA CULTURA QOM ENTREGANDO OBSEQUIOS</p>
                    </div>
                </a>

                <a href="{{route('programa_rse_dyv')}}" class="item thumbnail thumbnail-no-bg thumbnail-no-border">
                    <img src="{{asset('imagenes/rse/rsedyv3.jpg')}}" alt="...">
                    <div class="caption caption-default">
                        <!-- <h4 class="text-center"></h4> -->
                        <p class="text-center">ENTREGA CERTIFICADOS ALUMNOS PROY. EMPRENDIENDO VITROFUSION</p>
                    </div>
                </a>

                <a href="{{route('programa_rse_dyv')}}" class="item thumbnail thumbnail-no-bg thumbnail-no-border">
                    <img src="{{asset('imagenes/rse/rsedyv4.jpg')}}" alt="...">
                    <div class="caption caption-default">
                        <!-- <h4 class="text-center"></h4> -->
                        <p class="text-center">VISTA GENERAL DEL EVENTO</p>
                    </div>
                </a>

                <a href="{{route('programa_rse_dyv')}}" class="item thumbnail thumbnail-no-bg thumbnail-no-border">
                    <img src="{{asset('imagenes/rse/rsedyv5.jpg')}}" alt="...">
                    <div class="caption caption-default">
                        <!-- <h4 class="text-center"></h4> -->
                        <p class="text-center">ENTREGA DE MOTORES Y EQUIPAMIENTO A ESCUELAS</p>
                    </div>
                </a>

                <a href="{{route('programa_rse_dyv')}}" class="item thumbnail thumbnail-no-bg thumbnail-no-border">
                    <img src="{{asset('imagenes/rse/rsedyv6.jpg')}}" alt="...">
                    <div class="caption caption-default">
                        <!-- <h4 class="text-center"></h4> -->
                        <p class="text-center">JOVEN PARTICIPANTE DEL PROGRAMA M.E.T.A. (actual miembro de la planta de personal de la empresa)</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Arbol RSE 
<section>
  <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2500">
    <div class="carousel-inner">

      <div class="item active">
        <div class="holder col-sm-12 col-md-5 py-4 col-md-offset-1">
          <img class="img-responsive" src="{{asset('imagenes/rse/arbol1.png')}}" alt="...">
        </div>
        <div class="col-sm-4 col-md-5 py-5">
          <div class="carousel-caption">
            <p class="text-muted"><span style="color: black; font-size: 18px;">Motivados con el Programa RSE Concesionarios 2018, e inspirados por los valores que sustentan a Toyota y a Derka y Vargas, diseñamos el presente Programa RSE DyV 2018-2021 apuntando al triple impacto que la RSE espera,</span></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="holder col-sm-12 col-md-5 py-4 col-md-offset-1">
          <img class="img-responsive" src="{{asset('imagenes/rse/arbol2.png')}}" alt="...">
        </div>
        <div class="col-sm-4 col-md-5 py-5">
          <div class="carousel-caption">
            <p class="text-muted">Motivados con el Programa RSE Concesionarios 2018, e inspirados por los valores que sustentan a Toyota y a Derka y Vargas, diseñamos el presente Programa RSE DyV 2018-2021 apuntando al triple impacto que la RSE espera, <span style="color: black; font-size: 18px;">nos enfocamos en el eje Educación para la Empleabilidad,</span></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="holder col-sm-12 col-md-5 py-4 col-md-offset-1">
          <img class="img-responsive" src="{{asset('imagenes/rse/arbol3.png')}}" alt="...">
        </div>
        <div class="col-sm-4 col-md-5 py-5">
          <div class="carousel-caption">
            <p class="text-muted" >Motivados con el Programa RSE Concesionarios 2018, e inspirados por los valores que sustentan a Toyota y a Derka y Vargas, diseñamos el presente Programa RSE DyV 2018-2021 apuntando al triple impacto que la RSE espera, nos enfocamos en el eje Educación para la Empleabilidad, <span style="color: black; font-size: 18px;">y dentro de éste, el eje Emprendedurismo con jóvenes y mujeres N.B.I.</span></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="holder col-sm-12 col-md-5 py-4 col-md-offset-1">
          <img class="img-responsive" src="{{asset('imagenes/rse/arbol4.png')}}" alt="...">
        </div>
        <div class="col-sm-4 col-md-5 py-5">
          <div class="carousel-caption">
            <p class="text-muted" class="text-muted">Motivados con el Programa RSE Concesionarios 2018, e inspirados por los valores que sustentan a Toyota y a Derka y Vargas, diseñamos el presente Programa RSE DyV 2018-2021 apuntando al triple impacto que la RSE espera, nos enfocamos en el eje Educación para la Empleabilidad, y dentro de éste, el eje Emprendedurismo con jóvenes y mujeres N.B.I.</p>
            <p class="text-muted" class="text-muted"><span style="color: black; font-size: 18px;">Con el desafío de lograr reducir los índices de desempleo y desocupación en la provincia del Chaco, a más de lograr fortalecer la cultura de estos grupos, como también su sustentabilidad, iniciamos acciones con mujeres artesanas emprendedoras Qom</span></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="holder col-sm-12 col-md-5 py-4 col-md-offset-1">
          <img class="img-responsive" src="{{asset('imagenes/rse/arbol5.png')}}" alt="...">
        </div>
        <div class="col-sm-4 col-md-5 py-5">
          <div class="carousel-caption">
            <p class="text-muted">Motivados con el Programa RSE Concesionarios 2018, e inspirados por los valores que sustentan a Toyota y a Derka y Vargas, diseñamos el presente Programa RSE DyV 2018-2021 apuntando al triple impacto que la RSE espera, nos enfocamos en el eje Educación para la Empleabilidad, y dentro de éste, el eje Emprendedurismo con jóvenes y mujeres N.B.I.</p>
            <p class="text-muted">Con el desafío de lograr reducir los índices de desempleo y desocupación en la provincia del Chaco, a más de lograr fortalecer la cultura de estos grupos, como también su sustentabilidad, iniciamos acciones con mujeres artesanas emprendedoras Qom <span style="color: black; font-size: 18px;">y estudiantes secundarios con sendos proyectos de artesanías y vitrofusión.</span></p>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="holder col-sm-12 col-md-5 py-4 col-md-offset-1">
          <img class="img-responsive" src="{{asset('imagenes/rse/arbol6.png')}}" alt="...">
        </div>
        <div class="col-sm-4 col-md-5 py-5">
          <div class="carousel-caption">
            <p class="text-muted">Motivados con el Programa RSE Concesionarios 2018, e inspirados por los valores que sustentan a Toyota y a Derka y Vargas, diseñamos el presente Programa RSE DyV 2018-2021 apuntando al triple impacto que la RSE espera, nos enfocamos en el eje Educación para la Empleabilidad, y dentro de éste, el eje Emprendedurismo con jóvenes y mujeres N.B.I.</p>
            <p class="text-muted">Con el desafío de lograr reducir los índices de desempleo y desocupación en la provincia del Chaco, a más de lograr fortalecer la cultura de estos grupos, como también su sustentabilidad, iniciamos acciones con mujeres artesanas emprendedoras Qom y estudiantes secundarios con sendos proyectos de artesanías y vitrofusión.</p>
            <p class="text-muted"><span style="color: black; font-size: 18px;">Articulamos acciones con actores internos (voluntarios corporativos) y externos (Legislatura, Gobierno, Universidad, OSC), siendo la educación uno de los pilares para el logro de los resultados esperados de este Programa.</span></p>          </div>
        </div>
      </div>

      <div class="item">
        <div class="holder col-sm-12 col-md-5 py-4 col-md-offset-1">
          <img class="img-responsive" src="{{asset('imagenes/rse/arbol7.png')}}" alt="...">
        </div>
        <div class="col-sm-4 col-md-5 py-5">
          <div class="carousel-caption">
            <p class="text-muted">Motivados con el Programa RSE Concesionarios 2018, e inspirados por los valores que sustentan a Toyota y a Derka y Vargas, diseñamos el presente Programa RSE DyV 2018-2021 apuntando al triple impacto que la RSE espera, nos enfocamos en el eje Educación para la Empleabilidad, y dentro de éste, el eje Emprendedurismo con jóvenes y mujeres N.B.I.</p>
            <p class="text-muted">Con el desafío de lograr reducir los índices de desempleo y desocupación en la provincia del Chaco, a más de lograr fortalecer la cultura de estos grupos, como también su sustentabilidad, iniciamos acciones con mujeres artesanas emprendedoras Qom y estudiantes secundarios con sendos proyectos de artesanías y vitrofusión.</p>
            <p class="text-muted">Articulamos acciones con actores internos (voluntarios corporativos) y externos (Legislatura, Gobierno, Universidad, OSC), siendo la educación uno de los pilares para el logro de los resultados esperados de este Programa.</p>
            <p class="text-muted"><span style="color: black; font-size: 18px;">Al mismo tiempo, otro gran desafío que podrá fortalecer nuestros objetivos es la implementación de los Estándares GRI4, como también la sanción de la Ley de RSE en la Provincia del Chaco, cuyo anteproyecto está a cargo de nuestra responsable de RSE.</span></p>
            <p class="text-muted"><span style="color: black; font-size: 18px;">Nos sustenta además la Agenda 2030, con su visión ambiciosa del desarrollo sostenible que integra sus dimensiones económica, social y ambiental.</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
-->

@stop

@section('script')
  <script type="text/javascript">
   
     $('.owl-carousel').owlCarousel({
        stagePadding: 50,
        loop:false,
        margin:10,
        nav:false,
        autoPlay: 300, //Set AutoPlay to 3 seconds
        items : 3,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })

  </script>
@stop
