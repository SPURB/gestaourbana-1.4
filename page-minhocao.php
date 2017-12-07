<?php
/*
 * Template Name: Plataforma Apoio - Minhocao
 */
?>

<?php
    get_header();
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="news-inner">
    <div class="wrapper">
        <div class="left" style="width:100%;">
            <div class="inner floatComment">
                <div class="text">
                    <div class="inner-text">
                        <?php if (get_field('mostrar_menu') == "sim")
                            {
                        ?>
                            <div class="menu-do-projeto">
                                <?php mostrar_menu_interno( get_field('projeto') );?>
                            </div>
                        <?php 
                            }
                        ?>
                        
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
                
                <div style="display: table; height: 300px; background-color: #E6E6E6; border: 0px solid black; vertical-align: middle; width: 100%;">
                    <div style="display: table-row; vertical-align: middle; text-align: center;">
                        <div style="width: 35%; display: table-cell; vertical-align: middle;">
                            <img alt="" src=""/>
                        </div>
                        <div style="width: 30%; display: table-cell; vertical-align: middle;">
                            <a href="" target="_blank">
                                <img style="vertical-align: middle; margin: 0 auto;" />
                            </a>
                        </div>
                        <div style="width: 35%; display: table-cell; vertical-align: middle;">
                        </div>
                    </div>
                </div>
                
                <div style="margin: 5px;">
                    <p>
                        Ele tem 44 anos e uma existência que gera discórdia. Leva nome de ex-presidente, mas é mais conhecido pelo apelido: Minhocão.
                        <br/>
                        A via elevada que liga a Praça Roosevelt, no centro da cidade, ao largo Padre Péricles, em Perdizes, tem 3,4 km de extensão. Um espaço que, de acordo com o novo Plano Diretor Estratégico, deverá ser desativado como via de tráfego, demolido ou transformado parcial ou integralmente em parque.
                        <br/>
                        Para elaborar a lei específica que vai determinar o futuro do Elevado, a Prefeitura de São Paulo, por meio da Secretaria Municipal de Desenvolvimento Urbano (SMDU), quer ouvir você em mais um amplo processo participativo!
                        <br/>
                        O debate com a sociedade vai ser dividido em 4 etapas, que estão descritas abaixo. Nessa primeira, a ideia é saber quais são as propostas existentes e quais delas têm maior apoio. Por isso, a gente pergunta: O que você quer para o Minhocão? Participe!
                    </p>
                </div>
                        
                <br/>
                        
                <div style="width: 100%; float: left; text-align: center;">
                    <div style="width: 236px; float: left; text-align: center; padding: 10px 0px 30px 0px;">
                        <img alt="" src="/wp-content/uploads/2015/06/1a-etapa.png" width="220" height="250"/>
                    </div>
                    <div style="width: 236px; float: left; text-align: center; padding: 10px 0px 30px 0px;">
                        <img alt="" src="/wp-content/uploads/2015/06/2a-etapa.png" width="220" height="250"/>
                    </div>
                    <div style="width: 236px; float: left; text-align: center; padding: 10px 0px 30px 0px;">
                        <img alt="" src="/wp-content/uploads/2015/06/3a-etapa.png" width="220" height="250"/>
                    </div>
                    <div style="width: 236px; float: left; text-align: center; padding: 10px 0px 30px 0px;">
                        <img alt="" src="/wp-content/uploads/2015/06/4a-etapa.png" width="220" height="250"/>
                    </div>
                </div>
                
                <br/>
                <br/>
                
                <div class="filtro minhocao">
                    <div class="titulo">
                    <!--Ordernar por: -->
                    </div>
                    <!--<div>
                        <div class="itens">
                            <a href="">
                                <div style="
                                     background: #E6E6E6;
                                     width: 150px;
                                     height: 30px;
                                     line-height: 30px;
                                     text-align: center;
                                     vertical-align: middle;
                                        -webkit-border-radius: 5px 5px 5px 5px;
                                       -moz-border-radius: 5px 5px 5px 5px;
                                       -khtml-border-radius: 5px 5px 5px 5px;
                                       border-radius: 5px 5px 5px 5px;
                                       color: #333333;
                                       font-weight: bold;
                                     height: 30px;
                                     overflow: auto;
                                     margin: auto;
                                     position: absolute;
                                     top: 0; left: 0; bottom: 0; right: 0;
                                ">
                                    Apoios
                                </div>
                            </a>
                        </div>
                        <div class="itens">
                            <a href="">
                                <div style="
                                     background: #E6E6E6;
                                     width: 150px;
                                     height: 30px;
                                     line-height: 30px;
                                     text-align: center;
                                     vertical-align: middle;
                                        -webkit-border-radius: 5px 5px 5px 5px;
                                       -moz-border-radius: 5px 5px 5px 5px;
                                       -khtml-border-radius: 5px 5px 5px 5px;
                                       border-radius: 5px 5px 5px 5px;
                                       color: #333333;
                                       font-weight: bold;
                                     height: 30px;
                                     overflow: auto;
                                     margin: auto;
                                     position: absolute;
                                     top: 0; left: 0; bottom: 0; right: 0;
                                ">
                                    Data
                                </div>
                            </a>
                        </div>
                    </div>-->
                </div>
                
                <br/>
                <br/>
                
                <div id="display" class="displayMinhocao">
                    <?php
                        $results = minhocao_get("aprovados");
                        //print_r ($results);
                    ?>
                    <div class="result ">
                        <?php
                            foreach ($results as $row)
                            {
                        ?>
                                <div class="resultMinhocao">
                                    <div class="resultinternoMinhocao">
                                        <div class="resultinternoMinhocaoInterno" >
                                            <a href="#" class="popmake-16624 popmake-minhocao-proposta-detalhes-quando-clica"
                                               onclick="transferirValores
                                                                ( '<?php echo $row->minhocaoImagemProposta ?>'
                                                                , '<?php echo $row->plataformaApoioNumeroApoios ?>'
                                                                , '<?php echo $row->minhocaoTituloProposta ?>'
                                                                , '<?php echo $row->minhocaoDescricaoProposta ?>'
                                                                , '<?php echo $row->minhocaoDiretriz1 ?>'
                                                                , '<?php echo $row->minhocaoDiretriz2 ?>'
                                                                , '<?php echo $row->minhocaoDiretriz3 ?>'
                                                                , '<?php echo $row->minhocaoDiretriz4 ?>'
                                                                , '<?php echo $row->minhocaoDiretriz5 ?>'
                                                                , '<?php echo $row->minhocaoDiretriz6 ?>'
                                                                , '<?php echo $row->minhocaoDiretriz7 ?>'
                                                                , '<?php echo $row->minhocaoDiretriz8 ?>'
                                                                , '<?php echo $row->minhocaoDiretriz9 ?>'
                                                                , '<?php echo $row->minhocaoDiretriz10 ?>'
                                                                , '<?php echo $row->submit_time ?>'
                                                                );
                                            ">
                                                <div class="minhocaoImagem" style="
                                                        background: url(.<?php echo $row->minhocaoImagemProposta ?>) no-repeat;
                                                        background-color: #E6E6E6;
                                                        background-size: cover;
                                                        background-position: center center;
                                                        background-clip: content-box;
                                                ">

                                                </div>
                                                <div class="minhocaoApoiadas" >
                                                    <span><?php echo $row->plataformaApoioNumeroApoios ?> apoiadas</span>
                                                </div>
                                            </a>
                                            <div class="minhocaoDescritivo" >
                                                <a href="#" class="popmake-16624 popmake-minhocao-proposta-detalhes-quando-clica"
                                                   onclick="transferirValores
                                                                    ( '<?php echo $row->minhocaoImagemProposta ?>'
                                                                    , '<?php echo $row->plataformaApoioNumeroApoios ?>'
                                                                    , '<?php echo $row->minhocaoTituloProposta ?>'
                                                                    , '<?php echo $row->minhocaoDescricaoProposta ?>'
                                                                    , '<?php echo $row->minhocaoDiretriz1 ?>'
                                                                    , '<?php echo $row->minhocaoDiretriz2 ?>'
                                                                    , '<?php echo $row->minhocaoDiretriz3 ?>'
                                                                    , '<?php echo $row->minhocaoDiretriz4 ?>'
                                                                    , '<?php echo $row->minhocaoDiretriz5 ?>'
                                                                    , '<?php echo $row->minhocaoDiretriz6 ?>'
                                                                    , '<?php echo $row->minhocaoDiretriz7 ?>'
                                                                    , '<?php echo $row->minhocaoDiretriz8 ?>'
                                                                    , '<?php echo $row->minhocaoDiretriz9 ?>'
                                                                    , '<?php echo $row->minhocaoDiretriz10 ?>'
                                                                    , '<?php echo $row->submit_time ?>'
                                                                    );
                                                ">
                                                    <div class="minhocaoDescritivoInterno" >
                                                        <div class="minhocaoDescritivoInternoTitulo" >
                                                            <?php
                                                                $minhocaoTituloProposta = $row->minhocaoTituloProposta;
                                                                $minhocaoTituloPropostaCount = strlen( $minhocaoTituloProposta );
                                                                if ($minhocaoTituloPropostaCount > 50)
                                                                {
                                                                    $minhocaoTituloProposta = substr( $minhocaoTituloProposta, 0, 47) . '...';
                                                                }
                                                                /*if ($minhocaoTituloPropostaCount > 20)
                                                                {
                                                                    $minhocaoTituloProposta = substr( $minhocaoTituloProposta, 0, 18) . '...';
                                                                }*/
                                                                echo $minhocaoTituloProposta;
                                                            ?>
                                                            <div class="minhocaoLinha" >
                                                            </div>
                                                        </div>
                                                        <div class="minhocaoDescritivoInternoDescricao" >
                                                            <?php
                                                                $minhocaoDescricaoProposta = $row->minhocaoDescricaoProposta . ' pretende de maneira geral propor a desincorporação de maneira integral considerando o demasiado grau de incomodo que se gera na população';
                                                                $minhocaoDescricaoPropostaCount = strlen( $minhocaoDescricaoProposta );

                                                                $cont = 120;
                                                                //$cont = 50;
                                                                if ($minhocaoTituloPropostaCount < 50)
                                                                {
                                                                    if ($minhocaoTituloPropostaCount > 40)
                                                                    {
                                                                        $cont = $cont + ( $minhocaoTituloPropostaCount ) - 35;
                                                                    }
                                                                    else if ($minhocaoTituloPropostaCount > 30 && $minhocaoTituloPropostaCount <= 40 )
                                                                    {
                                                                        $cont = $cont + ( $minhocaoTituloPropostaCount * 1.5 );
                                                                    }
                                                                    else if ($minhocaoTituloPropostaCount >= 18 && $minhocaoTituloPropostaCount <= 30 )
                                                                    {
                                                                        $cont = $cont + ( $minhocaoTituloPropostaCount * 2 );
                                                                    }
                                                                    else if ($minhocaoTituloPropostaCount < 18)
                                                                    {
                                                                        $cont = $cont + ( $minhocaoTituloPropostaCount * 4.5 );
                                                                    }
                                                                }

                                                                if ($minhocaoDescricaoPropostaCount > $cont)
                                                                {
                                                                    $minhocaoDescricaoProposta = substr( $minhocaoDescricaoProposta, 0, $cont-3) . '...';
                                                                }
                                                                echo $minhocaoDescricaoProposta;
                                                            ?>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="minhocaoDescritivoIcones" >
                                                    <div class="minhocaoDescritivoIconesCompartilhar" >
                                                        <a href="#" id="LinkShareMinhocao" class="popmake-10013 popmake-minhocao-compartilhar-proposta" onclick=" retornaCompartilharmento('<?php echo $row->submit_time;?>') ">
                                                            <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/share.png" width="40" height="40" />
                                                        </a>
                                                            <!--  <a href="http://www.facebook.com/sharer/sharer.php?u=http://www.gestaourbana.prefeitura.sp.gov.br/minhocao/?hd=<?php echo $row->submit_time;?>" target="_blank">
                                                                <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/facebook_cinza.png" width="20" height="20" />
                                                            </a>
                                                            <a href="https://plus.google.com/share?url=http://www.gestaourbana.prefeitura.sp.gov.br/minhocao/?hd=<?php echo $row->submit_time;?>" target="_blank">
                                                                <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/google-cinza.png" width="20" height="20" />
                                                            </a>
                                                            <a href="https://twitter.com/intent/tweet?url=http://www.gestaourbana.prefeitura.sp.gov.br/minhocao/?hd=<?php echo $row->submit_time;?>&hashtags=smdu,minhocao,participe" target="_blank">
                                                                <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/twitter-cinza.png" width="20" height="20" /> 
                                                            </a> -->
                                                    </div>
                                                    <div class="minhocaoDescritivoIconesApoiar" >
                                                        <a href="#" id="LinkApoioMinhocao" class="popmake-16629 popmake-minhocao-apoio-proposta" onclick=" jQuery( '#plataformaApoioIdPropostaApoiada' ).val('<?php echo $row->submit_time?>')" >
                                                            <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/like.png" width="86" height="45" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        ?>
                        <div class="resultMinhocao">
                            <div class="resultinternoMinhocao">
                                <div class="resultinternoMinhocaoProposta" >
                                    <div class="resultinternoMinhocaoPropostaInterno" >
                                        <a href="#" id="" class="popmake-16637 popmake-minhocao-enviar-proposta">
                                            <div class="resultinternoMinhocaoPropostaInternoEnviar" >
                                                <span></span>
                                                <img alt="envie sua proposta" src="/wp-content/themes/gestaourbana-1.2/images/envie-sua-proposta-ccc.png" />
                                            </div>
                                            <div class="resultinternoMinhocaoPropostaInternoTexto" >
                                                <div class="resultinternoMinhocaoPropostaInternoTextoCima" >
                                                    Gostaria de enviar uma proposta?
                                                </div>
                                                <div class="resultinternoMinhocaoPropostaInternoTextoBaixo" >
                                                    Caso nenhuma destas propostas atenda às demandas que você acredita serem necessárias, envie a sua proposta para o minhoção
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                    
            </div>
                
                
                <!--Comentários-->
                <?php
                    if ($post->comment_status == 'open')
                    {
                       //comments_template( '', true );
                    }
                ?>

                <div class="text">
                  <div class="inner-text">
                        <?php if (get_field('mostrar_menu') == "sim")
                            {
                        ?>
                        <div class="menu-do-projeto">
                            <?php mostrar_menu_interno( get_field('projeto') );?>
                        </div>
                        <?php 
                            }
                        ?>
                  </div>
                </div>
                
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<?php endwhile; ?>

<script type="text/javascript">
jQuery(document).ready(function()
{
    //mascara cep
    jQuery(".mascaraCepApoioProposta ").keypress(function()
    {
        if (jQuery(".mascaraCepApoioProposta ").val().length == 5)
        {
            jQuery(".mascaraCepApoioProposta ").val(jQuery(".mascaraCepApoioProposta ").val() + '-');
        }
    });
    
    //mascara cep
    jQuery(".mascaraCepEnvioProposta").keypress(function()
    {
        if (jQuery(".mascaraCepEnvioProposta").val().length == 5)
        {
            jQuery(".mascaraCepEnvioProposta").val(jQuery(".mascaraCepEnvioProposta").val() + '-');
        }
    });
    
    jQuery(".minhocaoCep").keypress(function(key)
    {
        if(key.charCode < 48 || key.charCode > 57) 
            return false;
    });

});

function parametros()
{
    //alert(categorias);

    /*jQuery.ajax({
        type: 'POST',
        url: '<?php //echo admin_url( 'admin-ajax.php' ); ?>',
        data: { action: 'aprovadasMinhocao', parametros: categorias },
        success: function(html){
            jQuery('#display').html(html).show();
            //location.reload(true);
        }
    });*/
}

function transferirValores(urlImagem, apoiadas, titulo, descricao, diretriz1, diretriz2, diretriz3, diretriz4, diretriz5, diretriz6, diretriz7, diretriz8, diretriz9, diretriz10, submittime)
{
    jQuery('.minhocaoDetalhesImagemInterno')
            .hide()
            .css('background', 'url(' + '.' + urlImagem + ') no-repeat')
            .css('background-color', '#E6E6E6')
            .css('background-size', 'cover')
            .css('background-position', 'center center')
            .css('background-clip', 'content-box')
            .fadeIn('fast');
    jQuery('.minhocaoDetalhesDescritivoApoiadasInterno')
            .hide()
            .text(apoiadas + ' apoiadas')
            .fadeIn('fast');
    jQuery('.minhocaoDetalhesDescritivoTitulo')
            .hide()
            .text(titulo)
            .fadeIn('fast');
    jQuery('.minhocaoDetalhesDescritivoDescricao')
            .hide()
            .text(descricao + 'pretende de maneira geral propor a desincorporação de maneira integral considerando o demasiado grau de incomodo que se gera na população')
            .fadeIn('fast');
    jQuery('.diretriz1')
            .hide()
            .text('1) ' + diretriz1)
            .fadeIn('fast');
    jQuery('.diretriz2')
            .hide()
            .text('2) ' + diretriz2)
            .fadeIn('fast');
    jQuery('.diretriz3')
            .hide()
            .text('3) ' + diretriz3)
            .fadeIn('fast');
    jQuery('.diretriz4')
            .hide()
            .text('4) ' + diretriz4)
            .fadeIn('fast');
    jQuery('.diretriz5')
            .hide()
            .text('5) ' + diretriz5)
            .fadeIn('fast');
    jQuery('.diretriz6')
            .hide()
            .text('6) ' + diretriz6)
            .fadeIn('fast');
    jQuery('.diretriz7')
            .hide()
            .text('7) ' + diretriz7)
            .fadeIn('fast');
    jQuery('.diretriz8')
            .hide()
            .text('8) ' + diretriz8)
            .fadeIn('fast');
    jQuery('.diretriz9')
            .hide()
            .text('9) ' + diretriz9)
            .fadeIn('fast');
    jQuery('.diretriz10')
            .hide()
            .text('10) ' + diretriz10)
            .fadeIn('fast');
    jQuery('.minhocaoIdPropostaApoiadaDetalhes')
            .val(submittime);
}

function retornaCompartilharmento(id){

    jQuery( '#MinhocaoFormasCompartilharmento' ).empty();
    jQuery( '#MinhocaoFormasCompartilharmento' ).append("<a href='http://www.facebook.com/sharer/sharer.php?u=http://www.gestaourbana.prefeitura.sp.gov.br/minhocao/?hd="+id+"' target='_blank'> \
                                        <img alt='' src='/wp-content/themes/gestaourbana-1.2/images/facebook_cinza.png' width='60' height='60' style='padding-right: 30px;'/> \
                                    </a> \
                                   <a href='https://plus.google.com/share?url=http://www.gestaourbana.prefeitura.sp.gov.br/minhocao/?hd="+id+"'' target='_blank'>\
                                        <img alt='' src='/wp-content/themes/gestaourbana-1.2/images/google-cinza.png' width='60' height='60' style='padding-right: 30px;'/>\
                                    </a>\
                                   <a href='https://twitter.com/intent/tweet?url=http://www.gestaourbana.prefeitura.sp.gov.br/minhocao/?hd="+id+"&hashtags=smdu,minhocao,participe' target='_blank'>\
                                        <img alt='' src='/wp-content/themes/gestaourbana-1.2/images/twitter-cinza.png' width='60' height='60'  />\
                                    </a> ");
}

</script>

<?php get_footer(); ?>
