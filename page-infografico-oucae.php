<?php
/*
Template Name: infografico-oucae
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/SPA/infograficos/oucae/oucae.css">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="default-inner">
		<div class="wrapper">
			<div class="inner">
				<div class="text">
					<h3><?php echo the_title(); ?></h3>
					<div class="inner-text">
						<p><?php echo the_content(); ?></p>

							<div id="app">
								<um></um>
							</div>

							<?php 
								$infograficoImgPath = get_template_directory_uri() .'/SPA/infograficos/oucae/oucae.jpg';
								include get_template_directory() . '/SPA/infograficos/oucae/oucae.php';
							?>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>

<!-- desenvolvimento -->
<script src="<?php echo get_template_directory_uri() .'/SPA/infograficos/node_modules/vue/dist/vue.js';?>"></script>

<!-- producao -->
<!-- <script src="<?php //echo get_template_directory_uri() .'/js/vue.v2.5.16.js';?>"></script> -->
<script src="<?php echo get_template_directory_uri() .'/SPA/infograficos/dist/oucae.min.js';?>" defer></script>

<?php get_footer(); ?>