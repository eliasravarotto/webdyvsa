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
            <div id="main_area">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class=" gallery-content d-flex justify-content-center align-items-center">
                            <div class="owl-carousel">
                                <div v-for="(imagen, i) in imagenes" class="item" :data-hash="'slide'+i">
                                  <img :src="imagen.url">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div>
                            
                            <a v-for="(imagen, i) in imagenes" :href="'#slide'+i">
                                index - {{i}}
                            </a>
                        </div>
                        
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
                                                    <td class="t-label"> Año</td>
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
                                                    <td class="t-label"><i class="fa fa-certificate"></i> Certificado Toyota</td>
                                                    <td class="t-value t-vin h6" v-if="unidad.uct">SI</td>
                                                    <td class="t-value t-vin h6" v-else>NO</td>
                                                </tr>
                                                <tr>
                                                    <td class="t-label"><i class="fa fa-certificate"></i> Disponibilidad</td>
                                                    <td v-if="unidad.estado == 'RESERVADO'" class="t-value t-vin h6" style="color: #ee1a2f;">{{unidad.estado}}</td>
                                                    <td v-else   class="t-value t-vin h6">{{unidad.estado}}</td>
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
                </div>

                <!-- Slider -->
                <!-- <div class="row">
                    <div class="col-xs-12" id="slider">
                        <div class="row">
                            <div class="col-sm-7" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <div class="carousel-inner">
                                        <div v-for="(imagen, i) in imagenes" :class="{ 'active item flex': i==0, 'item flex': i!=0 }" :data-slide-number="i">
                                            <img class="text-center" :src="imagen.url">
                                        </div>
                                    </div>
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
                                                    <td class="t-label"> Año</td>
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
                                                    <td class="t-label"><i class="fa fa-certificate"></i> Certificado Toyota</td>
                                                    <td class="t-value t-vin h6" v-if="unidad.uct">SI</td>
                                                    <td class="t-value t-vin h6" v-else>NO</td>
                                                </tr>
                                                <tr>
                                                    <td class="t-label"><i class="fa fa-certificate"></i> Disponibilidad</td>
                                                    <td v-if="unidad.estado == 'RESERVADO'" class="t-value t-vin h6" style="color: #ee1a2f;">{{unidad.estado}}</td>
                                                    <td v-else   class="t-value t-vin h6">{{unidad.estado}}</td>
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
                        </div>
                    </div>
                </div> -->
                <!--/Slider-->
                <!-- <div class="row hidden-xs" id="slider-thumbs">
                    <ul class="hide-bullets" style="margin: 15px 0px 15px 0px">
                        <li class="col-sm-2" v-for="(imagen, i) in imagenes">
                            <a class="thumbnail" :id="'carousel-selector-'+i" @click.prevent="activeImg(i)">
                                <img :src="imagen.url">
                            </a>
                        </li>
                    </ul>                 
                </div> -->
            </div>
        </div>
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
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:0,
                nav:true,
                URLhashListener:true,
                    autoplayHoverPause:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        1000:{
                            items:1
                        }
                    }
                })

                    
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

<style scoped>
    .gallery-content {
        background-color: #fff;
        height: inherit;
        left: 0;
        right: 0;
        top: 0;
        overflow: hidden;
        position: absolute;
        text-align: center;
        /*opacity: 0;*/
        /*visibility: hidden;*/
        min-height: 530px;
        z-index: 5;
        border: solid 1px black;
    }

     .gallery-content img{
        width: auto;
        max-height:450px;
     }

</style>
