<template>
	<div>
		<div class="container">
		    <a href="#" class="btn btn-primary" v-on:click.prevent="agregarLinea()"><i class="fa fa-plus" aria-hidden="true"></i></a>
		    <div id="lineas">
		          <div class="row" id="linea_1">
		            <div class="col-md-3">
		              <div class="input-group">
		                <select name="producto[]" v-model="producto_selected" class="form-control">
		                	<option v-for="producto in productos" v-bind:value="producti.id">{{producto.id}}</option>
		                </select>
		              </div>
		            </div>
		            <div class="col-md-3">
		              <div class="input-group">
		                <input v-model="producto_selected.cantidad" name="codigo[]" placeholder="Código del color" type="text" class="form-control" style="height: 39px;">
		              </div>
		            </div>
		            <div class="col-md-3">
		              <div class="input-group">
		                <input  v-model="producto_selected.precio_unitario" name="codigo[]" placeholder="Código del color" type="text" class="form-control" style="height: 39px;">
		              </div>
		            </div>
		            <div class="col-md-3">
		              <div class="input-group">
		                  <a class="btn btn-danger" href="#" v-on:click.prevent="borrarLinea(1)"><i class="fa fa-trash" aria-hidden="true"></i></a>
		                </div>
		            </div>
		          </div>
		      </div>
	  	</div>
	  	<select id="select_prod" name="producto[]" v-model="producto_selected" class="form-control" style="display: none;">
        	<option v-for="producto in productos" v-bind:value="producti.id">{{producto.id}}</option>
        </select>
	</div>
</template>

<script>
    export default {
    	props: ['data'],
        data(){
            return {
                index: 1,
                productos : '',
                producto_selected : ''
            }
        },
        mounted() {
            this.obtenerProductos();
        },
        methods:{
            obtenerProductos(){
            	axios
		          	.get('/obtener_productos')
		          	.then(response => (
		                this.productos = response.data
	          		))
            },
            agregarLinea(){
            	this.index = this.index + 1;
            	$('#lineas').append(`
                                <div class="row" id="linea_${this.index}" style="margin-top: 10px;">
                                    <div class="col-md-3">
                                      <div class="input-group">
                                        <select name="producto[]" v-model="producto_selected" class="form-control">
						                	<option v-for="producto in productos" v-bind:value="producti.id">{{producto.id}}</option>
						                </select>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="input-group">
                                        <input name="codigo[]" placeholder="Código del color" type="text" class="form-control" style="height: 39px;">
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="input-group">
                                        <input name="codigo[]" placeholder="Código del color" type="text" class="form-control" style="height: 39px;">
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="input-group">
                                          <a class="btn btn-danger" href="#" onclick="borrarLinea(event, ${this.index})"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                  </div>
              `);
            },
            borrarLinea(i){
            	$('#linea_'+i).remove();
            	this.index = this.index -1;
            }
        },
        computed: {
          
        }
    }
</script>
