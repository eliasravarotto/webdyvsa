<template>
<div>
    <div class="panel panel-default">
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
    <div class="row">
        <div v-for="unidad in unidades" class="col-sm-12 col-md-4">
            <div class="thumbnail thumbnail-no-bg" style="height:455px">
                <div class="pos-rel">
                    <img v-show="unidad.foto" :src="unidad.foto" alt="">
                    <img v-show="!unidad.foto" src="/imagenes/default-img.png" alt="">

                    <a :href="'/usados/'+unidad.slug" class="block2-overlay trans-0-4">
                        <div class="block2-btn-addcart w-size1 trans-0-4 d-flex justify-content-center">
                            <a :href="'/usados/'+unidad.slug" class="btn btn-rojo-pastel flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" tabindex="0">
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
                ordenar_por: ''
            }
        },
        mounted() {
            this.unidades = this.data.unidades;
            this.cargarColores();
            this.cargarMarcas();
            this.cargarAnios();
        },
        methods:{
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
                            self.unidades = res.data;
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
            }
        }
    }
</script>

<style type="text/css">
    .block2-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.3);
        opacity: 0;
    }

    .trans-0-4 {
        -webkit-transition: all .4s;
        -o-transition: all .4s;
        -moz-transition: all .4s;
        transition: all .4s;
    }

    .block2-overlay:hover {
        opacity: 1;
    }
    .block2-overlay:hover .block2-btn-addcart {
        bottom: 35px;
    }

    .block2-btn-addcart {
        position: absolute;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        bottom: -45px;
    }
    .w-size1 {
        width: 161px;
    }


    .thumbnail > div > img, .thumbnail > div > a > img {
    display: block;
    max-width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
}

.pos-rel{
    position: relative;
}

a:hover{
    text-decoration: none;
}

</style>