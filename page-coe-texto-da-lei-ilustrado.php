<?php
/*
Template Name: coe-texto-da-lei-ilustrado
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-loader.css">
<noscript>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/SPA/codigo-de-obras/dist/static/css/app.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</noscript>

<div id="default-inner">
	<div class="wrapper">
			<div class="inner">
				<div id="preloader">Carregando...</div>
				<div id="app"></div>
			</div>
		<div class="clear"></div>
	</div>
</div>
<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/SPA/codigo-de-obras/dist/static/js/manifest.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/SPA/codigo-de-obras/dist/static/js/vendor.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/SPA/codigo-de-obras/dist/static/js/app.js"></script>

<script type="text/javascript">
(function (){
	/* Defer app.css para performance */
	var link = document.createElement('link');
	link.rel = 'stylesheet';
	link.href = template_url + "/SPA/codigo-de-obras/dist/static/css/app.css";
	link.type = 'text/css';
	var godefer = document.getElementsByTagName('link')[0];
	godefer.parentNode.insertBefore(link, godefer);

	/* Defer icon CSS */
	var link2 = document.createElement('link');
	link2.rel = 'stylesheet';
	link2.href = 'https://fonts.googleapis.com/icon?family=Material+Icons';
	var godefer2 = document.getElementsByTagName('link')[0];
	godefer2.parentNode.insertBefore(link2, godefer2);

	//altera display do loader
	document.getElementById("preloader").style.display = "none";
})()
</script>

