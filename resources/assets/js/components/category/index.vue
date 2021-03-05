<template>
	<div>
		<div class="card border-info">
			<div class="card-header bg-default font-weight-bold">
			    CATEGORÍAS
			</div>
			<div class="card-body">
				<div>
					<div class="input-group mb-3">
					  <input v-model="newCategory.name" type="text" class="form-control" placeholder="Ingrese categoría" aria-label="Ingrese categoría" aria-describedby="button-add-new-category" required>
					  <div class="input-group-append">
					    <button class="btn btn-outline-secondary" type="button" @click="addCategory()" id="button-add-new-category">Agregar</button>
					  </div>
					</div>
				</div>
			    <ul class="list-group list-group-flush">
			        <li v-for="(c, ix) in categories" class="list-group-item">
			        	<a data-toggle="collapse" :href="'#collapseCategory'+c.id" @click="edit(c)" class="d-flex justify-content-between">
				        	<span class="d-block">{{ c.name }}</span>
				        	<span class="d-block"><i class="fas fa-edit"></i></span>
			        	</a>
			        	<div class="collapse pl-2 py-2" :id="'collapseCategory'+c.id">
						    <form action="#">
						    	<div class="form-group">
						    		<input class="form-control form-control-sm" type="text" v-model="category.name" required>
						    	</div>
						    	<div class="form-group">
							    	<textarea class="form-control form-control-sm" v-model="category.description">{{ c.description }}</textarea>
							  	</div>
						    	<div class="form-group text-right">
						    		<button type="button" class="btn btn-sm btn-primary" @click="updateCategory()">Guardar</button>
							  	</div>
							</form>
						</div>
			    	</li>
			    </ul>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
        data(){
            return {
                newCategory: {},
                categories: [],
                category: {},
            }
        },
        mounted() {
        	this.getCategories();
        },
        methods:{
        	getCategories(){
				axios
					.get('/categories')
					.then(res => {
						this.categories = res.data.data
						this.data = res.data.data
					})
        	},
        	edit(c){
        		$("#collapseCategory"+this.category.id).collapse('hide');
        		this.category = Vue.util.extend({}, c) // copia el Obj sin referencia
        	},
        	updateCategory(){
        		axios
					.put('/categories/'+this.category.id, this.category)
					.then(res => {
						this.getCategories()
					})
        	},
        	addCategory(){
        		axios
					.post('/categories/', this.newCategory)
					.then(res => {
						this.getCategories()
						this.newCategory = {}
					})
        	}
        }
    }
</script>