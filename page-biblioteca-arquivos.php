<?php get_header(); ?>

<script type="text/javascript">
(function(){
const fakeEndpoint = template_url + "/SPA/api-arquivos/output/falso_arquivos.json";
fetch(fakeEndpoint)
	.then(function(response) {
		return response.json();
	})
	.then(function(text) {
		console.log('Request ok', text);
		// console.log(text.projetos);
	})
	.catch(function(error) {
		log('Request falhou', error)
	});
})()
</script>

<?php get_footer(); ?>