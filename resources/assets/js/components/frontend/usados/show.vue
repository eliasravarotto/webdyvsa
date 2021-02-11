<template>
	<div>
        <div class="header py-3 d-flex align-items-center" style="height: 80px; background:url('/imagenes/e-toyota/image-header.jpg'); background-size: cover; background-position: center;">
            <div class="container">
                <h3 style="color: white">{{unidad.marca}} {{unidad.modelo}}</h3>
                <a href="#" @click="openGallery(0)">Abrir</a>
            </div>
        </div>
        <div class="container">
            <div id="main_area">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="gallery-content d-flex justify-content-center align-items-center">
                            <div class="item-usado-certificado" v-if="unidad.uct" >
                                <img v-lazy="'/imagenes/logo-uct-new.png'" class="w-100">
                            </div>

                            <div class="owl-carousel owl-carousel-gallery">
                                <!-- Imagen portada. -->
                                <div class="w-100" v-if="!unidad.foto">
                                    <img v-lazy="'/imagenes/default-img.png'">
                                </div>
                                <!-- Imagenes de la galeria -->
                                <div v-else v-for="(imagen, i) in media" class="item">
                                  <div class="w-100 image-container">
                                      <img v-lazy="imagen.src">
                                      <div class="btn-galery" @click="openGallery(i)">
                                        <i class="fas fa-expand text-white"></i>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- Miniaturas -->
                               <!-- @click.prevent="goToSpecificSlide(i)" -->
                        <div class="w-100 d-flex flex-wrap indicators">
                            <div v-for="(imagen, i) in media" 
                                @click="openGallery(i)"
                               :style="'background:url('+imagen.src+') no-repeat;background-size: contain;background-position: center; width: 90px; height: 90px; margin-right: 5px; cursor: pointer;'">
                            </div>
                            <div class="w-100" v-if="unidad.foto">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="stm-single-car-side">
                            <div class="single-car-prices">
                                <div class="single-regular-price text-center">
                                    <span class="labeled">Precio</span>
                                    <span class="h3">$ {{formatearPrecio(unidad.precio)}}</span>
                                </div>
                            </div>
                            <div class="single-car-data">
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
                                            <td class="t-label"> <i class="stm-service-icon-appointment_calendar"></i> Año</td>
                                            <td class="t-value h6">{{unidad.anio}}</td>
                                        </tr>
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
                                            <td class="t-label">Disponibilidad</td>
                                            <td v-if="unidad.estado == 'RESERVADO'" class="t-value t-vin h6" style="color: #ee1a2f;">{{unidad.estado}}</td>
                                            <td v-else   class="t-value t-vin h6">{{unidad.estado}}</td>
                                        </tr>
                                        <tr v-if="unidad.uct">
                                            <td class="t-label"><img src="/imagenes/logo-uct-new.png" class="" style="height: 45px;"></td>
                                            <td class="t-value t-vin h6" v-if="unidad.uct">SI</td>
                                            <td class="t-value t-vin h6" v-else>NO</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <a href="#" 
                               class="btn button-theme my-2" 
                               @click.prevent="goToForm()"
                               style="border-radius: 0px !important">
                                <i class="far fa-envelope"></i>
                                ESCRIBIR MENSAJE
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <LightBox
            ref="lightbox"
            :media="media"
            :show-caption="true"
            :show-light-box="false"
            v-on:onClosed="closeLightBox()"
            v-on:onOpened="openLightBox()"
        ></LightBox>

	</div>
</template>

<script>
    import LightBox from 'vue-image-lightbox'
    import VueLazyLoad from 'vue-lazyload'
    Vue.use(VueLazyLoad)
    export default {
    	props: ['data'],
        components: {
            VueLazyLoad,
            LightBox,
        },
        data(){
            return {
            	unidad: {},
                imagenes:'',
                media: [],
                viewGaleria: false,
                form:{
                    nombre:'',
                    email: '',
                    telefono:'',
                    mensaje:'',
                },
            }
        },
        mounted() {
            this.unidad = this.data.unidad;
            var portada = {};
            portada.public_path = this.unidad.foto;
            this.unidad.photos.unshift(portada);

            this.unidad.photos.forEach(img => {
                var m = {};
                m.thumb = img.public_path;
                m.src = img.public_path;
                this.media.push(m);
            });

            var self = this;
            $(window).on('popstate', function(){
                self.viewGaleria = false;
                self.$refs.lightbox.closeLightBox();
            })
        },
        methods:{
            goToForm()
            {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $(".contact-info").offset().top
                }, 2000);

                $('[name ="mensaje"]') .focus();

            },
            goToSpecificSlide(ix){
                // $('.owl-carousel-gallery').trigger('to.owl.carousel', ix);

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
                    this.form.nombre = '';
                    this.form.telefono = '';
                    this.form.email = '';
                    this.form.mensaje = '';

                  })
                  .catch(function (error) {
                    alert(error);
                  });
            },
            activeImg(id){
                $('#myCarousel').carousel(id);
            },
            formatearPrecio(num){
                if (num) {
                    num = num.toString().replace(/\./g,'');
                    if(!isNaN(num)){
                        num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                        num = num.split('').reverse().join('').replace(/^[\.]/,'');
                        return num;
                    }
                }
            },
            openGallery(index) {
                self = this;
                setTimeout(function(){
                    self.$refs.lightbox.showImage(index);
                    },
                100);
            },
            closeLightBox(){
                if (this.viewGaleria) {
                    history.go(-1);
                    this.viewGaleria = false;
                }

            },
            openLightBox(){
                history.pushState('', 'Galery', '/usados/'+this.unidad.slug+'#show-galery');
                this.viewGaleria = true;
            }
        }
    }
</script>

<style scoped>
    #main_area{
        margin:1.5rem 0rem;
    }
    .gallery-content {
        background-color: #fff;
        height: inherit;
        text-align: center;
        /*opacity: 0;*/
        /*visibility: hidden;*/
        /*min-height: 530px;*/
        z-index: 5;
        border: 1px solid #d5d9e0;
    }

     .gallery-content img{
        width: auto;
        max-height:450px;
        max-width: 100%;
     }

    .owl-carousel .owl-item img {
        display: inline-block;
    }

    .hide-bullets {
    list-style:none;
    /*margin-left: -40px;*/
    margin-top:20px;
}

.single-car-prices {
    background-color: #dbdbdb;
}
.single-regular-price {
    padding: 22px 0 13px;
    vertical-align: middle;
}
.single-regular-price>.labeled {
    margin-right: 7px;
    font-size: 12px;
    font-weight: 400;
    color: #373435;
    vertical-align: middle;
    text-transform: uppercase;
}   
.single-regular-price>.h3 {
    position: relative;
    top: -1px;
    left: 1px;
    color: #373435;
    vertical-align: middle;
}

/*Cuerpo*/
.single-car-data {
    padding: 12px 26px 13px 23px;
    border: #dbdbdb 1px solid;
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
    font-size: 1rem;
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
    font-size: 1rem;
    line-height: 18px;
}
.single-car-data>table tr td {
    padding: 11px 0 6px;
}


.indicators a{
    width: 80px;
    height: 80px;
    margin: 5px;
}

.item-usado-certificado {
    margin: 5px 0px 0px 20px;
    z-index: 100;
    top: 0;
    left: 0;
}

@media (max-width: 780px) {
    .header{
        height: auto !important;
        padding: 1.5rem 0px !important;
        text-align: center;
    }
 
}

.image-container{
    position: relative;
}
.image-container .btn-galery{
    position: absolute; bottom: 15px;
    left: 15px;
    width: 35px;
    height: 35px;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    display: flex;
    justify-content: center; 
    align-items: center;
}
.image-container .btn-galery i{
    font-size: 22px;
}


</style>
