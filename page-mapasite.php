<?php
/*
Template Name: Mapa do Site
*/
?>

<?php get_header(); 
?>
<div id="library">
    <div class="wrapper">
        <div class="inner">
        <?php wp_nav_menu( array( 
                'theme_location' => 'header-menu-primary',
                ) 
         ); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
