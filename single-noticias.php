<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php
  $counter_post_meta = get_post_meta($post->ID, 'views_counter_'.date('M'));
?>
<?php update_post_meta($post->ID, 'views_counter_'.date('M'), @$counter_post_meta[0] + 1, true); //Add counter to news ?>

<div id="news-inner">
  <div class="wrapper">
    <div class="left">
      <div class="inner">
        <div class="text">
          <p class="news-date"><?php echo the_time('d/m/Y'); ?></p>
          <h3 class="titulo"><?php echo the_title(); ?></h3>
          <div class="subtitle"><strong><?php echo the_excerpt(); ?></strong></div>
          <br /><br />

          <div class="inner-text">
            <?php
              $content = get_the_content();
              $content = apply_filters('the_content', $content);
              $content = str_replace(']]>', ']]&gt;', $content);
              $content = str_replace('<p> </p>', '', $content);
              $content = explode('<p>',$content);
             ?>
            <?php for ($x = 0; $x < count($content); $x++) : ?>
              <?php if ($x == get_field('read_more_paragraph') && get_field('show_read_more')): ?>
                <div class="also-read">
                  <?php if (function_exists('the_related')) { the_related(); }; ?>
                </div>
              <?php endif; ?>

              <p><?php echo str_replace('</p>', '',$content[$x]); ?></p>

            <?php endfor; ?>

            <div class="clear"></div>
          </div>
        </div>
        <?php if (get_the_tags() != '') :  ?>
        <div class="tags"><?php the_tags('Tags: ', ', ', '<br />'); ?> </div>
        <?php endif; ?>
        <!--Comentários-->
        <?php comments_template( '', true ); ?>
      </div>
    </div>

    <?php include('noticias-sidebar.php'); ?>

    <div class="clear"></div>

  </div>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>