<template>
<div>
    <article>
        <!-- <section class="component hero-features" style="" data-component="" data-content-id="54">
            <div class="hero-features__image hero-features__image--desktop visible-lg visible-sm visible-md" :style="'background-image: url('+data.modelo.portada.imagen_desktop+')'"></div>
            <div class="hero-features__image hero-features__image--mobile visible-xs " :style="'background-image: url('+data.modelo.portada.imagen_mobile+')'"></div>

            <div class="hero-features__wrapper container">
                <h1 class="hero-features__title">
                    <img :src="data.modelo.portada.logo" alt="" class="hero-features__title-img">
                </h1>
                <div v-html="data.modelo.portada.html"></div>
            </div>
        </section> -->

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
                    <div class="alert alert-info" role="alert">El precio NO icluye Flete ni gastos de Inscripción.</div>
                </div>
            </div>
        </section>

        <section class="container pad-top-bot-20">
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
            <!-- <section style="width: 100%" v-if="tieneTestDrive">
                <div class="row row-well flex justify-content-center align-items-center" style="flex-wrap: wrap;">                    <div class="flex pr-2">
                        <h2>¿Querés probarlo?</h2>
                    </div>
                    <div class="flex pl-2">
                        <a href="/test-drive/create" class="btn btn-toyota btn-lg" style="border-radius: 0px;">SOLICITAR TEST DRIVE</a>
                    </div>
                </div>
            </section> -->
        </section>

        <div class="component title-wrapper title-wrapper--highlighted container">
            <div class="title-wrapper__wrapper">
                <h1 class="title">Características Destacadas</h1>
            </div>
        </div>

        <section>
            <div class="container">
                <div v-for="(item, i) in features">
                    <div v-if="(i % 2 === 0) && (item.descripcion != null)" class="row row-caracteristica" style="padding: 3rem 0rem">
                        <div class="col-xs-12 col-md-6 imagen-container">
                            <img :src="item.img" class="img-responsive">
                        </div>
                        <div class="col-xs-12 col-md-6 descripcion">
                            <h2>{{item.titulo}}</h2>
                            <p>{{item.descripcion}}</p>
                        </div>
                    </div>
                    <div v-if="(i % 2 != 0) && (item.descripcion != null)" class="row row-caracteristica" style="padding: 3rem 0rem">
                        <div class="col-xs-12 col-md-6 col-md-push-6 imagen-container">
                            <img :src="item.img" class="img-responsive">
                        </div>
                        <div class="col-xs-12 col-md-6 col-md-pull-6 descripcion">
                            <h2>{{item.titulo}}</h2>
                            <p>{{item.descripcion}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="photo" :style="'background: url('+parallax.imagen+')'"></section> -->

        <section class="" style="background-color: #f7f7f7;">
            <div class="container pad-top-bot-50">
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <div v-for="item in features" class="item thumbnail thumbnail-no-bg thumbnail-no-border">
                            <img v-bind:src="item.img" alt="...">
                            <div class="caption caption-default">
                                <!-- <h4 class="text-center">{{ item.descripcion }}</h4> -->
                                <p class="text-center">{{ item.titulo }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Parallax Section -->
        <!-- <div class="parallax bg3 visible-md visible-lg" v-bind:style="'background-image: url('+parallax.imagen+')'">
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
        </div> -->
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

                
                $(document).ready(function() {
                    $('.owl-carousel').owlCarousel({
                        stagePadding: 50,
                        loop:false,
                        margin:10,
                        nav:false,
                        autoPlay: 3000, //Set AutoPlay to 3 seconds
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
                })

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
        computed: {}
    }
</script>
<style type="text/css">
.owl-theme .owl-dots .owl-dot span {
    width: 40px;
}

.owl-carousel .item p{
    color: black;
    font-size: 1.9rem;
    font-weight: 400;
}

.row-caracteristica .imagen-container img{
    border-radius: 6px; 
}

.row-caracteristica .descripcion h2{
    font-weight: 100; 
    margin-left: 5rem; 
    margin-right: 5rem
}
.row-caracteristica .descripcion p{
    font-size: 1.8rem; 
    line-height: 2;  
    font-weight: 100; 
    font-weight: 100; 
    margin-left: 5rem; 
    margin-right: 5rem
}

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
