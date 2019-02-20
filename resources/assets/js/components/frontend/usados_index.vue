<template>
<div>
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="thumbnail thumbnail-no-bg">
              <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
              <!-- INT 890 -->
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
                    <h2 class="text-center precio">$ 800.000</h2>
                </p>
              </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <div class="thumbnail thumbnail-no-bg">
              <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
              <!-- INT 921 -->
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
                    <h2 class="text-center precio">$ 300.000</h2>
                </p>
              </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <div class="thumbnail thumbnail-no-bg">
              <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
              <!-- INT 851 -->
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
                    <h2 class="text-center precio">$ 320.000</h2>
                </p>
              </div>
            </div>
        </div>
    </div>

           


    <!-- Modal Para enviar consulta o mensaje -->
    <div class="modal fade" id="contacto" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">CONSULTAR</h4>
      </div>
      <div class="modal-body">
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
    </div>

    <!-- Modal Rspuesta Mensaje Enviado -->
    <div class="modal" id="msj_enviado" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <h4>Su mensaje fue enviado correctamente. Un asesor estará en contacto con usted a la brevedad.</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ACEPTAR</button>
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
                $('.en_proceso').show();
                $('#contacto').modal('toggle');
                // axios.post('/consultar/usado/'+this.usadoSelected.id, {
                axios.post('/consultar/usado', {
                    nombre: this.nombre,
                    telefono: this.telefono,
                    email: this.email,
                    mensaje: this.mensaje,
                    marca: '-',
                    modelo: '-',
                    // marca: this.usadoSelected.marca,
                    // modelo: this.usadoSelected.modelo,
                  })
                  .then(function (response) {
                    $('.en_proceso').hide();
                    $('#msj_enviado').modal();
                    this.usadoSelected = '';
                    this.nombre = '';
                    this.telefono = '';
                    this.email = '';
                    this.mensaje = '';
                    this.marca = '';
                    this.modelo = '';
                  })
                  .catch(function (error) {
                    $('.en_proceso').hide();
                    console.log(error);
                  });
            }
        }
    }
</script>
