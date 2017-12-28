<?php
/*
Template Name: Agendas
*/
?>

<?php get_header(); ?>

<div id="agenda">
	<div class="wrapper">
		<div class="left">
			<div class="inner">
				<h2>Agenda</h2><br /><br />Próximas atividades:<br /><br />
				<?php $paged = get_query_var('paged') ? get_query_var('paged') : 1; ?>
        <?php $wp_query = new WP_Query( 
          array(
            'post_type' => 'agenda', 
            'paged' => $paged, 
            'posts_per_page' => 10, 
            'meta_query' => array(
              array( 
                'key' => 'agenda_show_date',
                'value' => time(),
                'compare' => '>=')
              ),
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_key' => 'agenda_show_date'
          )); 
        ?>
        <?php $count = 1; ?>
        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				<div class="text">
				  <?php if (get_post_meta( $post->ID, 'agenda_show_date', true ) != '') : ?>
  				    <h2><?php _e(date('d', get_post_meta( $post->ID, 'agenda_show_date', true ))); ?> <?php _e(strftime('%b', get_post_meta( $post->ID, 'agenda_show_date', true ))); ?> | <?php echo ucfirst(__(date('l', get_post_meta( $post->ID, 'agenda_show_date', true )))); ?></h2>
  				  <?php else : ?>
  				  <?php endif; ?>
  					<?php the_post_thumbnail('170xX'); ?>
  					<h4><?php the_title(); ?></h4>
  					<div class="time"><?php _e(nl2br(get_post_meta( $post->ID, 'agenda_hour', true ))); ?></div>
  					<br />
  					<div class="place"><?php _e(get_post_meta( $post->ID, 'agenda_location', true )); ?></div>
  					<?php if (trim(get_the_content())!='') : ?>
  					  <br /><br />
  					  <div><a href="<?php the_permalink(); ?>">Mais detalhes</a></div>
					<?php endif; ?>
				</div>
				<?php $count++; endwhile;?>

				<?php
        global $wp_query;
        $current_page = $wp_query->get( 'paged' );
        if ( $current_page == $wp_query->max_num_pages ) : ?>
            <?php 
              $wp_query2 = new WP_Query( 
                array(
                'post_type' => 'agenda', 
                'posts_per_page' => 1000, 
                'meta_query' => array(
                    array( 
                      'key' => 'agenda_show_date',
                      'value' => '',
                      'compare' => '='
                    )
                  )
                )
              ); ?>
            <?php $count = 1; ?>
            <?php while ( $wp_query2->have_posts() ) : $wp_query2->the_post(); ?>
            <div class="text">
              <?php if (get_post_meta( $post->ID, 'agenda_show_date', true ) != '') : ?>
                <h2><?php _e(date('d', get_post_meta( $post->ID, 'agenda_show_date', true ))); ?> <?php _e(strftime('%b', get_post_meta( $post->ID, 'agenda_show_date', true ))); ?> | <?php echo ucfirst(__(date('l', get_post_meta( $post->ID, 'agenda_show_date', true )))); ?></h2>
              <?php else : ?>

              <?php endif; ?>
              <?php the_post_thumbnail('170xX'); ?>
              <h4><?php the_title(); ?></h4>
              <div class="time"><?php _e(nl2br(get_post_meta( $post->ID, 'agenda_hour', true ))); ?></div>
              <br />
              <div class="place"><?php _e(get_post_meta( $post->ID, 'agenda_location', true )); ?></div>
              <?php if (trim(get_the_content())!='') : ?>
                <br /><br />
                <div><a href="<?php the_permalink(); ?>">Mais detalhes</a></div>
              <?php endif; ?>
            </div>
            <?php $count++; endwhile;?>
        <?php endif; ?>
        <?php the_content_nav();wp_reset_query();?>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>