<template>
<div>
    <div class="my-4">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="sidebar-left">
                    <div class="d-block d-md-none d-lg-none">
                            <div class="card box-shadow">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <img src="/imagenes/logo-uct-new.png" class="img-responsive pb-3" alt="autos usados certificados toyota">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <h5 class="mt-0">¿Qué es un Usado Certificado TOYOTA?</h5>
                                            <div id="collapseQueEsUct" class="collapse">
                                                <p>Un <b>Usado Certificado Toyota</b> es un vehículo que puede adquirir un cliente cuyos beneficios son los siguientes:</p>
                                                <ul class="list-unstyled list-inline">
                                                    <li> <i class="fa fa-check text-success"></i> Garantía de 1 año o 20.000 km.</li>
                                                    <li> <i class="fa fa-check text-success"></i> Vehículos que fueron atendidos en concesionarios oficiales.</li>
                                                    <li> <i class="fa fa-check text-success"></i> 150 puntos de inspección realizados por técnicos capacitados.</li>
                                                </ul>
                                            </div>
                                            <a data-toggle="collapse" href="#collapseQueEsUct" class="btn btn-danger btn-round mt-1">Leer más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card box-shadow mt-3">
                                <div class="d-flex align-items-center justify-content-between py-2 px-2">
                                    Aplicar Filtros
                                    <button class="btn btn-default" id="modalActivate" type="button" data-toggle="modal" data-target="#modalFiltros">
                                        <i class="fa fa-filter"></i>
                                    </button>
                                </div>
                            </div>
                    </div>
                   <!-- Advanced search start -->
                    <div class="d-none d-md-block d-lg-block">
                        <div class="widget advanced-search2">
                            <h3 class="sidebar-title">FILTROS</h3>
                            <div class="">
                                <div class="mb-1 mt-2">
                                    <select class="form-control" v-model="filtro_marca">
                                        <option value="">--Marca--</option>
                                        <option v-for="marca in marcas" :value="marca">{{marca}}</option>
                                    </select>
                                </div>
                                <div class="mb-1">
                                    <select class="form-control" v-model="filtro_color">
                                        <option value="">--Color--</option>
                                        <option v-for="color in colores" :value="color">{{color}}</option>
                                    </select>
                                </div>
                                <div class="mb-1">
                                     <select class="form-control" v-model="filtro_anio">
                                        <option value="">--Año--</option>
                                        <option v-for="anio in anios" :value="anio">{{anio}}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ordenar Por: </label>
                                    <select class="form-control" v-model="ordenar_por" @change="ordernarPor()">
                                        <option value="anio_may_men">Año mayor a menor</option>
                                        <option value="anio_men_may">Año menor a mayor</option>
                                        <option value="precio_may_men">Precio mayor a menor</option>
                                        <option value="precio_men_may">Precio menor a mayor</option>
                                    </select>
                                </div>
                                <div class="flex justify-content-end">
                                    <a href="#" class="w-25 btn btn-default mx-1" @click.prevent="limpiarFiltro()"><i class="fa fa-trash"></i></a>
                                    <a href="#" class="w-75 btn btn-primary a-cargando" @click.prevent="filtrar()"> Aplicar</a>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
                <div class="sidebar-left">
                    <!-- UCT -->
                   <div class="my-4 d-none d-md-block d-lg-block">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <img src="/imagenes/logo-uct-new.png" class="img-fluid pt-3 px-3 pb-4" alt="autos usados certificados toyota">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="px-3 pb-4">
                                    <h4 class="mt-0">¿Qué es un Usado Certificado TOYOTA?</h4>
                                    <p class="text-justify">Un <b>Usado Certificado Toyota</b> es un vehículo que puede adquirir un cliente cuyos beneficios son los siguientes:</p>
                                    <ul class="list-unstyled list-inline">
                                        <li> <i class="fa fa-check text-success"></i> Garantía de 1 año o 20.000 km.</li>
                                        <li> <i class="fa fa-check text-success"></i> Vehículos que fueron atendidos en concesionarios oficiales.</li>
                                        <li> <i class="fa fa-check text-success"></i> 150 puntos de inspección realizados por técnicos capacitados.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8">
                <div class="row">
                    <div class="col-sm-12 col-md-6" v-for="unidad in unidades">
                        <div class="car-box">
                            <a :href="'/usados/'+unidad.slug">
                                <div class="car-thumbnail" :style="unidad.foto ? ('background:url('+unidad.foto+')') : 'background:url(/imagenes/default-img.png)' ">
                                        <div class="item-usado-certificado" v-if="unidad.uct" >
                                            <img src="/imagenes/logo-uct-new.png" class="w-100">
                                        </div>
                                        <div v-if="unidad.estado == 'RESERVADO'" class="text-right">
                                            <img src="/imagenes/reservado.png">
                                        </div>
                                        <div class="price-box">Ver</div>
                                </div>
                            </a>
                            <div class="detail">
                                <h1 class="title"><a class="text-danger-2 d-flex justify-content-between" :href="'/usados/'+unidad.slug">{{unidad.marca}} <span>$ {{formatearPrecio(unidad.precio)}}</span></a></h1>
                                <div class="location"><a class="text-dark" style="font-size: 16px" href="car-details.html">{{unidad.modelo}}</a></div>
                                <ul class="facilities-list clearfix mb-0 px-0">
                                    <li class="text-center"><i class=" stm-icon-road"></i> {{formatearPrecio(unidad.km)}} km</li>
                                    <li class="text-center"><i class="stm-service-icon-appointment_calendar"></i> {{unidad.anio}}</li>
                                    <li class="text-center"><i class="stm-service-icon-color_type"></i> {{unidad.color}}</li>
                                </ul>
                                <div class="detail-bottom">
                                    <a :href="'https://wa.me/5493644178456?text=Hola%20estoy%20interesado/a%20en%20el%20vehículo%20'+unidad.marca+' - '+unidad.modelo"  
                                       class="btn btn-whatsapp" 
                                       target="_blank"
                                       style="border-radius: 5px !important">
                                        <i class="fab fa-whatsapp"></i>
                                        CONSULTAR
                                    </a>
                                    <span>{{getPageViews(unidad.slug)}}</span>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL Filtro -->
    <div class="modal fade" id="modalFiltros" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
        <div class="modal-dialog momodel modal-fluid" role="document">
            <div class="modal-content ">
                <div class="modal-header d-flex justify-content-end">
                    <button type="button" data-dismiss="modal" aria-label="Close">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                                <div class="mb-1 mt-2">
                                    <select class="form-control" v-model="filtro_marca">
                                        <option value="">--Marca--</option>
                                        <option v-for="marca in marcas" :value="marca">{{marca}}</option>
                                    </select>
                                </div>
                                <div class="mb-1">
                                    <select class="form-control" v-model="filtro_color">
                                        <option value="">--Color--</option>
                                        <option v-for="color in colores" :value="color">{{color}}</option>
                                    </select>
                                </div>
                                <div class="mb-1">
                                     <select class="form-control" v-model="filtro_anio">
                                        <option value="">--Año--</option>
                                        <option v-for="anio in anios" :value="anio">{{anio}}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ordenar Por: </label>
                                    <select class="form-control" v-model="ordenar_por" @change="ordernarPor()">
                                        <option value="anio_may_men">Año mayor a menor</option>
                                        <option value="anio_men_may">Año menor a mayor</option>
                                        <option value="precio_may_men">Precio mayor a menor</option>
                                        <option value="precio_men_may">Precio menor a mayor</option>
                                    </select>
                                </div>
                                <!-- <div class="flex justify-content-end">
                                    <a href="#" class="w-25 btn btn-default mx-1" @click.prevent="limpiarFiltro()"><i class="fa fa-trash"></i></a>
                                    <a href="#" class="w-75 btn btn-primary a-cargando" @click.prevent="filtrar()"> Aplicar</a>
                                </div> -->
                            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-md btn-round" @click.prevent="limpiarFiltro()">Limpiar</button>
                    <button type="button" class="btn btn-primary btn-md btn-round" @click.prevent="filtrar()">Aplicar</button>
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
                unidades: '',
                colores:[],
                marcas:[],
                anios:[],
                usadoSelected : '',
                filtro_marca:'',
                filtro_color:'',
                filtro_anio:'',
                ordenar_por: '',
                unidades_filtered: '',
                hayUct: ''
            }
        },
        mounted() {
            this.unidades = _.orderBy(this.data.unidades,
                                    ['uct'],
                                    ['desc']);
            this.cargarColores();
            this.cargarMarcas();
            this.cargarAnios();
            //this.orderByOrden();
            this.hayUct = this.versihayuct();

        },
        methods:{
            orderByOrden(){
                this.unidades = _.orderBy(this.unidades,
                                    ['orden'],
                                    ['asc']);
            },
            cargarColores(){
                self = this;
                this.unidades.forEach(function(unidad) {
                  if (!self.colores.includes(unidad.color.toUpperCase())) {
                    self.colores.push(unidad.color.toUpperCase())
                  }
                });
                this.colores.sort();
            },
            cargarMarcas(){
                self = this;
                this.unidades.forEach(function(unidad) {
                  if (!self.marcas.includes(unidad.marca.toUpperCase())) {
                    self.marcas.push(unidad.marca.toUpperCase())
                  }
                });
                this.marcas.sort();
            },
            cargarAnios(){
                self = this;
                this.unidades.forEach(function(unidad) {
                  if (!self.anios.includes(unidad.anio)) {
                    self.anios.push(unidad.anio)
                  }
                });
                this.anios.sort();
            },
            filtrar(){
                    self = this;
                    axios
                        .post('/usados/filter',{
                            filtro_marca: this.filtro_marca,
                            filtro_color:this.filtro_color,
                            filtro_anio:this.filtro_anio,
                        })
                        .then( function(res){
                            $("#modalFiltros").modal('hide');
                            self.unidades = _.orderBy(res.data,
                                    ['uct'],
                                    ['desc']);
                            $('.a-cargando').removeClass("disabled");
                            $('.a-cargando').text("Filtrar");
                            $('.a-cargando').prepend($("<i class='fa fa-filter'></i>"));
                        });

            },
            limpiarFiltro(){
                this.unidades = this.data.unidades;
                this.filtro_anio = '';
                this.filtro_color = '';
                this.filtro_marca = '';
                this.ordenar_por = '';
                this.unidades_filtered = '';

                $("#modalFiltros").modal('hide');
            },
            ordernarPor(){
                switch(this.ordenar_por) {
                  case 'anio_may_men':
                    this.unidades = _.orderBy(this.unidades,
                                    ['anio'],
                                    ['desc']);
                    break;
                  case 'anio_men_may':
                    this.unidades = _.orderBy(this.unidades,
                                    ['anio'],
                                    ['asc']);
                    break;
                  case 'precio_men_may':
                    this.unidades = _.orderBy(this.unidades,
                                    ['precio'],
                                    ['asc']);
                    break;
                  case 'precio_may_men':
                    this.unidades = _.orderBy(this.unidades,
                                    ['precio'],
                                    ['desc']);
                    break;
                  
                }
            },
            removeDuplicates(originalArray, prop) {
                 var newArray = [];
                 var lookupObject  = {};
                 for(var i in originalArray) {
                    lookupObject[originalArray[i][prop]] = originalArray[i];
                 }
                 for(i in lookupObject) {
                     newArray.push(lookupObject[i]);
                 }
                  return newArray;
            },
            formatearPrecio(num){
                num = num.toString().replace(/\./g,'');
                if(!isNaN(num)){
                    num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                    num = num.split('').reverse().join('').replace(/^[\.]/,'');
                    return num;
                }
            },
            versihayuct(){
                var c = 0;
                this.unidades.forEach(function(unidad) {
                  if (unidad.uct == 1) {
                    c++;
                  }
                });
                return c > 0 ? true : false;
            },
            getPageViews(page){
                // axios
                //     .get('https://www.googleapis.com/analytics/v3/data/ga?ids=ga%3A189199190&start-date=30daysAgo&end-date=yesterday&metrics=ga%3Apageviews&dimensions=ga%3ApagePath&filters=ga%3ApagePath%3D%3D%2Fmodelos&access_token=ya29.a0AfH6SMCS-4bd4_TrbTyCnXVgsnnolkPBbffrWB8A0LdPm_EnN21uMFE2EFJrw1TYSTGHXVtaNiJEKPwKg08yocTAZ2q-DnZiWVbxbZC76nRTnFILlYmVnNHAIkahVRHk_u3DgMlHAu2itbjzF3lwJ8QdmI7BeyeStNI')
                //     .get('https://www.googleapis.com/analytics/v3/data/ga?ids=ga%3A189199190&start-date=30daysAgo&end-date=yesterday&metrics=ga%3Apageviews&dimensions=ga%3ApagePath&filters=ga%3ApagePath%3D%3D%2Fmodelos&access_token=ya29.a0AfH6SMCS-4bd4_TrbTyCnXVgsnnolkPBbffrWB8A0LdPm_EnN21uMFE2EFJrw1TYSTGHXVtaNiJEKPwKg08yocTAZ2q-DnZiWVbxbZC76nRTnFILlYmVnNHAIkahVRHk_u3DgMlHAu2itbjzF3lwJ8QdmI7BeyeStNI')
                //     .then(res=>{
                //         console.log(res.row)
                //     });
                axios
                    .get('https://www.googleapis.com/analytics/v3/data/ga?ids=ga%3A189199190&start-date=30daysAgo&end-date=yesterday&metrics=ga%3Apageviews&dimensions=ga%3ApagePath&filters=ga%3ApagePath%3D%3D%2Fmodelos&access_token=ya29.a0AfH6SMCS-4bd4_TrbTyCnXVgsnnolkPBbffrWB8A0LdPm_EnN21uMFE2EFJrw1TYSTGHXVtaNiJEKPwKg08yocTAZ2q-DnZiWVbxbZC76nRTnFILlYmVnNHAIkahVRHk_u3DgMlHAu2itbjzF3lwJ8QdmI7BeyeStNI',
                        {
                            headers: {'Access-Control-Allow-Origin': '*'},
                            crossdomain: true
                    })
                    .then(res=>{
                        console.log(res.row)
                    });
            }
        }
    }
</script>

<style type="text/css" scoped>
    .car-thumbnail {
        position: relative;
        height: 220px;
        background-size: cover !important;
        background-position: center !important;
        border-radius: 5px;
    }
    .sidebar-left {
        margin: 0 0 30px 0;
        background: #fff;
        box-shadow: 0 0 35px rgba(0, 0, 0, 0.1);
    }
</style>