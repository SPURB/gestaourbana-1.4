<?php
/*
Template Name: infografico-oucae
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/SPA/infograficos/dist/oucae.min.css">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="default-inner">
		<div class="wrapper">
			<div class="inner">
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

<!-- desenvolvimento -->
<script src="<?php echo get_template_directory_uri() .'/SPA/infograficos/vendor/vue.js';?>"></script>

<!-- producao -->
<!-- <script src="<?php //echo get_template_directory_uri() .'/js/vue.v2.5.16.js';?>"></script> -->
<script src="<?php echo get_template_directory_uri() .'/SPA/infograficos/dist/oucae.min.js';?>" defer></script>

<?php get_footer(); ?>