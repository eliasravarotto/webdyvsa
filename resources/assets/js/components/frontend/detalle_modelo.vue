<style type="text/css">
.row-well{
    background: #f4f4f4;
background: -moz-linear-gradient(left, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, #ffffff), color-stop(7%, #fefefe), color-stop(43%, #f6f6f6), color-stop(100%, #ededed));
background: -webkit-linear-gradient(left, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
background: -o-linear-gradient(left, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
background: -ms-linear-gradient(left, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
background: linear-gradient(to right, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed', GradientType=1 );
    height: 100px;
}

</style>
<template>
<div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <!--
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li> 
        </ol> -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div v-for="(img, index) in slider_ppal_images" v-bind:class="[index == 0 ? 'item active' : 'item']">
                <img v-bind:src="img.url" style="width:100%">
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
        <section class="container pad-top-bot-20">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img v-bind:src="img_logo">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center text-uppercase">
                    <h3>{{ modelo.slogan }}</h3>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-6 col-sm-12 text-center">
                    <img class="img-responsive" v-bind:src="img_modelo" >
                    <!-- <img class="img-responsive" src="https://www.zento.com.ar/images/etios/versiones_precios.jpg"> -->
                </div>
                <div class="col-md-6 col-sm-12">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="font-size: 15px">VERSIONES</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>                         
                          <tr v-for="version in versiones"> 
                            <td style="font-size: 15px; width: 75%;">{{ version.nombre }}</td>
                            <td style="font-size: 15px"> {{version.moneda}} $ {{ version.precio }}</td>
                          </tr>
                    </tbody>
                        </table>
                </div>
            </div>
        </section>

        <section class="arrow_box container pad-top-bot-20">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center et-waypoint slide-left">
                    <h3>{{ modelo.slogan }}</h3>
                    <br>
                    <p class="text-justify">{{ modelo.descripcion }}</p>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a v-bind:href="modelo.link_ficha_tecnica" class="btn btn-default" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                 Ficha Técnica
                            </a>
                        </li>
                        <li>
                            <a v-bind:href="modelo.link_catalogo" class="btn btn-default" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-download" aria-hidden="true"></i>
                                 Catálogo
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="text-center">COLORES</h3>
                    <div id="images_colors" class="text-center">
                        <img v-for="(data, index) in model_color_images"
                             v-bind:class="'img-thumbnail thumbnail-no-border '"
                             v-bind:style="'padding: 0px; '+[index == 0 ? 'display: -webkit-inline-box;' : 'display: none;']" 
                             v-bind:id="'img_'+data.codigo" 
                             v-bind:src="data.url" 
                        />
                    </div>
                    <br>
                    <div class="text-center">
                        <label style="font-size: 17px">{{ model_color_selected }}</label>
                    </div>

                    <ul class="list-inline list-colors text-center mar-top-15">
                        <li v-for="data in model_color_images" 
                            v-bind:id="data.codigo" 
                            v-on:click="changeColor(data.codigo, data.color)">
                            <div class="circle" v-bind:style="{'background-color': '#'+data.codigo}"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <section style="width: 100%" v-if="tieneTestDrive">
                <div class="row row-well" style=" display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
                    <div class="" style="width: 50%; display: flex; justify-content: center; padding-left: 50px;">
                        <h2>
                            <span>
                                ¿Querés probarlo?
                            </span>
                        </h2>
                    </div>
                    <div style="width: 50%;display: flex; justify-content: center; padding-right: 50px;">
                        <a href="/test-drive/create" class="btn btn-toyota btn-lg" style="border-radius: 0px;">SOLICITAR TEST DRIVE</a>
                    </div>
                </div>
            </section>
        </section>


        <section class="pad-top-bot-50" v-if="imagenes_galeria.length > 0">
            <div class="container">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-md-6" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarouselmin">

                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div v-for="(img, index) in imagenes_galeria" v-bind:class="[index == 0 ? activeClass : 'item']" v-bind:data-slide-number="img.id">
                                            <img v-bind:src="img.url">
                                        </div>
                                    </div>

                                    <!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarouselmin" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#myCarouselmin" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                </div>
                            </div>


                            <!-- The Modal ------------------------------->
                            <div id="moda_show_imagen" class="modal-img">
                                <!-- The Close Button -->
                                <span class="close-on-click">&times;</span>
                                <!-- Modal Content (The Image) -->
                                <img class="modal-content" id="img01" src="#">
                            </div>

                            <div class="col-md-6 hidden-xs" id="carousel-text">
                                <div class="row hidden-xs" id="slider-thumbs">
                                    <div v-for="img in imagenes_galeria" class="col-md-6">
                                        <div class="item-hover">
                                            <a class="thumbnail" v-bind:id="'carousel-selector-'+img.id">
                                                <img class="hand" v-bind:src="img.url" v-on:click="showImage(img)">
                                            </a>
                                        </div>
                                     </div>   
                                </div>                 
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Slider-->
            </div>
        </section>

        <section class="pad-top-bot-20" style="background-color: #f0fdff;">
            <div class="container pad-top-bot-50">
                <div class="row">
                    <div v-for="item in features" class="col-md-4 col-sm-12 col-xs-12">
                        <div class="thumbnail thumbnail-no-bg thumbnail-no-border">
                            <img v-bind:src="item.img" alt="...">
                            <div class="caption caption-default">
                                <h4 class="text-center">{{ item.titulo }}</h4>
                                <p class="text-justify">
                                    {{ item.descripcion }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Parallax Section -->
        <div class="parallax bg3 visible-md visible-lg" v-bind:style="'background-image: url('+parallax.imagen+')'">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                &nbsp;
                <div class="caption">
                  <span v-if="parallax.texto != ''" class="border et-waypoint">{{ parallax.texto }}</span>
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
                modelo: '',
                nombre_modelo :'',
                activeClass : 'active item',
                backgroundColor: '',
                position: '',
                styles: '',
                parallax: '',
                img_modelo: '',
                imagenes_galeria: '',
                slider_ppal_images: '',
                model_color_images: '',
                model_color_selected: 'Click para seleccionar un color.',
                features: '',
                versiones: '',
                img_logo: '',
                slogan: '',
                link_ficha_tecnica: '',
                link_catalogo: '', 
                tieneTestDrive: '',
            }
        },
        mounted() {
            this.modelo = this.data.modelo;
            this.nombre_modelo = this.data.modelo.nombre.toLowerCase();
            this.versiones = this.data.versiones;
            this.imagenes_galeria = this.data.imagenesGaleria;
            this.slider_ppal_images = this.data.imagenesSlider;
            this.model_color_images = this.data.imagenesColores;
            this.parallax = this.data.parallax[0];
            this.features = this.data.caracteristicas;
            this.img_modelo = this.modelo.img_modelo;
            this.img_logo = this.modelo.img_logo;

            if (this.modelo.nombre == 'Hilux' || this.modelo.nombre == 'Corolla' || this.modelo.nombre == 'Etios' || this.modelo.nombre == 'Yaris'){
                this.tieneTestDrive = true;
            } else{
                this.tieneTestDrive = false;
            }

            this.initJS();

            console.log(this.data);
        },
        methods:{
            showImage(img){
                // Get the modal
                var modal = document.getElementById('moda_show_imagen');

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                //var img = document.getElementById('myImg');
                var modalImg = document.getElementById("img01");
                console.log(modalImg);
                modalImg.src = img.url;
                modal.style.display = "flex";
      

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close-on-click")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() { 
                    $("#moda_show_imagen").fadeOut()
                }
            },
            initJS(){
                //$("#images_colors").find("img").hide();
                //$("#img_etios_blanco").show();

                function test(li){
                    $('.list-colors li.active_li').removeClass('active_li');
                    $('.list-colors').find(".active_circle").removeClass("active_circle");

                    $("#"+li.id).addClass("active_li");
                    $("#"+li.id).children().addClass("active_circle");
                    
                    $("#images_colors").find("img").hide();
                    $("#img_"+li.id).show();
                }

                $('#myCarouselmin').carousel({
                        interval: 5000
                });
         
                $('#carousel-text').html($('#slide-content-0').html());
         
                //Handles the carousel thumbnails
               $('[id^=carousel-selector-]').click( function(){
                    var id = this.id.substr(this.id.lastIndexOf("-") + 1);
                    var id = parseInt(id);
                    $('#myCarouselmin').carousel(id);
                });
 
 
                // When the carousel slides, auto update the text
                $('#myCarouselmin').on('slid.bs.carousel', function (e) {
                         var id = $('.item.active').data('slide-number');
                        $('#carousel-text').html($('#slide-content-'+id).html());
                });

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
