<style type="text/css">
.hide-bullets {
    list-style:none;
    /*margin-left: -40px;*/
    margin-top:20px;
}

/*CABECERA*/
.single-car-prices {
    /*background-color: #3c98ff;*/
    /*background-color: #016a87;*/
    background-color: #644093;
}
.single-regular-price {
    padding: 22px 0 13px;
    vertical-align: middle;
}
.single-regular-price>.labeled {
    margin-right: 7px;
    font-size: 12px;
    font-weight: 400;
    color: #fff;
    vertical-align: middle;
    text-transform: uppercase;
}   
.single-regular-price>.h3 {
    position: relative;
    top: -1px;
    left: 1px;
    color: #fff;
    vertical-align: middle;
}

/*Cuerpo*/
.single-car-data {
    padding: 12px 26px 13px 23px;
    margin-bottom: 26px;
    border: #016a87 1px solid;
    /*background-color: #f0f2f5;*/
}
.stm_cargurus_wrapper {
    border-top: 1px solid #d5d9e0;
    padding-top: 15px;
    margin: 22px 0 15px;
    text-align: center;
}

.single-car-data>table tr td.t-label {
    padding-right: 3px;
    text-transform: uppercase;
    color: #888;
    font-size: 1.5rem;
}

.single-car-data>table tr td {
    padding: 11px 0 6px;
}
table>tbody tr td {
    padding: 9px 0 8px;
    /*font-size: 12px;*/
    color: #888;
    border-bottom: 1px solid #d5d9e0;
}

.single-car-data>table tr td.t-value {
    padding-left: 3px;
    margin-bottom: 0;
    font-weight: 700;
    font-size: 1.6rem;
    line-height: 18px;
}
.single-car-data>table tr td {
    padding: 11px 0 6px;
}

.carousel-inner > div > img{
  width:100%;
}

</style>
<template>
	<div>
        <div class="container">
            <ol class="breadcrumb">
              <li><a href="/">Inicio</a></li>
              <li><a href="/usados">Usados</a></li>
              <li class="active">{{unidad.marca}} {{unidad.modelo}}</li>
            </ol>
            <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-7" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div v-for="(imagen, i) in imagenes" :class="{ 'active item flex': i==0, 'item flex': i!=0 }" :data-slide-number="i">
                                            <img class="text-center" :src="imagen.url">
                                        </div>
                                    </div>
                                    <!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="stm-single-car-side">
                                    <!--Pricio-->
                                    <div class="single-car-prices">
                                        <div class="single-regular-price text-center">
                                            <span class="labeled">Precio</span>
                                            <span class="h3">$ {{formatearPrecio(unidad.precio)}}</span>
                                        </div>
                                    </div>

                                    <!--Datos-->
                                    <div class="single-car-data">
                                        <!-- <div class="stm_cargurus_wrapper cg_style">
                                            <span data-cg-vin="5UXFE43599L261101" data-cg-price="12390"><span data-cg-error="no information"></span></span>
                                        </div> -->
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="t-label">Marca</td>
                                                    <td class="t-value h6">{{unidad.marca}}</td>
                                                </tr>
                                                                                        
                                                <tr>
                                                    <td class="t-label">Modelo/Version</td>
                                                    <td class="t-value h6">{{unidad.modelo}}</td>
                                                </tr>
                                                                                        
                                                <tr>
                                                    <td class="t-label"> Año</td>
                                                    <td class="t-value h6">{{unidad.anio}}</td>
                                                </tr>
                                                <!--VIN NUMBER-->
                                                <tr>
                                                    <td class="t-label"> <i class="stm-service-icon-color_type"></i> Color</td>
                                                    <td class="t-value t-vin h6">{{unidad.color}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="t-label"> <i class="stm-icon-road"></i> Km</td>
                                                    <td class="t-value t-vin h6">{{unidad.km}} KM.</td>
                                                </tr>
                                                <tr>
                                                    <td class="t-label"><i class="stm-icon-engine_fill"></i> Transmisión</td>
                                                    <td class="t-value t-vin h6">{{unidad.transmision}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="t-label"><i class="stm-icon-fuel"></i> Combustible</td>
                                                    <td class="t-value t-vin h6">{{unidad.combustible}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="t-label"><i class="fa fa-certificate"></i> Certificado Toyota</td>
                                                    <td class="t-value t-vin h6" v-if="unidad.uct">SI</td>
                                                    <td class="t-value t-vin h6" v-else>NO</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <a :href="'https://wa.me/5493644178456?text=Hola%20estoy%20interesado/a%20en%20el%20vehículo%20'+unidad.marca+' - '+unidad.modelo"  class="btn btn-default d-block" target="_blank" style="font-size: 16px;">
                                        <i style="font-size: 20px; font-weight: bold; color: #13820a" class="fa fa-whatsapp"></i>
                                        CONSULTAR
                                    </a>
                                </div>
                            </div>
                            <!-- <div id="slide-content" style="display: none;">
                                <div v-for="(imagen, i) in imagenes" :id="'slide-content-'+i">
                                    <h2>Slider One</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!--/Slider-->
                <div class="row hidden-xs" id="slider-thumbs">
                    <!-- Bottom switcher of slider -->
                    <ul class="hide-bullets" style="margin: 15px 0px 15px 0px">
                        <li class="col-sm-2" v-for="(imagen, i) in imagenes">
                            <a class="thumbnail" :id="'carousel-selector-'+i" @click.prevent="activeImg(i)">
                                <img :src="imagen.url">
                            </a>
                        </li>
                    </ul>                 
                </div>
            </div>
            <div class="well">
                <p>Un <b>Usado Certificado Toyota</b> es un vehículo que puede adquirir un cliente cuyos beneficios son
                los siguientes:
                </p>
                <ul class="list-unstyled">
                    <li>- Garantía de 1 año o 20.000 km.</li>
                    <li>- Vehículos que fueron atendidos en concesionarios oficiales.</li>
                    <li>- 150 puntos de inspección realizados por técnicos capacitados.</li>
                </ul>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <!-- Carusel DESKCTOP-->
                    <div id="myCarousel" class="carousel slide visible-md visible-lg" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="/imagenes/home/slide.png" alt="">
                        </div>

                        <div class="item">
                          <img src="/imagenes/home/portada_uva.png" alt="">
                        </div>

                        <div class="item">
                          <img src="/imagenes/home/slide6.png" alt="">
                        </div>
                      </div>

                      <!-- Left and right controls -->
                      <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a> -->
                    </div>
                </div>
            </div>
        </div>

       <!--  <section>
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                      <h2 class="text-center">OTROS USADOS <br> <small>Quizás te interese otro</small></h2>
                    </div>
                </div>
            </div>
            <div class="row">
              <div v-for="unidad in otrasUnidades" class="col-sm-6 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt="">
                  <div class="caption caption-default">
                    <h3 class="text-center">{{unidad.marca}} {{unidad.modelo}} {{unidad.version}}</h3>                        
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> {{ unidad.anio }}
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> {{ unidad.km }}
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> {{ unidad.color }}
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <a v-bind:href="'/usados/'+unidad.id" class="btn btn-default" role="button">VER DETALLES</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="btn btn-info" href="/usados">VER TODOS</a>
                </div>
            </div>
        </section> -->
	</div>
</template>

<script>
    export default {
    	props: ['data'],
        data(){
            return {
            	unidad: '',
                imagenes:'',
                form:{
                    nombre:'',
                    email: '',
                    telefono:'',
                    mensaje:'',
                },
                otrasUnidades: ['asas'],
            }
        },
        mounted() {
            this.unidad = this.data.unidad;
            this.imagenes = this.data.imagenes;
            $('#myCarousel').carousel({
                    interval: 5000
            });
     
            $('#carousel-text').html($('#slide-content-0').html());
     
            // When the carousel slides, auto update the text
            $('#myCarousel').on('slid.bs.carousel', function (e) {
                     var id = $('.item.active').data('slide-number');
                    $('#carousel-text').html($('#slide-content-'+id).html());
            });
                    
        },
        methods:{
            openModalContacto(unidad)
            {

            },
            showImage(img){
               
                
            },
            otrosUsados(){
                self = this;
                // axios
                //     .get('/usados/get-last')
                //     .then(function (response) {
                //         console.log(response.data);
                //         self.otrasUnidades = response.data;
                //     })
            },
            enviarConsulta()
            {
                axios.post('/consultar/usado/'+this.unidad.id, {
                    nombre: this.form.nombre,
                    telefono: this.form.telefono,
                    email: this.form.email,
                    mensaje: this.form.mensaje,
                    marca: this.unidad.marca,
                    modelo: this.unidad.modelo,
                  })
                  .then(function (response) {
                    console.log(response);
                    this.form.nombre = '';
                    this.form.telefono = '';
                    this.form.email = '';
                    this.form.mensaje = '';

                  })
                  .catch(function (error) {
                    console.log(error);
                  });
            },
            activeImg(id){
                $('#myCarousel').carousel(id);
            },
            formatearPrecio(num){
                num = num.toString().replace(/\./g,'');
                if(!isNaN(num)){
                    num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                    num = num.split('').reverse().join('').replace(/^[\.]/,'');
                    return num;
                }
            }
        }
    }
</script>
