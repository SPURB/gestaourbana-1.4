<?php
/*
Template Name: coe-texto-da-lei-ilustrado
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ol.4.2.0.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/SPA/piu-monitoramento/dist/styles.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div id="default-inner">
    <div class="wrapper">
            <div class="inner">
				<div id="app">
					<mapa :clicked-id="projectId" @clicked="receiveId"></mapa>
					<sumario @clicked="receiveId"></sumario>
					<ficha :clicked-id="projectId" @clicked="receiveId"></ficha>
				</div>
            </div>
        <div class="clear"></div>
    </div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
	var dist_folder = "<?php echo get_template_directory_uri(); ?>" + "/piu-monitoramento/dist/";
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vue.v2.5.16.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ol.4.2.0.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/SPA/piu-monitoramento/dist/main.min.js"></script>
