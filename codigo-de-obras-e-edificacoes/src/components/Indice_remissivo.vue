<template>
	<div class="Indice_remissivo">
		{{ title }}
	</div>
</template>

<script>
export default{
	name: "Indice_remissivo", 
	data(){
		return{
			title: "Índice Remissivo"
		}
	},
	props:['caminho']
}
</script>

<style>
</style>