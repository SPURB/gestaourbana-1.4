<?php
/*
Template Name: infografico-ouc-agua-espraiada
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="default-inner">
		<div class="wrapper">
			<div class="inner">
				<div class="text">
					<h3><?php echo the_title(); ?></h3>
					<div class="inner-text">
						<p><?php echo the_content(); ?></p>
						<?php 
							$infograficoImgPath = get_template_directory_uri() .'/SPA/infograficos/oucae/ouc-agua-espraiada.jpg';
							include get_template_directory() . '/SPA/infograficos/oucae/ouc-agua-espraiada.php';
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>