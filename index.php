<?php get_header(); ?>
<div class="wrapper" id="wrapper-second-home">
    <div id="banner-slide">
        <ul class="bjqs">
            <?php $slide_query = new WP_Query( array(
                'post_type' => 'slider', 
                'posts_per_page' => 7, 
                'orderby'=>'menu_order', 
                'order' => 'ASC')); ?>

                <?php $count = 1; ?>
                <?php while ( $slide_query->have_posts() ) : $slide_query->the_post(); ?>
                    <li class="bjqs-slide bjqs-slide-<?php echo $count; ?>" id="slide-first">
                        <div class="image">
                          <?php $image = get_field('big_image'); ?>
                            <a href="<?php echo get_field('link_chamada_1'); ?>">
                                <img src="<?php echo $image['sizes']['large'] ?>" />
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
        <div id="newsletter">
<!--             <div id="register-newsletter-box">
                    <form id="register-newsletter" class="ajax_submit_form" action="<?php // echo plugins_url( 'newsletter/do/subscribe.php' ); ?>" method="post">
                        <input type="text" class="defaultText" name="ne" id="register-newsletter-input" /><input type="submit" value="OK" />
                    </form>
            </div>
            <div class="clear"></div>
 -->     
            <!-- https://shibulijack.wordpress.com/2012/03/18/create-custom-forms-in-wordpress/ -->
<!--             <form action="<?php echo get_template_directory_uri(); ?>/cadastro.php" method="post" name="myForm">
                <div class="label">
                        Cadastre seu email e<br />receba nossas notícias 
                </div>
                <input id="email" type="text" name="email" />
                <input type="submit" value="Cadastre" />
            </form> -->
        </div>
    </div>

    <?php $news_query = new WP_Query( 
        array(
            'post_type' => 'noticias', 
            'posts_per_page' => 4,
            'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
        )
    );?>
    <?php $count = 1; ?>
    <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
    <?php if ($count == 1): ?>
    <div class="top-news table left">
        <a href="<?php the_permalink(); ?>">
            <div class="row">
                <?php if (get_the_post_thumbnail()): ?>
                <div class="image cell">
                    <?php  the_post_thumbnail('470x267');?>
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
                    <?php  the_post_thumbnail('470x267');?>
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
            <div id="section-agenda">
                <div class="titulo-secao">
                    <h3 class="section-title">Agenda</h3> 
                </div>
                    <?php
                    $child_pages = new WP_Query( array(
                        'post_type'      => 'agenda', 
                        'meta_query' => array(
                          array( 
                            'key' => 'agenda_show_date',
                            'value' => time(),
                            'compare' => '>=')
                          ),
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'meta_key' => 'agenda_show_date',
                        'posts_per_page' => 3,
                        'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
                    ) );
                    ?>
                    <?php if  ( $child_pages->have_posts() ) : ?>
                        <ul id="agenda">
                            <?php while ( $child_pages->have_posts() ) : $child_pages->the_post();?>
                            <li class="agenda-home"> 
                                <a href="<?php the_permalink(); ?>">
                                    <p class="news-text clear">
                                        <?php 
                                        _e(date
                                            ('d', 
                                                get_post_meta( 
                                                    $post->ID, 'agenda_show_date', true 
                                                )
                                            )
                                        ); ?> <?php 
                                        _e(
                                            strftime(
                                                '%b', 
                                                get_post_meta( $post->ID, 'agenda_show_date', true )
                                            )
                                        ); 
                                        ?> | <?php 
                                        echo ucfirst(__(date('l', 
                                            get_post_meta( 
                                                $post->ID, 
                                                'agenda_show_date', true 
                                            )))
                                        ); ?> | <?php _e(nl2br(get_post_meta( $post->ID, 'agenda_hour', true ))); ?>
                                    </br><span class="agenda-title"><?php the_title();?></span>
                                    </br><?php _e(get_post_meta( $post->ID, 'agenda_location', true )); ?>
                                    </p>
                                </a>
                            </li>
                            <?php endwhile; ?> 
                        </ul>
                    <?php endif; ?>
                    <?php wp_reset_postdata();
                    ?>
                <div class="wrapper clear">
                    <a href="<?php echo get_bloginfo( 'url' ); ?>/evento">
                        <div id="see-all-news">
                            <h3 class="section-title-see-all">+ Agenda Completa</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div id="section-videos">
                <div class="titulo-secao">
                    <h3 class="section-title">Vídeos</h3> 
                </div>
                    <?php
                    $child_pages = new WP_Query( array(
                        'post_type'      => 'page', // set the post type to page
                        'posts_per_page' => 2, // number of posts (pages) to show
                        'post_parent'    => 26481, // post ID of 'videos' change this in production = 26426
                        'no_found_rows'  => true // no pagination necessary so improve efficiency of loop
                    ) );
                    ?>
                    <?php if  ( $child_pages->have_posts() ) : ?>
                        <ul id="videos">
                            <?php while ( $child_pages->have_posts() ) : $child_pages->the_post();?>
                            <li class="video-home"> 
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (get_the_post_thumbnail()): ?>
                                    <div class="image cell">
                                        <?php  the_post_thumbnail('233x132');?>
                                        <div class="video-play"></div>
                                    </div>
                                    <p class="news-text clear"><?php the_title();?></p>
                                    <?php endif; ?>
                                </a>
                            </li>
                            <?php endwhile; ?> 
                        </ul>
                    <?php endif; ?>                
                    <?php wp_reset_postdata();
                    ?>
                <div class="wrapper clear">
                    <a href="<?php echo get_bloginfo( 'url' ); ?>/videos">
                        <div id="see-all-news">
                            <h3 class="section-title-see-all">+ Vídeos</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="wrapper clear"></div>
    </div>
<?php get_footer(); ?>
