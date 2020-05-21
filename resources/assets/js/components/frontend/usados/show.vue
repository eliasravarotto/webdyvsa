<template>
	<div>
        <div class="header py-3 d-flex align-items-center" style="height: 80px; background:url('/imagenes/banner.jpg'); background-size: cover;">
            <div class="container">
                <h5 style="color: white">{{unidad.marca}} {{unidad.modelo}}</h5>
            </div>
        </div>
        <div class="container">

            <div id="main_area">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="gallery-content d-flex justify-content-center align-items-center">
                            <div class="item-usado-certificado" v-if="unidad.uct" >
                                <img src="/imagenes/logo-uct-new.png" class="w-100">
                            </div>
                            <div class="owl-carousel owl-carousel-gallery">
                                <div v-for="(imagen, i) in imagenes" class="item" :data-hash="'slide'+i">
                                  <div class="w-100">
                                      <img :src="imagen.url">
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 d-flex flex-wrap indicators">
                            <a v-for="(imagen, i) in imagenes" 
                               :href="'#slide'+i" 
                               :style="'background:url('+imagen.url+') no-repeat;background-size: contain;background-position: center;'">
                            </a>
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

                            <a :href="'https://wa.me/5493644178456?text=Hola%20estoy%20interesado/a%20en%20el%20vehículo%20'+unidad.marca+' - '+unidad.modelo"  
                                   class="btn btn-whatsapp my-2" 
                                   target="_blank"
                                   style="border-radius: 5px !important">
                                    <i class="fab fa-whatsapp"></i>
                                    CONSULTAR
                                </a>
                        </div>
                    </div>
                </div>
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
    border: #016a87 1px solid;
    /*margin-bottom: 26px;*/
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

</style>
