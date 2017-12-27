<?php get_header(); ?>
<div class="wrapper">
      <ul id="video-list">
        <?php
        // if we are on a parent page set the $parent variable to current post id
        // otherwise set $parent variable to current post parent
        $parent = $post->post_parent == 0 ? $post->ID : $post->post_parent;

        // if we use current post parent as $paren, exclude the current page
        $exclude = $parent == $post->post_parent ? $post->ID : false;

        // get all the children
        $args = array( 
          'parent' => $parent,
          'sort_column' => 'menu_order'
       );
        if ( $exclude ) $args['exclude'] = $exclude;
        $child_pages = get_pages($args);

        // show only if there are children
        if ( ! empty($child_pages) ) {
          global $post;

          foreach ( $child_pages as $post ) { setup_postdata( $post );
            $count_list_item++;
          ?>
            <li class="video-container">
              <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail('233x132'); ?>
                <div class="video-play"></div>
                <p><?php the_title(); ?></p>
              </a>
            </li>
          <?php
          }
          wp_reset_postdata();
        }
        ?>
      </ul>
    </div>
  <div class="clear"></div>
</div>
<?php get_footer(); ?>


