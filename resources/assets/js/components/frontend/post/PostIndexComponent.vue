<template>
	<ul class="list-group list-group-flush">
      <li class="list-group-item" v-for="post in posts">
          <div class="row d-flex align-items-center">
              <div class="col-xs-12 col-md-3">
                  <img v-if="post.image != null" v-lazy="post.image.public_path" class="img-fluid">
                  <img v-else v-lazy="'/imagenes/default.png'" class="img-fluid">
              </div>
              <div class="col-xs-12 col-md-9">
                    <span v-for="c in post.categories" style="font-size: 14px">{{c.name}}</span>
                  <h4>{{post.titulo}}</h4>
                  <p>{{post.contenido.substr(0, 250) + '...'}}</p>
                  <p><a :href="'/entradas/'+post.slug" class="btn btn-outline-black btn-round">Leer más <i class="fas fa-arrow-right"></i></a></p>
              </div>
          </div>
      </li>
    </ul>
</template>
<script>
    import VueLazyLoad from 'vue-lazyload'
    Vue.use(VueLazyLoad)
    export default {
      components: {
            VueLazyLoad,
        },
        data(){
            return {
                posts: []
            }
        },
        mounted() {
        	this.getPosts();
        },
        methods:{
        	getPosts(){
        		var query = '';
        		var url = window.location.href;
        		var p = this.getParamsUrl(window.location.href);
        		$.each(p, function(index, value) {
				    if (value !== 'undefined')
				    	query = query + index +'='+value+'&'
				});

				axios
				.get('/api/entradas?'+query)
				.then(res => {
					console.log(res.data);
                    this.posts = res.data.data;
				})
        	},
        	getParamsUrl(url){
        		var params = {};
				var parser = document.createElement('a');
				parser.href = url;
				var query = parser.search.substring(1);
				var vars = query.split('&');
				for (var i = 0; i < vars.length; i++) {
					var pair = vars[i].split('=');
					params[pair[0]] = decodeURIComponent(pair[1]);
				}
				return params;
        	}
        }
    }
</script>