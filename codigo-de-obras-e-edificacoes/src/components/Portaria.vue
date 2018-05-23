<template>
	<div class="Portaria">
		{{ title }}
	</div>
</template>

<script>
export default{
	name: "Portaria", 
		data(){
		return{
			title: "Portaria"
		}
	 },
	props:['caminho']
}
</script>

<style>
</style>