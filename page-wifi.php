<?php
/*
 * Template Name: Plataforma Apoio - WiFi
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
                
                <div id="display" class="displayMinhocao">
                    <?php
                        $results = wifi_get("aprovados");
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
                                            <?php
                                                $popmakeId = "";
                                                
                                                if ($row->submit_time == "1445535558.0639" || $row->submit_time == "1445463382.8600" || $row->submit_time == "1445462543.3249" || $row->submit_time == "1445455467.2396")
                                                {
                                                    $popmakeId = "18768 popmake-wifi-proposta-detalhes-quando-clica-exemplo";
                                                }
                                                else
                                                {
                                                    $popmakeId = "18591 popmake-wifi-proposta-detalhes-quando-clica";
                                                }
												
												$DescricaoProposta = $row->wifiDescricaoProposta;
												$DescricaoProposta = str_replace('"', "&ldquo;", $DescricaoProposta);
												$DescricaoProposta = str_replace("'", "&lsquo;", $DescricaoProposta);
												//$DescricaoProposta = nl2br($DescricaoProposta);
												//$DescricaoProposta = str_replace('<br />', PHP_EOL, $DescricaoProposta);
												$DescricaoProposta = str_replace(array("\r\n", "\r", "\n"), "<br/>", $DescricaoProposta);
												
												$JustificativaProposta = $row->wifiJustificativaProposta;
												$JustificativaProposta = str_replace('"', "&ldquo;", $JustificativaProposta);
												$JustificativaProposta = str_replace("'", "&lsquo;", $JustificativaProposta);
												//$JustificativaProposta = nl2br($JustificativaProposta);
												//$JustificativaProposta = str_replace('<br />', PHP_EOL, $JustificativaProposta);
												$JustificativaProposta = str_replace(array("\r\n", "\r", "\n"), "<br/>", $JustificativaProposta);
                                            ?>
                                            <a href="#" class="popmake-<?php echo $popmakeId; ?>"
                                               onclick="transferirValores
                                                                ( '<?php echo $row->wifiImagemProposta ?>'
                                                                , '<?php echo $row->plataformaApoioNumeroApoios ?>'
                                                                , '<?php echo $row->wifiTituloProposta ?>'
                                                                , '<?php echo $row->wifiEnderecoProposta ?>'
                                                                , '<?php echo $row->wifiBairroProposta ?>'
                                                                , '<?php echo $row->wifiCepProposta ?>'
                                                                , '<?php echo $DescricaoProposta ?>'
                                                                , '<?php echo $JustificativaProposta ?>'
                                                                , '<?php echo $row->submit_time ?>'
                                                                );
                                            ">
                                                <div class="minhocaoImagem" style="
                                                        background: url(.<?php echo $row->wifiImagemProposta ?>) no-repeat;
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
                                                <a href="#" class="popmake-<?php echo $popmakeId; ?>"
                                                   onclick="transferirValores
                                                                ( '<?php echo $row->wifiImagemProposta ?>'
                                                                , '<?php echo $row->plataformaApoioNumeroApoios ?>'
                                                                , '<?php echo $row->wifiTituloProposta ?>'
                                                                , '<?php echo $row->wifiEnderecoProposta ?>'
                                                                , '<?php echo $row->wifiBairroProposta ?>'
                                                                , '<?php echo $row->wifiCepProposta ?>'
                                                                , '<?php echo $DescricaoProposta ?>'
                                                                , '<?php echo $JustificativaProposta ?>'
                                                                , '<?php echo $row->submit_time ?>'
                                                                );
                                                ">
                                                    <div class="minhocaoDescritivoInterno" >
                                                        <div class="minhocaoDescritivoInternoTitulo" >
                                                            <?php
                                                                $minhocaoTituloProposta = $row->wifiTituloProposta;
                                                                $minhocaoTituloPropostaCount = strlen( $minhocaoTituloProposta );
                                                                if ($minhocaoTituloPropostaCount > 50)
                                                                {
                                                                    $minhocaoTituloProposta = substr( $minhocaoTituloProposta, 0, 47) . '...';
                                                                }
                                                                /*if ($minhocaoTituloPropostaCount > 20)
                                                                {
                                                                    $minhocaoTituloProposta = substr( $minhocaoTituloProposta, 0, 18) . '...';
                                                                }*/
                                                                echo mb_strtoupper($minhocaoTituloProposta);
                                                            ?>
                                                            <div class="minhocaoLinha" >
                                                            </div>
                                                        </div>
                                                        <div class="minhocaoDescritivoInternoDescricao" >
                                                            <?php
                                                                $minhocaoDescricaoProposta = $DescricaoProposta;
                                                                $minhocaoDescricaoPropostaCount = strlen( $minhocaoDescricaoProposta );

                                                                $cont = 120;
                                                                //$cont = 50;
                                                                if ($minhocaoTituloPropostaCount < 50)
                                                                {
                                                                    if ($minhocaoTituloPropostaCount > 35)
                                                                    {
                                                                        $cont = $cont + ( $minhocaoTituloPropostaCount ) - 35;
                                                                    }
                                                                    else if ($minhocaoTituloPropostaCount > 30 && $minhocaoTituloPropostaCount <= 35 )
                                                                    {
                                                                        $cont = $cont + ( $minhocaoTituloPropostaCount * 1.3 );
                                                                    }
                                                                    else if ($minhocaoTituloPropostaCount >= 18 && $minhocaoTituloPropostaCount <= 30 )
                                                                    {
                                                                        $cont = $cont + ( $minhocaoTituloPropostaCount * 1.8 );
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
                                                    <?php
                                                        if ($row->submit_time == "1445535558.0639" || $row->submit_time == "1445463382.8600" || $row->submit_time == "1445462543.3249" || $row->submit_time == "1445455467.2396")
                                                        {
                                                    ?>
                                                            <div class="minhocaoDescritivoIconesCompartilhar" >
                                                                <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/share.png" width="40" height="40" />
                                                            </div>
                                                            <div class="minhocaoDescritivoIconesApoiar" >
                                                                <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/like.png" width="86" height="45" />      
                                                            </div>
                                                    <?php 
                                                        }
                                                        else
                                                        {
                                                    ?>
                                                            <div class="minhocaoDescritivoIconesCompartilhar" >
                                                                <a href="#" id="LinkShareMinhocao" class="popmake-10013 popmake-minhocao-compartilhar-proposta" onclick=" retornaCompartilharmento('<?php echo $row->submit_time; ?>'); ">
                                                                    <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/share.png" width="40" height="40" />
                                                                </a>
                                                            </div>
                                                            <div class="minhocaoDescritivoIconesApoiar" >
														<a href="#" id="LinkApoioMinhocao" class="popmake-18585 popmake-wifi-apoio-proposta" onclick=" setTimeout( function() { jQuery( '#plataformaApoioIdPropostaApoiada' ).val('<?php echo $row->submit_time; ?>'); }, 3500 ); " >
                                                                    <img alt='' src="/wp-content/themes/gestaourbana-1.2/images/like.png" width="86" height="45" />
                                                                </a>
                                                            </div>
                                                    <?php 
                                                        }
                                                    ?>
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
                                        <a href="#" id="" class="popmake-18587 popmake-wifi-enviar-proposta">
                                            <div class="resultinternoMinhocaoPropostaInternoEnviar" >
                                                <span></span>
                                                <img alt="envie sua proposta" src="/wp-content/themes/gestaourbana-1.2/images/envie-sua-proposta-ccc.png" />
                                            </div>
                                            <div class="resultinternoMinhocaoPropostaInternoTexto" >
                                                <div class="resultinternoMinhocaoPropostaInternoTextoCima" >
                                                    Gostaria de enviar uma sugestão?
                                                </div>
                                                <div class="resultinternoMinhocaoPropostaInternoTextoBaixo" >
                                                    Caso nenhuma destas sugestões atenda às demandas que você acredita serem necessárias, envie a sua sugestão para o WiFi
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

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
    
    jQuery("#wifiCep").keydown(function(e)
    {
        return cepKeyDown(e);
    });
    
    jQuery(".mascaraCepApoioProposta").keyup(function(e)
    {
        var elemento = ".mascaraCepApoioProposta";
        return cepKeyUp(elemento, e);
    });
    
    jQuery(".mascaraCepEnvioProposta").keyup(function(e)
    {
        var elemento = ".mascaraCepEnvioProposta";
        return cepKeyUp(elemento, e);
    });
    
    jQuery("#wifiCepProposta").keydown(function(e)
    {
        return cepKeyDown(e);
    });
    
    jQuery(".mascaraCepLocalidadeEnvioProposta").keyup(function(e)
    {
        var elemento = ".mascaraCepLocalidadeEnvioProposta";
        return cepKeyUp(elemento, e);
    });
    
    jQuery("#wifiTituloProposta").keyup(function(key)
    {
        jQuery("#wifiTituloProposta").val( jQuery("#wifiTituloProposta").val().toUpperCase() );
    });
    
});

function cepKeyDown(e)
{
    var key = e.which;
    if (!e.shiftKey && !e.altKey && !e.ctrlKey && 
        key >= 48 && key <= 57 ||  // numbers   
        key >= 96 && key <= 105 || // Numeric keypad
        key == 8 ||  // Backspace
        key == 35 || key == 36 || // Home and End
        key == 37 || key == 39 || // left and right arrows
        key == 46) // Del
    {
        return true;
    }
    else
    {
        return false;
    }
}

function cepKeyUp(elemento, e)
{
    var input = jQuery(elemento).val();
    input = input.replace("-", "");

    if (input.length < 9)
    {
        var key = e.which;
        if (input.length == 5 && key != 8)
        {
            var pre = input.substr(0, 5);
            jQuery(elemento).val(pre + '-');
        }
        else if (input.length > 5 && key != 8)
        {
            var pre = input.substr(0, 5);
            var posLen = input.length - 5;
            var pos = input.substr(5, posLen);
            jQuery(elemento).val(pre + '-' + pos);
        }
        return true;
    }
    else
    {
        return false;
    }
}

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

function transferirValores(urlImagem, apoiadas, titulo, endereco, bairro, cep, descricao, justificativa, submittime)
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
            .text(titulo.toLocaleUpperCase())
            .fadeIn('fast');
    jQuery('.minhocaoDetalhesDescritivoDescricao')
            .hide()
            .html(endereco + ' - ' + bairro + ' - CEP ' + cep + '<br/><br/>' + descricao + '')
            .fadeIn('fast');
    jQuery('.justificativa')
            .hide()
            .html(justificativa)
            .fadeIn('fast');
	setTimeout(
		function()
		{
			jQuery('.minhocaoIdPropostaApoiadaDetalhes')
				.val(submittime);
		}
	, 3500 );
    
}

function retornaCompartilharmento(id){

    jQuery( '#MinhocaoFormasCompartilharmento' ).empty();
    jQuery( '#MinhocaoFormasCompartilharmento' ).append("<a href='http://www.facebook.com/sharer/sharer.php?u=http://www.gestaourbana.prefeitura.sp.gov.br/wifi-sugestao-de-localidades/?hd="+id+"' target='_blank'> \
                                        <img alt='' src='/wp-content/themes/gestaourbana-1.2/images/facebook_cinza.png' width='60' height='60' style='padding-right: 30px;'/> \
                                    </a> \
                                   <a href='https://plus.google.com/share?url=http://www.gestaourbana.prefeitura.sp.gov.br/wifi-sugestao-de-localidades/?hd="+id+"'' target='_blank'>\
                                        <img alt='' src='/wp-content/themes/gestaourbana-1.2/images/google-cinza.png' width='60' height='60' style='padding-right: 30px;'/>\
                                    </a>\
                                   <a href='https://twitter.com/intent/tweet?url=http://www.gestaourbana.prefeitura.sp.gov.br/wifi-sugestao-de-localidades/?hd="+id+"&hashtags=smdu,sesprefsp,WiFiLivre,participe' target='_blank'>\
                                        <img alt='' src='/wp-content/themes/gestaourbana-1.2/images/twitter-cinza.png' width='60' height='60'  />\
                                    </a> ");
}

</script>

<?php get_footer(); ?>
