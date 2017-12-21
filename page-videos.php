<?php get_header(); ?>
<div class="wrapper">
<div id="news">
  <div class="wrapper">
    <div class="left">
      <div class="inner">
        <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1; ?>
        <?php $wp_query = new WP_Query( array('post_type' => 'noticias', 'paged' => $paged, 'posts_per_page' => 5)); ?>
        <?php $count = 1; ?>
        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                <div class="image">
                  <?php the_post_thumbnail('233x132'); ?>
                </div>
                  <h3><?php the_title(); ?></h3>
                 <div class="inner-text">
                  <p class="subtitle"><?php the_excerpt(); ?></p>
                </div>                
              </a>
            </div>
        <?php $count++; endwhile;?>
        <?php the_content_nav(); ?>
      </div>      
     </div>
    <div class="clear"></div>
  </div>
</div>
</div>
<?php get_footer(); ?>