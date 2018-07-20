<?php
/*
Template Name: infografico-oucae
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style-loader.css">
<link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/SPA/infograficos/dist/oucae.min.css">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="default-inner">
		<div class="wrapper">
			<div class="inner">
				<div id="preloader">Carregando...</div>
				<div class="text">
					<h3><?php echo the_title(); ?></h3>
					<div class="inner-text">
						<p><?php echo the_content(); ?></p>
						<div id="app"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>

<script src="<?php echo get_template_directory_uri() .'/js/vue.v2.5.16.js';?>"></script>
<script src="<?php echo get_template_directory_uri() .'/SPA/infograficos/dist/oucae.min.js';?>"></script>
<script type="text/javascript" defer>
var loader = document.getElementById('preloader');
jQuery(document).ready(function() {
	loader.style.display = 'none';
})
</script>

<?php get_footer(); ?>

