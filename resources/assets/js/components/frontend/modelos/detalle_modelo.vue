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

        <section class="py-4">
            <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img :src="img_logo" style="max-width: 100%" >
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center text-uppercase">
                    <h5 class="text-dark">{{ modelo.slogan }}</h5>
                </div>
            </div>
            </div>
        </section>

        <section class="py-4 my-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h4 class="text-center">COLORES</h4>
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
                                v-on:click="changeColor(data.codigo, data.color)"
                                class="list-inline-item">
                                <div class="circle" v-bind:style="{'background-color': '#'+data.codigo}"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>VERSION</th>
                                <th class="text-right">PRECIO</th>
                              </tr>
                            </thead>
                            <tbody>                         
                              <tr v-for="version in versiones"> 
                                <td class="w-50" style="font-size: 15px;">{{ version.nombre }}</td>
                                <td class="w-50 text-right" style="font-size: 15px"> {{version.moneda}} $ {{ version.precio }}</td>
                              </tr>
                        </tbody>
                        </table>
                        <div class="alert alert-info" role="alert">El precio NO icluye Flete ni gastos de Inscripción.</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="advantages content-area d-flex align-items-center my-4 py-4 ">
            <div class="container">
                <div class="py-4">
                   <div class="container">
                      <div class="row">
                         <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="advantages-box">
                               <div class="icon"><i class="stm-icon-application"></i></div>
                               <div class="detail">
                                  <h5>Ficha Técnica</h5>
                                  <p>Descargar ficha técnica.</p>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="advantages-box">
                               <div class="icon"><i class="stm-icon-steering_wheel"></i></div>
                               <div class="detail">
                                  <h5>Test Drive</h5>
                                  <p>Solicitar test drive o prueba de manejo</p>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="advantages-box">
                               <div class="icon"><i class="stm-icon-calculator"></i></div>
                               <div class="detail">
                                  <h5>Cotizador Online</h5>
                                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam.</p> -->
                                  <p>Realizá una cotizacion en el momento. </p>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="advantages-box">
                               <div class="icon"><i class="stm-icon-gear"></i></div>
                               <div class="detail">
                                  <h5>Accesorios</h5>
                                  <p>Equipá tu Toyota con accesorios originales</p>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
       </section>


        <section class="py-4 my-4">
            <div class="container">
            <div class="main-title my-4">
              <h1 class="text-dark-2">CARACTERÍSTICAS DESTACADAS</h1>
              <p class="text-dark-3">Diseño, tecnología y seguridad</p>
            </div>
            <div class="">
                <div v-for="(item, i) in features">
                    <div v-if="(i % 2 === 0) && (item.descripcion != null)" class="row features" style="padding: 3rem 0rem">
                        <div class="col-xs-12 col-md-6 imagen-container">
                            <img :src="item.img" class="img-fluid">
                        </div>
                        <div class="col-xs-12 col-md-6 descripcion">
                            <h2 class="mb-3">{{item.titulo}}</h2>
                            <p>{{item.descripcion}}</p>
                        </div>
                    </div>
                    <div v-if="(i % 2 != 0) && (item.descripcion != null)" class="row features" style="padding: 3rem 0rem">
                        <div class="col-xs-12 col-md-6 order-md-2 imagen-container">
                            <img :src="item.img" class="img-fluid">
                        </div>
                        <div class="col-xs-12 col-md-6 order-md-1 descripcion">
                            <h2 class="mb-3">{{item.titulo}}</h2>
                            <p>{{item.descripcion}}</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="py-4">
            <div class="container">
                <div class="py-4">
                    <div class="row">
                        <div class="owl-carousel owl-theme">
                            <div v-for="item in features" class="item thumbnail thumbnail-no-bg thumbnail-no-border">
                                <img v-bind:src="item.img" alt="...">
                                <div class="my-2">
                                    <!-- <h4 class="text-center">{{ item.descripcion }}</h4> -->
                                    <p class="text-center">{{ item.titulo }}</p>
                                </div>
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
    font-size: 1.5rem;
    font-weight: 400;
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
