<?php
/*
Template Name: Noticias
*/
?>
<?php get_header(); ?>
<div id="news">
  <div class="wrapper">
      <div class="inner">
        <ul>
            <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1; ?>
            <?php $wp_query = new WP_Query( array(
              'post_type' => 'noticias', 
              'paged' => $paged, 
              'posts_per_page' => 10
              )); 
            ?>
            <?php $count = 1; ?>
            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                <li class="noticia clear">
                    <div class="image left">
                      <a href="<?php the_permalink(); ?>">
                        <?php if( has_post_thumbnail()): ?>
                          <?php the_post_thumbnail('233x132'); ?>
                        <?php endif; ?>
                      </a>
                    </div>
                    <div class="right">
                        <a href="<?php the_permalink(); ?>">
                          <p class="news-date"><?php the_time('d/m/Y'); ?></p>
                            <h4><?php the_title(); ?></h4>
                          <div class="inner-text">
                            <?php if (has_excerpt()):?>
                              <p class="subtitle"><?php the_excerpt(); ?></p>
                            <?php endif; ?>
                          </div>                
                          </a>
                      <?php if (has_tag()):?>
                        <div class="tags">
                          <span><?php the_tags() ?></span>
                        </div>
                      <?php endif; ?>
                    </div>
                  </li>
           <?php $count++; endwhile;?>
        </ul>
      </div>  
      <div class="clear"></div>
      <?php the_content_nav(); ?>
  </div>
</div>
<?php get_footer(); ?>