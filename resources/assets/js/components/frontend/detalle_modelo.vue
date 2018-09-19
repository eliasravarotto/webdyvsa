<style type="text/css">


    
</style>

<template>
<div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li> 
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="https://www.zento.com.ar/images/etios/slide2.jpg" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                    <h3>Etios</h3>
                    <p>Decile sí a todo.</p>
                    </div>
              </div>
              <div class="item">
                <img src="https://www.zento.com.ar/images/etios/slide2.jpg" alt="Chicago" style="width:100%;">
              </div>
              <div class="item">
                <img src="https://www.zento.com.ar/images/etios/slide2.jpg" alt="New york" style="width:100%;">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
    </div>
    <article>
        <section class="container mar-top-40">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="http://homu.com.ar/wp-content/uploads/2017/05/LOGO-ETIOS-260x67.png">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>TU PRIMER TOYOTA</h3>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-6 col-sm-12 text-center">
                    <img src="/imagenes/etios.jpg" style=" height: 300px">
                    <!-- <img class="img-responsive" src="https://www.zento.com.ar/images/etios/versiones_precios.jpg"> -->
                </div>
                <div class="col-md-6 col-sm-12">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Versiones</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>                         
                          <tr> 
                            <td style="width: 75%;">X 5P 6M/T</td>
                            <td>$ 373700</td>
                          </tr>
                          <tr> 
                            <td style="width: 75%;">X 4P 6M/T</td>
                            <td>$ 389000</td>
                          </tr>
                          <tr> 
                            <td style="width: 75%;">XLS 5P 6M/T</td>
                            <td>$ 418000</td>
                          </tr>
                          <tr> 
                            <td style="width: 75%;">XLS 4P 6M/T</td>
                            <td>$ 433300</td>
                          </tr>
                          <tr> 
                            <td style="width: 75%;">XLS 5P 4A/T</td>
                            <td>$ 436400</td>
                          </tr>
                          <tr> 
                            <td style="width: 75%;">XLS 4P 4A/T</td>
                            <td>$ 451700</td>
                          </tr>
                    </tbody>
                        </table>
                </div>
            </div>
        </section>

        <section class="arrow_box container mar-top-40 pad-bot-25">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                    <h3>TU PRIMER TOYOTA, MEJOR QUE NUNCA</h3>
                    <br>
                    <p class="text-justify">El Toyota Etios continua reforzando su actitud gracias a la incorporación de un nuevo diseño de parrilla, llantas de aleación y faros oscurecidos. Además, incorpora de serie Control de estabilidad y Control de tracción que en conjunto con su excelente performance de motor y transmisión hacen al Etios la opción ideal para recorrer el camino.</p>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="" class="btn btn-default">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                 Ficha Técnica
                            </a>
                        </li>
                        <li>
                            <a href="" class="btn btn-default">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                 Catálogo
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="text-center">COLORES</h3>
                    <div id="images_colors" class="text-center">
                        <img v-for="data in model_color_images"
                             class="img-thumbnail thumbnail-no-border"
                             style="padding: 0px" 
                             v-bind:id="'img_'+data.model_color" 
                             v-bind:src="data.model_image" 
                        />
                    </div>
                    <br>
                    <div class="text-center">
                        <label style="font-size: 17px">{{ model_color_selected }}</label>
                    </div>

                    <ul class="list-inline list-colors text-center mar-top-15">
                        <li v-for="data in model_color_images" 
                            v-bind:id="data.model_color" 
                            v-on:click="changeColor(data.model_color, data.model_color_desc)">
                            <div class="circle" v-bind:style="{'background-color': data.color_css}"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section style="background-color: #f0fdff;">
            <div class="container pad-top-bot-50">
                <div class="row">
                    <div v-for="item in features" class="col-md-4 col-sm-12 col-xs-12">
                        <div class="thumbnail thumbnail-no-bg thumbnail-no-border">
                            <img v-bind:src="item.image" alt="...">
                            <div class="caption caption-default">
                                <h4 class="text-center">{{ item.title }}</h4>
                                <p class="text-justify">
                                    {{ item.desc }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Parallax Section -->
        <div class="parallax bg3">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                &nbsp;
                <div class="caption">
                  <span class="border et-waypoint">Derka y Vargas Concesionario Oficial Toyota</span>
                </div>
              </div>
            </div>
          </div>
        </div>
    </article>
</div>
</template>

<script>
    export default {
    	props: ['data'],
        data(){
            return {
                backgroundColor: '',
                position: '',
                styles: '',
                //data from request.
                slider_images: [],
                model_image: [],
                model_color_images: [
                                        {model_color: 'etios_blanco', model_image:'/imagenes/modelos/etios/colores/etios_blanco.jpg', color_css: '#efeeeb', model_color_desc:'Blanco'},
                                        {model_color: 'etios_blanco_perla', model_image:'/imagenes/modelos/etios/colores/etios_blanco_perla.jpg', color_css: '#f4f4f4', model_color_desc:'Blanco Perla'},
                                        {model_color: 'etios_gris_plata', model_image:'/imagenes/modelos/etios/colores/etios_gris_plata.jpg', color_css: '#d4d1d4', model_color_desc:'Gris Plata'},
                                        {model_color: 'etios_gris_arena', model_image:'/imagenes/modelos/etios/colores/etios_gris_arena.jpg', color_css: '#878774', model_color_desc:'Gris Arena'},
                                        {model_color: 'etios_azul', model_image:'/imagenes/modelos/etios/colores/etios_azul.jpg', color_css: '#0c3a62', model_color_desc:'Azul'},
                                        {model_color: 'etios_rojo', model_image:'/imagenes/modelos/etios/colores/etios_rojo.jpg', color_css: '#a60000', model_color_desc:'Rojo'},
                                        {model_color: 'etios_negro', model_image:'/imagenes/modelos/etios/colores/etios_negro.jpg', color_css: '#050505', model_color_desc:'Negro'},
                                        {model_color: 'etios_gris_oscuro', model_image:'/imagenes/modelos/etios/colores/etios_gris_oscuro.jpg', color_css: '#555555', model_color_desc:'Gris Oscuro'},
                                    ],
                model_color_selected: 'Click para seleccionar un color.',
                features: [
                            { title:'NUEVO DISEÑO EXTERIOR', desc: 'Gracias al diseño de su frente y sus nuevos faros oscurecidos, el Etios obtiene una imagen más agresiva y robusta. A su vez, las nuevas llantas de aleación de 15” y los faldones laterales contribuyen a darle una impronta más audaz.', image:'http://homu.com.ar/wp-content/uploads/2017/05/etios04-3.jpg' },
                            { title:'MAS TECNOLOGÍA', desc: 'El nuevo Etios presenta un audio con pantalla táctil de 7”, MP3, Bluetooth®, USB, entrada auxiliar de audio y conexión con smartphone.', image:'http://homu.com.ar/wp-content/uploads/2017/05/etios06-2.jpg' },
                            { title:'DALE MARCHA A TUS IMPULSOS', desc: 'La caja automática de 4 marchas, con control de velocidad crucero y la caja manual de 6 marchas, favorecen un andar fluido y dinámico sin descuidar un consumo conveniente.', image:'https://www.toyota.com.ar/showroom/etios-hb/images/top_features/img.jpg' }
                        ]
            }
        },
        mounted() {
            this.initJS();
            //this.data.bg_color != null ? this.styles = 'background-color:'+this.data.bg_color : '';
            //this.position = 'position:'+this.data.position;
        },
        methods:{
            initJS(){
                $("#images_colors").find("img").hide();
                $("#img_etios_blanco").show();

            
                function test(li){
                    $('.list-colors li.active_li').removeClass('active_li');
                    $('.list-colors').find(".active_circle").removeClass("active_circle");

                    $("#"+li.id).addClass("active_li");
                    $("#"+li.id).children().addClass("active_circle");
                    
                    $("#images_colors").find("img").hide();
                    $("#img_"+li.id).show();
                }
            },
            changeColor(id, name_color){
                this.model_color_selected = name_color;
                $('.list-colors li.active_li').removeClass('active_li');
                $('.list-colors').find(".active_circle").removeClass("active_circle");

                $("#"+id).addClass("active_li");
                $("#"+id).children().addClass("active_circle");
                
                $("#images_colors").find("img").hide();
                $("#img_"+id).show();
            }
        },
        computed: {
          
        }
    }
</script>
