<template>
	
</template>
<script>
    export default {
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
					console.log(res);
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