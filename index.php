<?php get_header(); ?>
<div class="wrapper" id="wrapper-second-home">
    <div id="banner-slide">
        <ul class="bjqs">
            <?php $slide_query = new WP_Query( array('post_type' => 'slider', 'posts_per_page' => 7, 'orderby'=>'menu_order', 'order' => 'ASC')); ?>
                <?php $count = 1; ?>
                <?php while ( $slide_query->have_posts() ) : $slide_query->the_post(); ?>
                    <li class="bjqs-slide bjqs-slide-<?php echo $count; ?>" id="slide-first">
                        <div class="image">
                          <?php $image = get_field('big_image'); ?>
                            <a href="<?php echo get_field('link_chamada_1'); ?>">
                                <img src="<?php echo $image['sizes']['large'/*'510xX'*/] ?>" />
                            </a>
                        </div>
                        <?php
                            $classeCssSlide = "";
                            $classeCssSlide = cor_barra_conforme_projeto_slider( get_field('projeto') );
                        ?>
                        <div class="text <?php echo $classeCssSlide; ?>">
                                <a href="<?php echo get_field('link_chamada_1');//the_field('link'); ?>"><h2><?php the_title(); ?></h2></a>
                                <!--<p><?php //the_content(); ?></p>-->
                        </div>
                    </li>
                <?php $count++; endwhile;wp_reset_query();?>
        </ul>
    </div>
</div>
<div class="wrapper" id="wrapper-third-home">
    <div class="titulo-secao">
        <h3 class="section-title">Notícias</h3> 
    <!-- <img id="logo_noticias" src="<?php //echo bloginfo('template_url'); ?>/images/noticias.png" /> -->
    <!--        <div id="newsletter">
                <div class="label">
                        Cadastre seu email e<br />receba nossas notícias
                </div>
                <div id="register-newsletter-box">
                        <form id="register-newsletter" class="ajax_submit_form" action="<?php// echo plugins_url( 'newsletter/do/subscribe.php' ); ?>" method="post">
                            <input type="text" class="defaultText" name="ne" id="register-newsletter-input" /><input type="submit" value="OK" />
                        </form>
                </div>
                <div class="clear"></div>
            </div>-->
    </div>
    <?php $news_query = new WP_Query( array('post_type' => 'noticias', 'posts_per_page' => 4)); ?>
    <?php $count = 1; ?>
    <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
    <?php if ($count == 1): ?>
    <div class="top-news table left">
        <a href="<?php the_permalink(); ?>">
            <div class="row">
                <?php if (get_the_post_thumbnail()): ?>
                <div class="image cell">
                    <?php  the_post_thumbnail('470x270');//the_post_thumbnail('365x195'); ?>
                </div>
                <?php endif; ?>
                <div class="news cell">
                        <div class="row">
                            <p class="news-date"><?php the_time('d/m/Y'); ?></p>
                        </div>
                        <div class="row">
                            <p class="news-title"><?php the_title(); ?></p>
                        </div>
                        <div class="row">
                            <p class="news-text"><?php echo get_the_excerpt(); ?></p>
                        </div>
                </div>
            </div>
        </a>
    </div>
    <?php else : ?>
    <?php if ($count == 2): ?>
    <div class="top-news table">
        <a href="<?php the_permalink(); ?>">
            <div class="row">
                <?php if (get_the_post_thumbnail()): ?>
                <div class="image cell">
                    <?php  the_post_thumbnail('470x270');//the_post_thumbnail('365x195'); ?>
                </div>
                <?php endif; ?>
                <div class="news cell">
                        <div class="row">
                            <p class="news-date"><?php the_time('d/m/Y'); ?></p>
                        </div>
                        <div class="row">
                            <p class="news-title"><?php the_title(); ?></p>
                        </div>
                        <div class="row">
                            <p class="news-text"><?php echo get_the_excerpt(); ?></p>
                        </div>
                </div>
            </div>
        </a>
    </div>
    <?php endif; ?>
    <?php if ($count == 3): ?>
        <div class="bottom-news left">
        <a href="<?php the_permalink(); ?>">
            <div class="row">
                <div class="news cell first">
                        <div class="row">
                            <p class="news-date"><?php the_time('d/m/Y'); ?></p>
                        </div>
                        <div class="row">
                            <p class="news-title"><?php the_title(); ?></p>
                        </div>
                        <div class="row">
                            <p class="news-text"><?php echo get_the_excerpt(); ?></p>
                        </div>
               </div>
           </div>
        </a>
        </div>
    <?php endif; ?>
    <?php if ($count == 4): ?>
        <div class="bottom-news">
        <a href="<?php the_permalink(); ?>">
            <div class="row">
                <div class="news cell">
                        <div class="row">
                            <p class="news-date"><?php the_time('d/m/Y'); ?></p>
                        </div>
                        <div class="row">
                            <p class="news-title"><?php the_title(); ?></p>
                        </div>
                        <div class="row">
                            <p class="news-text"><?php echo get_the_excerpt(); ?></p>
                        </div>
               </div>
           </div>
        </a>
    </div>
    <?php endif; ?>
    <?php endif; ?>
    <?php $count++; endwhile;?>
        <div class="wrapper clear">
            <a href="<?php echo get_bloginfo( 'url' ); ?>/noticia">
                <div id="see-all-news">
                    <h3 class="section-title-see-all">+ Notícias</h3>
                </div>
            </a>
        </div>

        <div class="wrapper" id="wrapper-fourth-home">
            <div class="titulo-secao">
                <h3 class="section-title">Destaques</h3> 
            </div>
                <?php
                    $args = array(
                        'theme_location' => 'home_destaques', 
                        'menu_id' => 'home-destaques', 
                    );
                ?>
                <?php wp_nav_menu( $args )?>
        </div>

        <div class="wrapper clear" id="wrapper-fifth-home">
            <div class="titulo-secao">
                <h3 class="section-title">Vídeos</h3> 
            </div>
            <div class="wrapper clear">
                <a href="<?php echo get_bloginfo( 'url' ); ?>/videos">
                    <div id="see-all-news">
                        <h3 class="section-title-see-all">+ Vídeos</h3>

                        <!-- dois videos -->
                        <?php
                        $child_pages = new WP_Query( array(
                            'post_type'      => 'page', // set the post type to page
                            'posts_per_page' => 2, // number of posts (pages) to show
                            'post_parent'    => 26481, // enter the post ID of the parent page
                            'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
                        ) );
                        if ( $child_pages->have_posts() ) : 
                            while ( $child_pages->have_posts() ) : $child_pages->the_post();?>
                            <a href="<?php the_permalink(); ?>">
                                <h2><?php the_title();?> </h2>
                                <?php if (get_the_post_thumbnail()): ?>
                                <div class="image cell">
                                    <?php  the_post_thumbnail('470x270');//the_post_thumbnail('365x195'); ?>
                                </div>
                                <?php endif; ?>
                            </a>
                            <?php endwhile; 
                        endif;  
                        wp_reset_postdata();
                        ?>
                    </div>
                </a>
            </div>
        </div>
        <div class="wrapper clear"></div>

    </div>
<?php get_footer(); ?>
