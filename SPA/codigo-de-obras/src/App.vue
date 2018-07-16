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
			if(location.port == '8080' || location.port == '8082'){
				return '../static/img/' 
			}
			else{
				return template_url +'/SPA/codigo-de-obras/dist/static/img/' 
			}
		}
	}
}
</script>

<style lang="scss">
</style>
