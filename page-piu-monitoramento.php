<?php
/*
Template Name: piu-monitoramento
*/
?>
<?php get_header(); ?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/SPA/piu-monitoramento/dist/loader.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ol.4.2.0.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/SPA/piu-monitoramento/vendor/vis.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/SPA/piu-monitoramento/dist/styles.min.css">

<div id="loader">Carregando...</div>
<div id="default-inner">
	<div class="wrapper">
			<div class="inner">
				<div id="app">
					<mapa 	 	v-show="display.mapa"		@clicked="receiveId"	:clicked-id="projectId" 	:data='monitoramento'></mapa>
					<sumario 	v-show="display.sumario"	@clicked="receiveId" 								:data='monitoramento' 	:hiperlinks='hiperlinks'></sumario>
					<ficha 		v-show="display.ficha" 		@clicked="receiveId"	:clicked-id="projectId" 	:data='monitoramento' 	:hiperlinks='hiperlinks'></ficha>
				</div>
			</div>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
var dist_folder = "<?php echo get_template_directory_uri(); ?>" + "/SPA/piu-monitoramento/dist/";
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vue.v2.5.16.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ol.4.2.0.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/SPA/piu-monitoramento/vendor/vis-custom.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/SPA/piu-monitoramento/dist/main.min.js"></script>

<script type="text/javascript">
	var loader = document.getElementById('loader');
	jQuery(document).ready(function() {
		loader.style.visibility = 'hidden';
		setTimeout(function(){ 
			document.getElementsByTagName('canvas')[0].getContext('2d').globalCompositeOperation = 'multiply';
		}, 2500);
	})
</script>