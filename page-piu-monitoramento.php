<?php
/*
Template Name: coe-texto-da-lei-ilustrado
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ol.4.2.0.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/piu-monitoramento/dist/styles.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div id="default-inner">
    <div class="wrapper">
            <div class="inner">
			<div id="app">
		<mapa></mapa>
		<sumario @clicked="receiveId"></sumario>
		<ficha :clicked-id="projectId" @clicked="receiveId"></ficha>
			</div>
            </div>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>
<!-- alterar url absoluta em producao -->

<!-- desenvolvimento -->
<script type="text/javascript">
	var url_excel_file = "http://spurbcp13343:7080/gestaourbana/wp-content/themes/gestaourbana-1.4/piu-monitoramento/monitoramento.xlsx";
	var dist_folder = "http://spurbcp13343:7080/gestaourbana/wp-content/themes/gestaourbana-1.4/piu-monitoramento/dist/"
</script>
<script src="<?php echo get_template_directory_uri(); ?>/piu-monitoramento/vendor/vue.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ol.4.2.0.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/piu-monitoramento/dist/main.min.js"></script>

<!-- produção -->
<script type="text/javascript">
	var dist_folder = "http://spurbcp13343:7080/gestaourbana/wp-content/themes/gestaourbana-1.4/piu-monitoramento/dist/"
</script>
<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script src="<?php// echo get_template_directory_uri(); ?>/js/ol.4.2.0.js"></script>
<script src="<?php// echo get_template_directory_uri(); ?>/piu-monitoramento/dist/main.min.js"></script> -->