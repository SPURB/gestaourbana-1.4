<template>
	<div class="Creditos">
		{{ title }}
	</div>
</template>

<script>
export default{
	name: "Creditos", 
	data(){
		return{
			title: "Créditos"
		}
	},
	props:['caminho']
	
}
</script>

<style>
</style>