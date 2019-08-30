<template>
<div>
    <br>
    <div class="panel panel-default">
        <div class="panel-heading d-flex justify-content-space-between">
            <p>¿Que vehículo estás buscando?</p>
            <a class="text-right" href="#" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="color: darkmagenta;">
                <i class="fa fa-filter" aria-hidden="true"></i> Filtros
            </a>
        </div>
        <div id="collapseExample" class="collapse in">
          <div class="panel-body">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="form-group">
                        <div class="row">
                        <div class="col-sm-12 col-md-3 col-sm-pb-2">
                            <select class="form-control" v-model="filtro_marca">
                                <option value="">--Marca--</option>
                                <option v-for="marca in marcas" :value="marca">{{marca}}</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-3 col-sm-pb-2">
                            <select class="form-control" v-model="filtro_color">
                                <option value="">--Color--</option>
                                <option v-for="color in colores" :value="color">{{color}}</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-3 col-sm-pb-2">
                            <select class="form-control" v-model="filtro_anio">
                                <option value="">--Año--</option>
                                <option v-for="anio in anios" :value="anio">{{anio}}</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="flex justify-content-space-around">
                            <a href="#" class="btn btn-default" @click.prevent="limpiarFiltro()"><i class="fa fa-refresh"></i></a>
                            <a href="#" class="btn btn-primary a-cargando" @click.prevent="filtrar()"><i class="fa fa-filter"></i> Filtrar</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-right">
                    <div class="form-inline">
                        <div class="form-group">
                                <label>Ordenar Por: </label>
                                <select class="form-control" v-model="ordenar_por" @change="ordernarPor()">
                                    <option value="anio_may_men">Año mayor a menor</option>
                                    <option value="anio_men_may">Año menor a mayor</option>
                                    <option value="precio_may_men">Precio mayor a menor</option>
                                    <option value="precio_men_may">Precio menor a mayor</option>
                                </select>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div v-if="unidades_filtered != ''">
                <div class="row">
                    <div v-for="unidad in unidades_filtered" class="col-sm-12 col-md-4" v-if="unidad.visible">
                        <div class="thumbnail thumbnail-no-bg thumbnail-no-border" style="height:auto">
                            <div class="pos-rel o-flw-hiden" style="max-height: 250px">
                            <div class="top-cross-ribbon ribbon-custom" v-if="unidad.estado == 'RESERVADO'">RESERVADO</div>
                            <div class="arrow-ribbon" v-if="unidad.uct"><i class="fa fa-certificate"></i> CERTIFICADO</div>
                                <img v-show="unidad.foto" :src="unidad.foto" alt="">
                                <img v-show="!unidad.foto" src="/imagenes/default-img.png" alt="">
                                <a :href="'/usados/'+unidad.slug" class="block2-overlay trans-0-4">
                                    <div class="block2-btn-addcart w-size1 trans-0-4 d-flex justify-content-center">
                                        <a :href="'/usados/'+unidad.slug" class="btn btn-celeste-pastel flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" tabindex="0">
                                            DETALLES
                                        </a>
                                    </div>
                                </a>
                            </div>

                            <div class="caption caption-default">
                                <h4 class="text-center">{{unidad.marca}} {{ unidad.modelo }}</h4>
                                <div style="display: flex; justify-content: space-around; font-size: 12px; flex-wrap: wrap;">
                                    <div>
                                        <label><i class="fa fa-calendar"></i> Año:</label> {{unidad.anio}}  
                                    </div>
                                    <div>
                                        <label><i class="stm-service-icon-listing-compare"></i> KM:</label> {{unidad.km}}
                                    </div>
                                    <div>
                                        <label><i class="stm-service-icon-color_type"></i> Color:</label> {{unidad.color}}
                                    </div>
                                </div>
                                <h2 class="text-center precio">$ {{formatearPrecio(unidad.precio)}}</h2>
                                <a :href="'https://wa.me/5493644178456?text=Hola%20estoy%20interesado/a%20en%20el%20vehículo%20'+unidad.marca+' - '+unidad.modelo"  class="btn btn-default d-block" target="_blank" style="font-size: 16px;">
                                    <i style="font-size: 20px; font-weight: bold; color: #13820a" class="fa fa-whatsapp"></i>
                                    CONSULTAR
                                </a>
                            </div>
                        </div>
                    </div>  
                    <div class="col-sm-12 col-md-12" v-show="unidades.length==0">
                        <div class="alert alert-info" role="alert">
                            <strong>Sin resultados!</strong> No hay unidades que coincidan con los datos ingresados.
                            <a href="#" @click.prevent="limpiarFiltro()">Ver todos</a>
                        </div>
                    </div>
                </div>
            </div>

            <div v-if="unidades_filtered == ''" id="certificados-toyota">
                <div class="title-section mb-1">
                    <h3>USADOS CERTIFICADOS</h3>
                </div>
                <div class="well">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-2 text-center">
                                <img src="/imagenes/logo-uct.png" class="img-responsive" style="max-height: 125px; display: inline; margin-bottom: 10px;">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-10">
                                <h4>¿Qué es un Usado Certificado TOYOTA?</h4>
                                <p>Un <b>Usado Certificado Toyota</b> es un vehículo que puede adquirir un cliente cuyos beneficios son los siguientes:</p>
                                <ul class="list-unstyled">
                                    <li> - Garantía de 1 año o 20.000 km.</li>
                                    <li> - Vehículos que fueron atendidos en concesionarios oficiales.</li>
                                    <li> - 150 puntos de inspección realizados por técnicos capacitados.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div v-for="unidad in unidades_uct" class="col-sm-12 col-md-4" v-if="unidad.visible && unidad.uct">
                        <div class="thumbnail thumbnail-no-bg thumbnail-no-border" style="height:455px">
                            <div class="pos-rel o-flw-hiden" style="max-height: 250px">
                            <div class="top-cross-ribbon ribbon-custom" v-if="unidad.estado == 'RESERVADO'">RESERVADO</div>
                            <div class="arrow-ribbon" v-if="unidad.uct"><i class="fa fa-certificate"></i> CERTIFICADO</div>
                                <img v-show="unidad.foto" :src="unidad.foto" alt="">
                                <img v-show="!unidad.foto" src="/imagenes/default-img.png" alt="">
                                <a :href="'/usados/'+unidad.slug" class="block2-overlay trans-0-4">
                                    <div class="block2-btn-addcart w-size1 trans-0-4 d-flex justify-content-center">
                                        <a :href="'/usados/'+unidad.slug" class="btn btn-celeste-pastel flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" tabindex="0">
                                            DETALLES
                                        </a>
                                    </div>
                                </a>
                            </div>

                            <div class="caption caption-default">
                                <h4 class="text-center">{{unidad.marca}} {{ unidad.modelo }}</h4>
                                <div style="display: flex; justify-content: space-around; font-size: 12px; flex-wrap: wrap;">
                                    <div>
                                        <label><i class="fa fa-calendar"></i> Año:</label> {{unidad.anio}}  
                                    </div>
                                    <div>
                                        <label><i class="stm-service-icon-listing-compare"></i> KM:</label> {{unidad.km}}
                                    </div>
                                    <div>
                                        <label><i class="stm-service-icon-color_type"></i> Color:</label> {{unidad.color}}
                                    </div>
                                </div>
                                <h2 class="text-center precio">$ {{formatearPrecio(unidad.precio)}}</h2>
                                <a :href="'https://wa.me/5493644178456?text=Hola%20estoy%20interesado/a%20en%20el%20vehículo%20'+unidad.marca+' - '+unidad.modelo"  class="btn btn-default d-block" target="_blank" style="font-size: 16px;">
                                    <i style="font-size: 20px; font-weight: bold; color: #13820a" class="fa fa-whatsapp"></i>
                                    CONSULTAR
                                </a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="alert alert-info" role="alert" v-if="!hayUct">Por el momento no contamos con Usados Certificados en stock.</div>  
            </div>

            <div v-if="unidades_filtered == ''">
                <div class="title-section mb-1">
                    <h3>USADOS SELECCIONADOS</h3>
                </div>
                <div class="row">
                    <div v-for="unidad in unidades" class="col-sm-12 col-md-4" v-if="unidad.visible && !unidad.uct">
                        <div class="thumbnail thumbnail-no-bg thumbnail-no-border" style="height:455px">
                            <div class="pos-rel o-flw-hiden" style="max-height: 250px">
                            <div class="arrow-ribbon" v-if="unidad.uct"><i class="fa fa-certificate"></i> CERTIFICADO</div>
                            <div class="top-cross-ribbon ribbon-custom" v-if="unidad.estado == 'RESERVADO'">RESERVADO</div>
                                <img v-show="unidad.foto" :src="unidad.foto" alt="">
                                <img v-show="!unidad.foto" src="/imagenes/default-img.png" alt="">
                                <a :href="'/usados/'+unidad.slug" class="block2-overlay trans-0-4">
                                    <div class="block2-btn-addcart w-size1 trans-0-4 d-flex justify-content-center">
                                        <a :href="'/usados/'+unidad.slug" class="btn btn-celeste-pastel flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" tabindex="0">
                                            DETALLES
                                        </a>
                                    </div>
                                </a>
                            </div>

                            <div class="caption caption-default">
                                <h4 class="text-center">{{unidad.marca}} {{ unidad.modelo }}</h4>
                                <div style="display: flex; justify-content: space-around; font-size: 12px; flex-wrap: wrap;">
                                    <div>
                                        <label><i class="fa fa-calendar"></i> Año:</label> {{unidad.anio}}  
                                    </div>
                                    <div>
                                        <label><i class="stm-service-icon-listing-compare"></i> KM:</label> {{unidad.km}}
                                    </div>
                                    <div>
                                        <label><i class="stm-service-icon-color_type"></i> Color:</label> {{unidad.color}}
                                    </div>
                                </div>
                                <h2 class="text-center precio">$ {{formatearPrecio(unidad.precio)}}</h2>
                                <a :href="'https://wa.me/5493644178456?text=Hola%20estoy%20interesado/a%20en%20el%20vehículo%20'+unidad.marca+' - '+unidad.modelo"  class="btn btn-default d-block" target="_blank" style="font-size: 16px;">
                                    <i style="font-size: 20px; font-weight: bold; color: #13820a" class="fa fa-whatsapp"></i>
                                    CONSULTAR
                                </a>
                            </div>
                        </div>
                    </div>  
                    <div class="col-sm-12 col-md-12" v-show="unidades.length==0">
                        <div class="alert alert-info" role="alert">
                            <strong>Sin resultados!</strong> No hay unidades que coincidan con los datos ingresados.
                            <a href="#" @click.prevent="limpiarFiltro()">Ver todos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="title-section mt-3">
        <h3 style="color: black">PRESTAMOS TUAUTO DEL NUEVO BANCO DEL CHACO<br><small></small></h3>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-5">
            <img src="imagenes/financiacion/nbch-usados.jpeg" class="img-responsive">
        </div>
        <div class="col-xs-12 col-md-6 my-3">
            <p style="color: #636b6f; font-size: 17px">Accede a la exclusiva linea de prestamos <b>TuAuto</b> del Nuevo Banco del Chaco y subite a nuestros <b>USADOS SELECCIONADOS!</b></p>
            <p style="color: #636b6f; font-size: 17px"><b>Tasa fija</b> 39% y plazo hasta 60 meses!</p>
            <p style="color: #636b6f; font-size: 17px">No dejes pasar esta gran oportunidad de tener tu crédito, consultanos!</p>
            <p>
              <a href="https://wa.me/5493644178456?text=Hola%20estoy%20interesado/a%20en%20el%20Prestamo%20TuAuto%200km" class="btn btn-toyota btn-whatsapp my-1"><i class="fa fa-whatsapp"></i> CONSULTAR</a> 
              <a href="https://m.me/derkayvargas" class="btn btn-primary"><i class="fa fa-facebook"></i> Envíanos un mensaje de Facebook</a> 
            </p>
        </div>
      </div>
     <div class="row">
        <div class="col-sm-12 col-md-5">
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
                unidades_uct: '',
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
            this.unidades = this.data.unidades;
            this.unidades_uct = this.data.unidades;
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

                if (this.filtro_anio == 0 && this.filtro_marca == 0 && this.filtro_color == 0){
                    this.unidades = this.data.unidades;
                }else{
                    self = this;
                    axios
                        .post('/usados/filter',{
                            filtro_marca: this.filtro_marca,
                            filtro_color:this.filtro_color,
                            filtro_anio:this.filtro_anio,
                        })
                        .then( function(res){
                            //self.unidades = res.data;
                            self.unidades_filtered = res.data;
                            $('.a-cargando').removeClass("disabled");
                            $('.a-cargando').text("Filtrar");
                            $('.a-cargando').prepend($("<i class='fa fa-filter'></i>"));
                        });
                }

            },
            limpiarFiltro(){
                this.unidades = this.data.unidades;
                this.filtro_anio = '';
                this.filtro_color = '';
                this.filtro_marca = '';
                this.ordenar_por = '';
                this.unidades_filtered = '';
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
            }
        }
    }
</script>