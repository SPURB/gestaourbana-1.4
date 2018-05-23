<?php
/*
Template Name: coe-texto-da-lei-ilustrado
*/
?>

<?php get_header(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/codigo-de-obras-e-edificacoes/dist/static/css/app.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div id="default-inner">
	<div class="wrapper">
			<div class="inner">
				<div id="app"></div>
			</div>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
	var template_directory_uri = "<?php echo get_template_directory_uri(); ?>";
</script>
<script src="<?php echo get_template_directory_uri(); ?>/codigo-de-obras-e-edificacoes/dist/static/js/manifest.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/codigo-de-obras-e-edificacoes/dist/static/js/vendor.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/codigo-de-obras-e-edificacoes/dist/static/js/app.js"></script>