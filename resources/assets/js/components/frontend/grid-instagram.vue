<template>
	
</template>

<script>
    export default {
    	props: ['data'],
        data(){
            return {
                                
            }
        },
        mounted() {
            this.getMediaRecent();
        },
        methods:{
            getMediaRecent(){
            	axios
		          	.get('https://api.instagram.com/v1/users/self/media/recent/?access_token=3040871634.0b0a53a.271afbc2524c47b0b5b38e701bf0e98d')
		          	.then(response => (
		                console.log(response)
	          		))
            }
        },
        computed: {
          
        }
    }
</script>
