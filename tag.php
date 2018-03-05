<?php get_header(); ?>
<style type="text/css">
.page-tag .page-title {
margin-bottom: 1em
}
</style>

<div id="news" class="page-tag">
	<div class="wrapper">
			<div class="inner">
				<h3 class="page-title"><?php
					printf( __( 'Tag: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h3>
				<ul>
					<?php
					global $query_string;
					$posts = query_posts($query_string.'&post_type=noticias');
					if ( have_posts() ) : while ( have_posts() ) : the_post(); 
					?>
							<li class="noticia clear">
								<a href="<?php the_permalink();?>">
		                          <p class="news-date"><?php the_time('d/m/Y'); ?></p>
									<h4><?php the_title() ?></h4>
									<?php the_excerpt() ?>
								</a>
							</li>
					<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		<div class="clear"></div>
	</div>
</div>
<?php get_footer(); ?>