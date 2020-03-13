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
    p{
      line-height: 2;
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
    font-weight: 400;
}



</style>


@stop

@section('content')

<section>
  <div id="mu-call-to-action" class="mu-call-to-action-rse">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-call-to-action-area">
          <div class="mu-call-to-action-left">
            <h1 class="white">Responsabilidad Social Empresarial</h1>
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
    <div class="row">
      <div class="col-md-1 col-sm-12"></div>
      <div class="col-md-10 col-sm-12">
          <div class="row">
            {{-- CONTENT --}}
            <div class="col">
                <!-- Programa RSE -->
                <div>
                  <div class="text-center py-4">
                    <h3 class="text-left text-dark-3 mb-4">El Programa de Desarrollo de RSE se basa en tres pilares fundamentales: Ambiente, Seguridad vial y Educación para la empleabilidad</h3>
                    <p class="fs-17 text-left text-muted">La RSE y el desarrollo sustentable para una empresa significan adoptar estrategias de negocio que cumplan con las necesidades de la organización y sus accionistas, al tiempo que gestionan sus impactos positivos y negativos en el ambiente y en la sociedad.
                      Las empresas que logren involucrarse en los asuntos y actividades relacionadas con su comunidad serán capaces de demostrar que son un contribuyente responsable con el futuro del desarrollo social.
                    </p>
                  </div>
                  <div class="text-center py-3">
                    <a href="https://www.toyota.com.ar/acerca-de-toyota/ciudadania-corporativa" class="btn btn-dark btn-round" target="_blank">Leer más</a>
                  </div>
                </div>

                <!-- RSE Concesionarios 2018 -->
                <div class="mt-5">
                  <div class="row">
                    <div class="col-md-12">
                      <img class="img-fluid border-rad-7" src="{{asset('imagenes/rse/imagen-firmas.png')}}">
                      <p class="text-muted mx-2 font-italic">Zárate, Buenos Aires - Junio 2018</p>
                      <div>
                        <p>El futuro de las empresas en los próximos años exige abordar el desafío de interrelacionar los objetivos de triple impacto: ambiental, social y económico.
                            Los programas de responsabilidad social empresaria (RSE) se integran cada vez más al corazón del negocio. En este mundo globalizado ya no se juzga el éxito empresarial sólo con indicadores financieros; los valores intangibles como la reputación, la ética y la responsabilidad . . .</p>
                            <a href="/responsabilidad-social-empresarial/programa-desarrollo-concesionarios-2018" class="btn btn-dark btn-round">Seguir leyendo</a>
                      </div>
                    </div>
                  </div>              
                </div>

                <!-- Programa RSE Derka y Vargas -->
                <div class="mt-6">
                  <div class="row">
                    <div class="col">
                      <div class="main-title">
                          <h1 class="text-dark-2">Programa RSE Derka y Vargas</h1>
                          <p class="text-dark-3">2018/2021</p>
                      </div>

                      <div class="pb-4">
                        <h4 class="text-dark-2">PALABRAS de EDUARDO FREDY VARGAS (Presidente Derka y Vargas S.A.)</h4>
                        <p class="my-3">
                          "Buenas noches y bienvenidos a todos lo presentes, autoridades, legisladores, funcionarios de gobierno y de Toyota Argentina, representantes de organizaciones de la sociedad civil, directivos y personal de nuestra empresa, familiares, amigos. Nos convoca hoy una fecha especial que nos relaciona con la comunidad desde otro lugar, como hacedores y protagonistas del cambio al . . ." <a href="{{route('programa_rse_dyv')}}"> Seguir leyendo</a>
                        </p>
                      </div>

                      <div class="owl-carousel owl-theme">
                        <div class="item thumbnail thumbnail-no-bg thumbnail-no-border">
                            <img class="border-rad-5" src="{{asset('imagenes/rse/rsedyv1.jpg')}}" alt="...">
                            <div >
                                <p class="text-center">RECONOCIMIENTO A DyV COMO EMPRESA SOCIALMENTE RESPONSABLE</p>
                            </div>
                        </div>

                        <div class="item thumbnail thumbnail-no-bg thumbnail-no-border">
                            <img class="border-rad-5" src="{{asset('imagenes/rse/rsedyv2.jpg')}}" alt="...">
                            <div >
                                <p class="text-center">MUJERES PROMOTORAS DE LA CULTURA QOM ENTREGANDO OBSEQUIOS</p>
                            </div>
                        </div>

                        <div class="item thumbnail thumbnail-no-bg thumbnail-no-border">
                            <img class="border-rad-5" src="{{asset('imagenes/rse/rsedyv3.jpg')}}" alt="...">
                            <div >
                                <p class="text-center">ENTREGA CERTIFICADOS ALUMNOS PROY. EMPRENDIENDO VITROFUSION</p>
                            </div>
                        </div>

                        <div class="item thumbnail thumbnail-no-bg thumbnail-no-border">
                            <img class="border-rad-5" src="{{asset('imagenes/rse/rsedyv4.jpg')}}" alt="...">
                            <div >
                                <p class="text-center">VISTA GENERAL DEL EVENTO</p>
                            </div>
                        </div>

                        <div class="item thumbnail thumbnail-no-bg thumbnail-no-border">
                            <img class="border-rad-5" src="{{asset('imagenes/rse/rsedyv5.jpg')}}" alt="...">
                            <div >
                                <p class="text-center">ENTREGA DE MOTORES Y EQUIPAMIENTO A ESCUELAS</p>
                            </div>
                        </div>

                        <div class="item thumbnail thumbnail-no-bg thumbnail-no-border">
                            <img class="border-rad-5" src="{{asset('imagenes/rse/rsedyv6.jpg')}}" alt="...">
                            <div >
                                <p class="text-center">JOVEN PARTICIPANTE DEL PROGRAMA M.E.T.A.</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Boletines y Certificados -->
                <div class="mt-6">
                  <div class="main-title">
                      <h1 class="text-dark-2">Boletines y Certificados</h1>
                      <p class="text-dark-3">Derka y Vargas</p>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <!-- Trigger the Modal -->
                      <div class="card">
                        <img class="click-image-viewer" src="https://www.w3schools.com/howto/img_snow.jpg" alt="Snow" style="width:100%;max-width:300px">
                        <div class="card-body">
                          
                        </div>
                      </div>
                      {{-- <img class="click-image-viewer" src="https://www.toyota.com.ar/storage/contents/kjc1CWpbS0.jpg" alt="Snow" style="width:100%;max-width:300px"> --}}

                      <!-- The Modal -->
                      <div id="myModal" class="viewer modal-viwer">
                        <!-- The Close Button -->
                        <span class="close close-btn-viwer"><i class="fas fa-times"></i></span>

                        <!-- Modal Content (The Image) -->
                        <img class="viewer modal-content" id="img01">

                        <!-- Modal Caption (Image Text) -->
                        <div class="viewer caption"></div>
                      </div>

                    </div>        
                  </div>
                </div>

            </div>
          </div>
          
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
    $('.click-image-viewer').click(function(){
      var img = this;
      var modalImg = document.getElementById("img01");
      var captionText = document.getElementById("caption");
      modalImg.src = this.src;
      $('.modal-viwer').show();

    });
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close-btn-viwer")[0];

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        $('.modal-viwer').hide();
      }


     $('.owl-carousel').owlCarousel({
        stagePadding: 0,
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
                items:3
            }
        }
    })

  </script>
@stop
