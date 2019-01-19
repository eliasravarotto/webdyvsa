<template>
    <div class="galeria-usados">
        <div id="fh5co-portfolio-section">
            <!-- <ul id="filters" class="clearfix animate-box">
                <li><span class="filter active" data-filter=".all">Todos</span></li>
                <li><span class="filter" data-filter=".auto">Autos</span></li>
                <li><span class="filter" data-filter=".camioneta">Camionetas</span></li>
                <li><span class="filter" data-filter=".Toyota">Toyota</span></li>
                <li><span class="filter" data-filter=".renault">Renault</span></li>
                <li><span class="filter" data-filter=".rojo">Rojo</span></li>
                <li><span class="filter" data-filter=".Gris Oscuro">Gris</span></li>
            </ul> -->
            <!-- <div id="portfoliolist" class="animate-box row">
                <div v-for="unidad in unidades" v-bind:class="' col-md-4 col-sm-12 col-xs-12 portfolio all thumbnail thumbnail-no-bg '+unidad.color+' '+unidad.marca" data-cat="logo">
                    <a v-bind:href="'/usados/'+unidad.id">
                    <div class="portfolio-wrapper">             
                        <img v-bind:src="unidad.foto" alt="" />
                        <div class="label">
                            <div class="label-text">
                                <a v-bind:href="'/usados/'+unidad.id" class="btn btn-danger text-uppercase">Detalles</a>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </div>
                    </a>
                    <div class="caption caption-default text-uppercase">
                        <h3>{{ unidad.marca }} {{ unidad.modelo }} </h3>
                        <hr style="margin-top: 10px; margin-bottom: 10px">
                        <div style="display: flex; justify-content: space-around;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> {{ unidad.anio }}
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> {{ unidad.km }}
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> {{ unidad.color }}
                            </div>
                        </div>
                        <br>
                        <div style="display: flex; justify-content: flex-start; align-items: center;">
                            <a href="#" class="btn btn-danger text-uppercase" v-on:click="openModalContacto(unidad)">Consultar</a>
                        </div>
                    </div>
                </div>   
            </div> -->

            <div class="row">
                <div class="col-md-7">

                </div>
            </div>

            <div class="row">
              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
                  <div class="caption caption-default">
                    <h3 class="text-center">CHERY TIGGO 5 2.0 4X2 LUXURY CVT L/17</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2018  
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 8.800
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Blanco
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h3 class="text-center">$ 850.000</h3>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
                  <div class="caption caption-default">
                    <h3 class="text-center">FORD FIESTA 1.6 5P SE</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2014 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 44.500
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Blanco
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h3 class="text-center">$ 315.000</h3>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
                  <div class="caption caption-default">
                    <h3 class="text-center">FORD FIESTA 1.6 5P SE PLUS</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2014 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 76.000
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Gris Oscuro
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h3 class="text-center">$ 330.000</h3>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
                  <div class="caption caption-default">
                    <h3 class="text-center">FORD FIESTA 1.6 5P SE PLUS</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2014 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 38.000
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Blanco
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h3 class="text-center">$ 330.000</h3>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
                  <div class="caption caption-default">
                    <h3 class="text-center">FORD FOCUS L/14 2.0 4 P SE PLUS</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2014 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 41.000
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Dorado
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h3 class="text-center">$ 400.000</h3>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
                  <div class="caption caption-default">
                    <h3 class="text-center">FORD FOCUS L/16 1.6 5 P S</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2015 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 33.000
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Blanco
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h3 class="text-center">$ 420.000</h3>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <div class="caption caption-default">
                    <h3 class="text-center">IVECO DAILY 70C 16 CHASIS 4350</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2010 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 90.000
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Blanco
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h3 class="text-center">$ 740.000</h3>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <div class="caption caption-default">
                    <h3 class="text-center">TOYOTA COROLLA 1.8 SE-G L/11 AUT</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2013 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 169.000
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Gris Plata
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h3 class="text-center">$ 370.000</h3>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <div class="caption caption-default">
                    <h3 class="text-center">TOYOTA COROLLA 1.8 XLI L/14 CVT</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2016 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 42.000
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Blanco Perla
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h3 class="text-center">$ 470.000</h3>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <div class="caption caption-default">
                    <h3 class="text-center">TOYOTA ETIOS  1.5 5 PTAS XLS</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2015 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 80.215
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Gris
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h3 class="text-center">$ 290.000</h3>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <div class="caption caption-default">
                    <h3 class="text-center">TOYOTA ETIOS 1.5 4 PTAS XLS </h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2016 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 100.000
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Negro
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h3 class="text-center">$ 315.000</h3>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <div class="caption caption-default">
                    <h3 class="text-center">TOYOTA ETIOS 1.5 4 PTAS XLS 4AT </h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2016 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 66.000
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Rojo
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h3 class="text-center">$ 375.000</h3>
                    </p>
                  </div>
                </div>
              </div>
            </div>


            </div>
            </div>
            </div>
        </div>

        <!-- Modal -->
        <!-- <div class="modal fade" id="contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">CONSULTAR</h4>
              </div>
              <div class="modal-body">
                <h4 class="text-center text-uppercase">
                    {{ usadoSelected.marca }} - {{ usadoSelected.modelo }} - {{ usadoSelected.año }} - {{ usadoSelected.color }}
                </h4>
                <form>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <label>Nombre</label>
                            <input class="form-control" type="text" name="nombre" v-model="nombre" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12 col-sm-12">
                            <label>Teléfono</label>
                            <input class="form-control" type="email" name="telefono" v-model="telefono">
                        </div>
                            
                        <div class="col-md-6 col-xs-12 col-sm-12">
                            <label>Email</label> (opcional)
                            <input class="form-control" type="email" name="email" v-model="email">
                        </div>
                    </div>
                    <label>Mensaje</label>
                    <textarea class="form-control" v-model="mensaje"></textarea>
                </form>
                <br>
                <div class="alert alert-info" role="alert">
                    <p>Al enviar el formulario un asesor se pondrá en contacto con usted a la brevedad.</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                <button type="button" class="btn btn-danger" v-on:click="enviarConsulta()">ENVIAR</button>
              </div>
            </div>
          </div>
        </div> -->
    </div>
</template>

<script>
    export default {
    	props: ['data'],
        data(){
            return {
                unidades: '',
                usadoSelected : '',
                nombre: '',
                telefono: '',
                email: '',
                mensaje:'',
            }
        },
        mounted() {
            //this.getUnidades();
            this.unidades = this.data.unidades;
        },
        methods:{
            openModalContacto(unidad)
            {
                $('#contacto').modal('toggle');
                this.usadoSelected = unidad;
            },
            enviarConsulta()
            {
                $('#contacto').modal('toggle');
                axios.post('/consultar/usado/'+this.usadoSelected.id, {
                    nombre: this.nombre,
                    telefono: this.telefono,
                    email: this.email,
                    mensaje: this.mensaje,
                    marca: this.usadoSelected.marca,
                    modelo: this.usadoSelected.modelo,
                  })
                  .then(function (response) {
                    console.log(response);
                    this.usadoSelected = '';
                    this.nombre = '';
                    this.telefono = '';
                    this.email = '';
                    this.mensaje = '';
                    this.marca = '';
                    this.modelo = '';

                  })
                  .catch(function (error) {
                    console.log(error);
                  });
            }
        }
    }
</script>
