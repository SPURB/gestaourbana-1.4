<?php
/*
 * Template Name: Ligue os pontos
 */
?>

<?php get_header(); ?>
<div class="wrapper">
     <h3 class="section-title"><?php echo the_title(); ?></h3>
    <!-- slider -->
    <?php  
        echo do_shortcode("[metaslider id=27063]"); //local
        // echo do_shortcode("[metaslider id=27484]"); //producao
    ?>  
</div>

<div class="wrapper" id="wrapper-third-home">
    <div class="titulo-secao">
        <h3 class="section-title">Notícias</h3> 
        <div id="newsletter">
        </div>
    </div>

    <?php $news_query = new WP_Query( 
        array(
            'post_type' => 'noticias', 
            'tag' => 'ligue-os-pontos', 
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

        <div id="wrapper-fifth-home">
            <div id="section-agenda">
                <div class="titulo-secao">
                    <h3 class="section-title">Agenda</h3> 
                </div>
                <ul id="agenda">
                	<!--<li class="agenda-home">
                		<a href="#">
                			<div class="news-text clear">
                				<p>10 mai | Quinta-feira | 20h</p>
                				<p class="agenda-titulo">Título do evento</p>
                				<p>Rua São Bento, 405</p>
                			</div>
                		</a>
                	</li>-->
                </ul>
<!--
                <?php
                    $child_pages = new WP_Query( array(
                        'post_type' => 'agenda', 
                        'meta_query' => array(
                          array( 
                            'key' => 'agenda_show_date',
                            'category_name' => 'ligue-os-pontos',
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
-->
                <div class="wrapper clear">
                    <a href="<?php echo get_bloginfo( 'url' ); ?>/evento">
                        <div id="see-all-news">
                            <h3 class="section-title-see-all">+ Agenda Completa</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div id="section-destaques">
                <div class="titulo-secao">
                    <h3 class="section-title">Destaques</h3> 
                </div>
                <ul id="destaques">
                    <!-- <li class="destaques-ligue-os-pontos"> 
                        <a href="http://placehold.it/470x267">
                        	<img class="imagem-destaque" src="http://placehold.it/233x132">
                            <p>Título destaque com imagem</p>
                            <span>Descrição descrição descrição descrição descrição</span>
                        </a>
                    </li>
                    <li class="destaques-ligue-os-pontos"> 
                        <a href="http://placehold.it/470x267">
                            <p>Título destaque sem imagem</p>
                            <span>Descrição descrição descrição descrição descrição</span>
                        </a>
                    </li> -->
                    <li class="destaques-ligue-os-pontos">
                    	<a href="<?php echo get_bloginfo( 'url' ); ?>/videos/ligue-os-pontos-connect-the-dots/"  target="_blank">
                            <img src="<?php echo get_template_directory_uri() . '/images/ligue-os-pontos_video-youtube.jpg'?>" alt="Conheça o projeto Ligue os Pontos da Prefeitura de São Paulo">
                            <div class="video-play"></div>
                        </a>
                        <p>Conheça o projeto Ligue os Pontos da Prefeitura de São Paulo</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="wrapper clear"></div>
    </div>
<?php get_footer(); ?>