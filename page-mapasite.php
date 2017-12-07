<?php
/*
Template Name: Mapa do Site
*/
?>

<?php get_header(); 
/* select para obter o id dos itens de nav menus:
 * 
 * select * from wp_posts where post_type = 'nav_menu_item'
 * 
 *  */

?>
<div id="library">
    <div class="wrapper">
        <div class="inner">
            <div id="lista-artigos">
                <div class="left" style="width: 100%;">
                    <div class="left">
                        <br/>
                        <h3>Mapa do Site</h3>
                        <br/>
                    </div>
                    
                    <div class="right">

                    </div>
                </div>
                
                <div class="filtros2">
                    <div>
                        <p>
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                        </p>
                    </div>
                    
                    <div>
                        <p>
                            <?php
                                $menu_object = wp_get_nav_menu_items( 110 );
                                
                                foreach ( $menu_object as $menu_ )
                                {
                                    //print_r( $menu_->ID ) ;
                            ?>
                                <ul>
                                    <li class="menu-menu-interno-plano-diretor-container">
                                        <?php
                                            if ($menu_->ID == 22869)
                                            {
                                                ?>
                                                    <a href="<?php echo $menu_->url; ?>"><?php echo $menu_->title; ?></a>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                    <ul>
                                                        <li>
                                                            <a href="<?php echo $menu_->url; ?>"><?php echo $menu_->title; ?></a>
                                                        </li>
                                                    </ul>
                                                <?php
                                            }
                                        ?>
                                        <?php
                                            if ($menu_->ID == 1367)
                                            {

                                            }
                                            else
                                            {
                                                ?>
                                                    <ul>
                                                        <li>
                                                            <?php
                                                                if ($menu_->ID == 22909)
                                                                {
                                                                    wp_nav_menu( array( 'theme_location' => 'menu-interno-plano-diretor' ) );
                                                                }
                                                                if ($menu_->ID == 22911)
                                                                {
                                                                    wp_nav_menu( array( 'theme_location' => 'menu-interno-parcelamento-ocupacao-solo' ) );
                                                                }
                                                                if ($menu_->ID == 20651)
                                                                {
                                                                    wp_nav_menu( array( 'theme_location' => 'menu-interno-planos-regionais-' ) );
                                                                }
                                                                if ($menu_->ID == 21863)
                                                                {
                                                                    wp_nav_menu( array( 'theme_location' => 'menu-interno-conferencias-' ) );
                                                                }
                                                                
                                                            ?>
                                                        </li>
                                                    </ul>
                                                <?php
                                            }
                                        ?>
                                    </li>
                                </ul>
                            <?php
                                }
                            ?>

                            <?php
                                $menu_object = wp_get_nav_menu_items( 113 );
                                //print_r( $menu_object ) ;
                                foreach ( $menu_object as $menu_ )
                                {
                                    //print_r( $menu_->ID ) ;
                            ?>
                                <ul>
                                    <li class="menu-menu-interno-arco-tiete-container">
                                        <?php
                                            if ($menu_->ID == 22946)
                                            {
                                                ?>
                                                    <a href="<?php echo $menu_->url; ?>"><?php echo $menu_->title; ?></a>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                    <ul>
                                                        <li>
                                                            <a href="<?php echo $menu_->url; ?>"><?php echo $menu_->title; ?></a>
                                                        </li>
                                                        <ul>
                                                            <li>
                                                                <?php wp_nav_menu( array( 'theme_location' => 'menu-interno-agua-branca-' ) ); ?>
                                                            </li>
                                                        </ul>
                                                    </ul>
                                                <?php
                                            }
                                        ?>
                                        <?php
                                            if ($menu_->ID == 1380)
                                            {

                                            }
                                            else
                                            {
                                        ?>
                                                <ul>
                                                    <li>
                                                        <?php
                                                            if ($menu_->ID == 1375)
                                                            {
                                                                wp_nav_menu( array( 'theme_location' => 'menu-interno-arco-tiete-' ) );
                                                            }
                                                            if ($menu_->ID == 9719)
                                                            {
                                                                wp_nav_menu( array( 'theme_location' => 'menu-interno-arco-tamanduatei-' ) );
                                                            }
                                                        ?>
                                                    </li>
                                                </ul>
                                        <?php
                                            }
                                        ?>
                                    </li>
                                </ul>
                            <?php
                                }
                            ?>
							
                            <?php
                                $menu_object = wp_get_nav_menu_items( 121 );
                                //print_r( $menu_object ) ;
                                foreach ( $menu_object as $menu_ )
                                {
                                    //print_r( $menu_->ID ) ;
                            ?>
                                <ul>
                                    <li class="menu-menu-interno-projeto-especiais-container">
                                        <?php
                                            if ($menu_->ID == 22948)
                                            {
                                                ?>
                                                    <a href="<?php echo $menu_->url; ?>"><?php echo $menu_->title; ?></a>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                    <ul>
                                                        <li>
                                                            <a href="<?php echo $menu_->url; ?>"><?php echo $menu_->title; ?></a>
                                                            <?php
                                                            if ($menu_->ID == 22949)
                                                            {
                                                                wp_nav_menu( array( 'theme_location' => 'menu-interno-eixos-transformacao-' ) );
                                                            }
                                                            if ($menu_->ID == 21349)
                                                            {
                                                                wp_nav_menu( array( 'theme_location' => 'menu-interno-piu-' ) );
                                                            }
                                                              if ($menu_->ID == 20443)
                                                            {
                                                                wp_nav_menu( array( 'theme_location' => 'menu-interno-santo-amaro-' ) );
                                                            }

                                                        ?>
                                                        </li>
                                                    </ul>
                                                <?php
                                            }
                                        ?>

                                    </li>
                                </ul>
                            <?php
                                }
                            ?>

                            <?php
                                $menu_object = wp_get_nav_menu_items( 120 );
                                //print_r( $menu_object ) ;
                                foreach ( $menu_object as $menu_ )
                                {
                                   //print_r( $menu_->ID ) ;
                            ?>
                                <ul>
                                    <li class="menu-menu-interno-ceu-container">
                                        <?php
                                            if ($menu_->ID == 22744)
                                            {
                                        ?>
                                                <a href="<?php echo $menu_->url; ?>"><?php echo $menu_->title; ?></a>
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                                <ul>
                                                    <li>
                                                        <?php
                                                            if ($menu_->ID == 3445)
                                                            {
                                                                ?>
                                                                    <a href="<?php echo $menu_->url; ?>"><?php echo $menu_->title; ?></a>
                                                                <?php
                                                                    wp_nav_menu( array( 'theme_location' => 'menu-interno-ceu-' ) );
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                    <a href="<?php echo $menu_->url; ?>"><?php echo $menu_->title; ?></a>
                                                            <?php
                                                                            
                                                                            if($menu_->ID == 22950 )
                                                                            {
                                                                                    wp_nav_menu( array( 'theme_location' => 'menu-interno-ceu-' ) );
                                                                            }
                                                                            if($menu_->ID == 19338 )
                                                                            {
                                                                                    wp_nav_menu( array( 'theme_location' => 'menu-interno-wifi-' ) );
                                                                            }
                                                            }
                                                            ?>
                                                    </li>
                                                </ul>
                                        <?php
                                            }
                                        ?>
                                    </li>
                                </ul>
                            <?php
                                }
                            ?>

                            <?php
                                $menu_object = wp_get_nav_menu_items( 143 );
                                //print_r( $menu_object ) ;
                                foreach ( $menu_object as $menu_ )
                                {
                                    //print_r( $menu_->ID ) ;
                            ?>
                                <ul>
                                    <li class="menu-menu-interno-centro-aberto-container">
                                        <?php
                                            if ($menu_->ID == 20429)
                                            {
                                                ?>
                                                    <a href="<?php echo $menu_->url; ?>"><?php echo $menu_->title; ?></a>
                                                <?php
                                            }
                                            else
                                            {
                                        ?>
                                                <ul>
                                                    <li>
                                                        <?php
                                                            if ($menu_->ID == 7478)
                                                            {
                                                                ?>
                                                                    <a href="<?php echo $menu_->url; ?>"><?php echo $menu_->title; ?></a>
                                                                <?php
                                                                    wp_nav_menu( array( 'theme_location' => 'menu-interno-centro-aberto-' ) );
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                    <a href="<?php echo $menu_->url; ?>"><?php echo $menu_->title; ?></a>
                                                        <?php
                                                                if($menu_->ID == 22951)
                                                                {
                                                                        wp_nav_menu( array( 'theme_location' => 'menu-interno-centro-aberto-' ) );
                                                                }
                                                                if($menu_->ID == 18456)
                                                                {
                                                                        wp_nav_menu( array( 'theme_location' => 'menu-interno-anhangabau-' ) );
                                                                }
                                                                if($menu_->ID == 15765)
                                                                {
                                                                        wp_nav_menu( array( 'theme_location' => 'menu-interno-calcadao-' ) );
                                                                }
                                                                if($menu_->ID == 22954)
                                                                {
                                                                        wp_nav_menu( array( 'theme_location' => 'menu-interno-parklets-' ) );
                                                                }
                                                            }
                                                        ?>
                                                    </li>
                                                </ul>
                                        <?php
                                            }
                                        ?>
                                    </li>
                                </ul>
                            <?php
                                }
                            ?>
                            <?php
                                $menu_object = wp_get_nav_menu_items( 390 );
                                //print_r( $menu_object ) ;
                                foreach ( $menu_object as $menu_ )
                                {
                                    //print_r( $menu_->ID ) ;
                            ?>
                                <ul>
                                    <li class="menu-menu-interno-bordas-da-cidade">
                                        <?php
                                            if ($menu_->ID == 22553)
                                            {
                                                ?>
                                                    <a href="<?php echo $menu_->url; ?>"><?php echo $menu_->title; ?></a>
                                                <?php
                                            }
                                            else
                                            {
                                        ?>
                                                <ul>
                                                    <li>
                                                        <?php
                                                            if ($menu_->ID == 22554)
                                                            {
                                                                ?>
                                                                    <a href="<?php echo $menu_->url; ?>"><?php echo $menu_->title; ?></a>
                                                                <?php
                                                                   //  wp_nav_menu( array( 'theme_location' => 'menu-Jupiter' ) );
                                                            }
                                                        ?>
                                                    </li>
                                                </ul>
                                        <?php
                                            }
                                        ?>
                                    </li>
                                </ul>
                            <?php
                                }
                            ?>
                        
                    </div>
                    
                    <div>
                        <p>
                            <?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
                        </p>
                    </div>
                </div>
                <div class="clear"></div>

                <ul id="display" class="list boxes">
                </ul>
            </div>
            
            <script type="text/javascript">
                jQuery(document).ready(function ()
                {
                    jQuery('.menu-menu-principal-container').removeClass('menu-menu-principal-container');
                    
                    jQuery('#menu-menu-principal-1 a').css({
                            color: 'black'
                        });
                    
                    jQuery('#menu-footer a').css({
                            color: 'black'
                        });
                        
                });
                
            </script>

            <?php the_content_nav(); ?>

            <div class="clear"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
