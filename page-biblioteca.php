<?php
/*
Template Name: Biblioteca
*/
?>

<?php get_header(); ?>
<div id="library">
    <div class="wrapper">
        <div class="inner">
            <div id="lista-artigos">
                <div class="left" style="width: 100%;">
                    <div class="left">
                        <h1>Biblioteca</h1>
                    </div>
                    
                    <div class="right">
                        <a id="arquivo-biblioteca" class="btn" href="mailto:imprensadu@prefeitura.sp.gov.br?subject=Gestão Urbana SP - Biblioteca: Documento enviado para análise">Envie seu arquivo</a>

                        <div class="input text">
                            <form method="get" id="searchform" class="searchform" >
                                <div>
                                    <label for="search">Busca: </label>
                                    <input type="text" id="search-text" class="search" />
                                </div>
                            </form>
                        </div>

                        <div class="input radio">
                            <label>Visualização:</label>
                            <input type="radio" value="grid" checked="checked" name="view-type" /><label for="view-type"> Grid</label>
                            <input type="radio" value="list" name="view-type" /><label for="view-type"> Lista</label>
                        </div>
                    </div>
                </div>

                <div class="left filtros">
                    <label><strong>Filtros:</strong></label>
                </div>
                <div class="filtros1">
                    <div class="row">
                        <div class="cell" style="width: 20%; vertical-align: top;">
                            <div class="nav-bar" style="margin-left: 25px; margin-top: 10px;">
                                
                            </div>
                        </div>
                        <div class="cell" style="width: 30%;">
                            <div class="nav-bar">
                                <ul>
                                    <li class="itemfiltro"><strong>Projeto</strong></li>
                                    <!--<li>
                                            <a href="/index.php/biblioteca">
                                                    <img src="<?php //echo bloginfo('template_url'); ?>/images/icon-library-navbar-all.png" />
                                            </a>
                                    </li>-->
                                    <?php
                                        $termsProjetos = get_terms("projetos",  array("parent" => 0));
                                        foreach ($termsProjetos as $termProjeto) :
                                    ?>
                                    <li class="parent">
                                        <input type="checkbox" id="<?php echo $termProjeto->slug; ?>" name="<?php echo $termProjeto->slug; ?>" value="<?php echo $termProjeto->term_id; ?>" class="checkbox-projetos"><?php echo $termProjeto->name; ?>

                                        <?php
                                            $termsProjetos1 = get_terms("projetos",  array("parent" => $termProjeto->term_id));
                                            if ($termsProjetos1) :
                                        ?>
                                        <ul>
                                            <?php
                                                foreach ($termsProjetos1 as $termProjeto1) :
                                            ?>
                                            <li class="sub">
                                                <input type="checkbox" id="<?php echo $termProjeto1->slug; ?>" name="<?php echo $termProjeto1->slug; ?>" value="<?php echo $termProjeto1->term_id; ?>" class="checkbox-projetos"><?php echo $termProjeto1->name; ?>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                            <?php endif; ?>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="cell" style="width: 30%; vertical-align: top;">
                            <div class="nav-bar">
                                
                                <ul>
                                    <li class="itemfiltro"><strong>Categoria</strong></li>
                                    <?php
                                        $terms = get_terms("librarycategory");
                                        foreach ($terms as $term) :
                                    ?>
                                    <li>
                                        <input type="checkbox" id="<?php echo $term->slug; ?>" name="<?php echo $term->slug; ?>" value="<?php echo $term->term_id; ?>" class="checkbox-categorias"><?php echo $term->name; ?>
                                            <!--<a href="<?php //echo get_term_link($term->slug, 'librarycategory'); ?>">
                                                    <img src="<?php //echo bloginfo('template_url'); ?>/images/library/<?php //echo $term->slug; ?>_big.png" />
                                            </a>-->
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="cell" style="width: 20%; vertical-align: top;">
                            
                        </div>
                    </div>
                </div>
                <div class="clear"></div>

                <!--<ul class="list boxes">
                <?php /*$paged = get_query_var('paged') ? get_query_var('paged') : 1; ?>
                <?php
                print "paged:" . get_query_var('paged');
                $args = array('post_type' => 'biblioteca', 'paged' => $paged, 'posts_per_page' => 1000);
                if (isset($global_term)) :
                  $args['tax_query'] = array(
                                  array(
                                    //'taxonomy' => 'librarycategory',
                                    'field' => 'slug',
                                    'terms' => array('1-etapa', '2-etapa', 'documentos')//$global_term->slug
                                  )
                                );
                endif;
                $wp_query = new WP_Query( $args ); ?>
                <?php echo "ppp:" . $global_term->slug;//echo $wp_query->request; ?>
                <?php $count = 1; ?>
                <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                <li class="box">
                        <a href="<?php echo get_post_meta( $post->ID, 'library_link', true ); ?>" target="_blank">
                                <div class="inner-box">
                                  <?php $terms = get_the_terms($post->ID, 'librarycategory'); ?>
                                  <?php foreach ($terms as $term): ?>
                                        <img src="<?php echo bloginfo('template_url'); ?>/images/library/<?php echo $term->slug; ?>.png" class="normal" />
                                        <img src="<?php echo bloginfo('template_url'); ?>/images/library/<?php echo $term->slug; ?>-hover.png" class="hover" />
                                        <?php endforeach; ?>
                <span class="type" style="display:none;"><?php echo $term->slug; ?></span>
                                        <h5 class="name"><?php the_title(); ?></h5>
                                </div>
                        </a>
                </li>
                <?php $count++; endwhile;*/?>
                </ul>-->

                <ul id="display" class="list boxes">
                </ul>
            </div>

            <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/list.min.js?<?php echo time(); ?>"></script>
            <script type="text/javascript">
                jQuery(document).ready(function ()
                {
                    /*var options = {
                        valueNames: [ 'name', 'type' ]
                    };

                    var hackerList = new List('lista-artigos', options);*/


                    jQuery('input[name="view-type"]').on('click', function () {
                        if (this.value === 'list') {
                            jQuery('#lista-artigos').addClass('modo-lista');
                        }else {
                            jQuery('#lista-artigos').removeClass('modo-lista');
                        }
                    });

                    jQuery( "[type=checkbox]" ).change(function()
                    {
                        jQuery(this).siblings('ul').find("input[type='checkbox']").prop('checked', this.checked);

                        //alert (projetos);
                        buscaBiblioteca( checkProjetos(), checkCategorias(), jQuery( "#search-text" ).val() );
                    });

                    buscaBiblioteca('0', '0', '');

                });

                function buscaBiblioteca(projetos, categorias, texto)
                {
                    jQuery.ajax({
                        type: 'POST',
                        url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                        data: { action: 'biblioteca', projetos: projetos, categorias: categorias, texto: jQuery.trim(texto) },
                        success: function(html){
                            jQuery('#display').html(html).show();
                            //location.reload(true);
                        }
                    });
                }
                
                jQuery( "form" ).submit(function( event )
                {
                    event.preventDefault();
                    //alert(jQuery( "#search-text" ).val());
                    
                    jQuery('.checkbox-projetos:checked').each(function(){
                        jQuery(this).prop('checked', false);
                    });
                    jQuery('.checkbox-categorias:checked').each(function(){
                        jQuery(this).prop('checked', false);
                    });
                    
                    buscaBiblioteca( checkProjetos(), checkCategorias(), jQuery( "#search-text" ).val() );
                });

                function checkProjetos()
                {
                    var projetos = '0';
                    jQuery('.checkbox-projetos:checked').each(function(){
                        projetos += ';' + jQuery(this).val();
                    });
                    return projetos;
                }

                function checkCategorias()
                {
                    var categorias = '0';
                    jQuery('.checkbox-categorias:checked').each(function(){
                        categorias += ';' + jQuery(this).val();
                    });
                    return categorias;
                }
            </script>

            <?php the_content_nav(); ?>

            <div class="clear"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
