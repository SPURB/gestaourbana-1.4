<template>
	<div id="app">
		<router-view name="header"></router-view>
		<div id="appcontent">
			<router-view name="main" :caminho="caminho"></router-view>
		</div>
	</div>
</template>

<script>
export default {
	name: 'App',
	computed:{
		caminho() {
			if(location.port == '8080'){
				return '../static/img/' 
			}
			else{
				return template_directory_uri +'/codigo-de-obras-e-edificacoes/dist/static/img/' 
			}
		}
	}
}
</script>

<style lang="scss">
</style>
