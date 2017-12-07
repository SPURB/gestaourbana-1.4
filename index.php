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
    <div id="titulo_noticias">
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
    <?php $news_query = new WP_Query( array('post_type' => 'noticias', 'posts_per_page' => 3)); ?>
    <?php $count = 1; ?>
    <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
    <?php if ($count == 1): ?>
    <div class="top-news table">
            <div class="row">
            <?php if (get_the_post_thumbnail()): ?>
            <div class="image cell">
                <?php  the_post_thumbnail('full');//the_post_thumbnail('365x195'); ?>
            </div>
            <?php endif; ?>
        <div class="news cell">
                    <div class="row">
                        <div class="cell">
                        </div>
                        <div class="cell">
                            <a href="<?php the_permalink(); ?>">
                                <p class="news-date"><?php the_time('d/m/Y'); ?></p>
                            </a>
                        </div>
                    </div>
                        <div class="row">
                            <?php
                                $classeCss = "";
                                $classeCss = cor_barra_conforme_projeto( get_the_ID() );
                            ?>
                            <div class="cell news<?php echo $classeCss; ?>">
                            </div>
                            <div class="cell">
                                <a href="<?php the_permalink(); ?>">
                                    <p class="news-title"><?php the_title(); ?></p>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="cell"></div>
                            <div class="cell">
                                <p class="news-text"><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </div>
                </div>
            </div>
        <div class="clear"></div>
    </div>
    <?php else : ?>
    <?php if ($count == 2): ?>
        <div class="bottom-news table">
            <div class="news cell first">
                        <div class="row">
                            <div class="cell">
                            </div>
                            <div class="cell">
                                <a href="<?php the_permalink(); ?>">
                                    <p class="news-date"><?php the_time('d/m/Y'); ?></p>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                                $classeCss = "";
                                $classeCss = cor_barra_conforme_projeto( get_the_ID() );
                            ?>
                            <div class="cell news<?php echo $classeCss; ?>">
                            </div>
                            <div class="cell">
                                <a href="<?php the_permalink(); ?>">
                                    <p class="news-title"><?php the_title(); ?></p>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="cell">
                            </div>
                            <div class="cell">
                            <p class="news-text"><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </div>
                </div>
        <?php endif; ?>
            <?php if ($count == 3): ?>
                    <div class="news cell last">
                        <div class="row">
                            <div class="cell">
                            </div>
                            <div class="cell">
                                <a href="<?php the_permalink(); ?>">
                                    <p class="news-date"><?php the_time('d/m/Y'); ?></p>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                                $classeCss = "";
                                $classeCss = cor_barra_conforme_projeto( get_the_ID() );
                            ?>
                            <div class="cell news<?php echo $classeCss; ?>">
                            </div>
                            <div class="cell">
                                <a href="<?php the_permalink(); ?>">
                                    <p class="news-title"><?php the_title(); ?></p>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="cell"></div>
                            <div class="cell">
                                <p class="news-text"><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php $count++; endwhile;?>
        </div>

        <div class="wrapper clear">
            <a href="<?php echo get_bloginfo( 'url' ); ?>/noticia">
                <div id="see-all-news">
                    <h3 class="section-title">+ Notícias</h3>
                </div>
            </a>
        </div>
    </div>
        <div id="wrapper-projetos" class="wrapper">
            <h3 class="section-title">Projetos</h3> 
            <?php 
                $args = array(
                        'menu' => 'Menu Primário do Header',
                        'depth' => 2,
                        'menu_id' => 'indice_projetos',
                        'container_class' => 'wrapper',
                        'menu_class' => 'menu_index'
                    )
            ?>
            <?php wp_nav_menu($args);?>
        </div>
        <div class="clear"></div>
</div>

<?php get_footer(); ?>
