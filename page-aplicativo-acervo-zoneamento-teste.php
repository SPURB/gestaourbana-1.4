<?php
/*
 * Template Name: Página Aplicativo Acervo Zoneamento (Teste)
 */

//get_header(); ?>

<!DOCTYPE html>
<html>
    <head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
	        
	     	

	      	<!--<script type="text/javascript" src="http://zeptojs.com/zepto.min.js"></script>-->
                <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/zepto.min.js"></script>
  
        
<!--<script type='text/javascript' src='http://gestaourbana.prefeitura.sp.gov.br/wp-includes/js/jquery/jquery.js?ver=1.8.3'></script>-->
                        <!--<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>-->
	<!--<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>-->
        <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery-1.7.1.min.js"></script>
                        
    <!--<script src="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>-->
    <!--<script src="http://code.jquery.com/jquery-1.5.min.js"></script>-->
    <!--<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>-->
    <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.mobile-1.2.0.min.js"></script>

<!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css" />-->
<!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/jquery.mobile-1.2.0.min.css"/>
<!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />-->
  
    <style>


    .ui-checkbox .ui-btn, .ui-radio .ui-btn
    {
        text-align: center;
    }
    
    .home
    {
        width: 100%;
        height: 100%;
        text-align: center;
        display: table;
        top: 0; right: 0; bottom: 0; left: 0;
        position: absolute;
    }
    
    .meio
    {
        vertical-align: middle;
        display: table-cell;
        text-align: center;
	padding-left: 4%;
	padding-right: 4%;
    }
    
    .row
    {
        display: table-row;
        width: 100%;
    }

    .page21
    {
        width: 100%;
        height: 25%;
        display: table-row;
    }

    .page22
    {
        width: 100%;
        height: 20%;
        vertical-align: middle;
        display: table-row;
    }

    .page23
    {
        width: 100%;
        height: 35%;
        vertical-align: middle;
        display: table-row;
    }

    .page24
    {
        width: 100%;
        height: 20%;
        vertical-align: middle;
        display: table-row;
    }
    
    .page23 .ui-btn
    {
        /*margin: 0;*/
        width: 35%;
        height: 15%;
        overflow: auto;
        margin: auto;
        position: absolute;
        top: 30%; left: 0; bottom: 0; right: 0;
    }
    
    .page23 .ui-btn-inner
    {
        /*max-width: 50%;*/
        padding: 0px;
        height: 100%;
        display: initial;
    }
    
    .botaocamera
    {
        width: 35%;
    }
    
    .botaocamera img
    {
        /*width: 90%;*/
        height: 90%;
    }

    .page41
    {
        width: 100%;
        height: 20%;
        display: table-row;
    }

    .page42
    {
        width: 100%;
        height: 15%;
        vertical-align: middle;
        display: table-row;
    }

    .page43
    {
        width: 100%;
        height: 15%;
        vertical-align: middle;
        display: table-row;
    }

    .page44
    {
        width: 100%;
        height: 15%;
        vertical-align: middle;
        display: table-row;
    }

    .page45
    {
        width: 100%;
        height: 15%;
        vertical-align: middle;
        display: table-row;
    }

    .page46
    {
        width: 100%;
        height: 20%;
        vertical-align: middle;
        display: table-row;
    }

    .start1
    {
        width: 100%;
        height: 25%;
        vertical-align: middle;
        text-align: center;
        /*display: table-row;*/
    }

    .start4
    {
        width: 100%;
        height: 25%;
        vertical-align: middle;
        text-align: center;
        /*display: table-row;*/
    }



    </style>

    </head>
    <body>
                
        <div data-role="page" id="start0">
            <div data-role="content" id="cadastro0" class="instruction">
            <div data-rel="popup" data-role="popup" data-theme="e" data-transition="fade" data-position-to="window" id="alertastart0">
                <p id="textostart0">preencher<p>
            </div>
            </div>
        </div>
                
        <div data-role="page" id="start">
            <div data-role="content" id="cadastro" class="instruction">
                
                <div class="start1">
                    <div class="">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/logo_app_vertical.png">
                    </div>
                </div>
                
                <div>
                    <fieldset>
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" value="">
                        <label for="email">Email</label>
                        <input type="text" id="email" value="">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" value="">
                    </fieldset>
                </div>
                <div>
                    <fieldset>
                        <div data-role="fieldcontain">
                            <input id="envioCadastro" type="button" value="Cadastrar" />
                        </div>
                    </fieldset>
                </div>
                <div>
                    <fieldset>
                        <div data-role="fieldcontain">
                            <input id="paraLogin" type="button" value="Entrar" />
                        </div>
                    </fieldset>
                </div>
                
                <div class="start4">
                    <div class="">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/logo_secretaria.png">
                    </div>
                </div>
                
            </div>
            <div data-rel="popup" data-role="popup" data-theme="e" data-transition="fade" data-position-to="window" id="alertastart">
                <p id="textostart">preencher<p>
            </div>
        </div>
                
        <div data-role="page" id="startLogin">
            <div data-role="content" id="login" class="instruction">
                
                <div class="start1">
                    <div class="">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/logo_app_vertical.png">
                    </div>
                </div>
                
                <div>
                    <fieldset>
                        <label for="email">Email</label>
                        <input type="text" id="emailLogin" value="">
                        <label for="senha">Senha</label>
                        <input type="password" id="senhaLogin" value="">
                    </fieldset>
                </div>
                <div>
                    <fieldset>
                        <div data-role="fieldcontain">
                            <input id="envioLogin" type="button" value="Entrar" />
                        </div>
                    </fieldset>
                </div>
                
                <div class="start4">
                    <div class="">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/logo_secretaria.png">
                    </div>
                </div>
                
            </div>
            <div data-rel="popup" data-role="popup" data-theme="e" data-transition="fade" data-position-to="window" id="alertastartLogin">
                <p id="textostartLogin">preencher<p>
            </div>
        </div>
        
        <div data-role="page" id="page2">
            <div data-role="content">
                <div class="home">
                    <div class="page21">
                        <div class="meio">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/logo_app_vertical.png">
                        </div>
                    </div>
                    <div class="page22">
                        <div class="meio">
                            <label>Clique na Câmera abaixo, para enviar sua foto.</label>
                        </div>
                    </div>

                    <div class="page23">
                        <div class="meio">
                            <div style="text-align: center;">
                                <div class="botaocamera" data-role="button" data-inline="true" style="text-align: center;" onClick="selecionar()">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/camera-original-png.png" alt="camera" />
                                </div>
                            </div>
                            <!--<button id="btnClose">&nbsp;</button>-->
                            <div>
                                <input type="hidden" id="status" value="on" />
                                <input type="hidden" id="idimagem2" />
                                <input type="hidden" id="parametros2" />
                                <input type="hidden" id="regiao2" />
                                <input type="hidden" id="endereco2" />
                                <input type="hidden" id="numero2" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="page24">
                        <div class="meio">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/logo_secretaria.png">
                        </div>
                    </div>
                </div>
                
                <div>
                    <fieldset>
                        <div data-role="fieldcontain">
                            
                        </div>
                    </fieldset>
                </div>
            </div>
            <div data-rel="popup" data-role="popup" data-theme="e" data-transition="fade" data-position-to="window" id="alertapage2">
                <p id="textopage2">preencher<p>
            </div>
        </div>
                
        <div data-role="page" id="page3">
            <div data-role="content" data-theme="c">
                <?php
                    $parametros = array
                        (
                            1 => 'Uso Misto'
                          , 2 => 'Fachada Ativa'
                          , 3 => 'Fruição Pública'
                          , 4 => 'Permeabilidade visual do térreo'
                          , 5 => 'Calçada com qualidade urbana'
                          , 6 => 'Fachada ou teto verde'
                        );
                ?>
                <div>
                    <fieldset>
                        <div data-role="fieldcontain">
                            <div align="center">
                                Clique em um ou mais Parâmetros que se encaixam na sua foto
                            </div>
                            <label align="center">
                                <input type="checkbox" name="checkbox1">Uso Misto
                            </label>
                            <label align="center">
                                <input type="checkbox" name="checkbox2">Fachada Ativa
                            </label>
                            <label align="center">
                                <input type="checkbox" name="checkbox3">Fruição Pública
                            </label>
                            <label align="center">
                                <input type="checkbox" name="checkbox4">Permeabilidade visual do térreo
                            </label>
                            <label align="center">
                                <input type="checkbox" name="checkbox5">Calçada com qualidade urbana
                            </label>
                            <label align="center">
                                <input type="checkbox" name="checkbox6">Fachada ou teto verde
                            </label>
                        </div>
                    </fieldset>
                </div>
                <div>
                    <input type="hidden" id="idimagem3" />
                    <input type="hidden" id="parametros3" />
                </div>
                <div>
                    <fieldset>
                        <div data-role="fieldcontain">
                            <div align="center">
                                Região da Foto:
                            </div>
                            <input type="radio" name="radio-choice" id="radio-choice-1" value="Centro" />
                            <label for="radio-choice-1">Centro</label>
                            
                            <input type="radio" name="radio-choice" id="radio-choice-2" value="Norte"  />
                            <label for="radio-choice-2">Norte</label>
                            
                            <input type="radio" name="radio-choice" id="radio-choice-3" value="Sul"  />
                            <label for="radio-choice-3">Sul</label>
                            
                            <input type="radio" name="radio-choice" id="radio-choice-4" value="Leste"  />
                            <label for="radio-choice-4">Leste</label>
                            
                            <input type="radio" name="radio-choice" id="radio-choice-5" value="Oeste"  />
                            <label for="radio-choice-5">Oeste</label>
                        </div>
                    </fieldset>
                </div>
                <div>
                    <fieldset>
                            <div align="center">
                                Endereço: (não obrigatório)
                            </div>
                            <input type="text" name="endereco" id="endereco" value="" maxlength="150" style="width: 100%;" />
                    </fieldset>
                    <fieldset>
                            <div align="center">
                                Número:
                            </div>
                            <input type="text" name="numero" id="numero" value="" maxlength="25" style="width: 100%;" />
                    </fieldset>
                </div>
                <div>
                    <input type="hidden" id="regiao3" />
                </div>
                <div>
                    <fieldset>
                        <div data-role="fieldcontain">
                            <!--<input id="envioParametro" type="button" value="Enviar" />-->
                            <a id="envioParametro" href="#" data-theme="c" data-role="button" data-transition="slide">Enviar</a>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div data-rel="popup" data-role="popup" data-theme="e" data-transition="fade" data-position-to="window" id="alertapage3">
                <p id="textopage3">preencher<p>
            </div>
        </div>
                
        <div data-role="page" id="page4">
            <div data-role="content">
                <div class="home">
                    <div class="page41">
                        <div class="meio">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/logo_gestao.png">
                        </div>
                    </div>
                    
                    <div class="page42">
                        <div class="meio">
                            <label>Obrigado por colaborar!</label>
                        </div>
                    </div>
                    
                    <div class="page43">
                        <div class="meio">
                            <label>Sua foto será utilizada no acervo de referência do processo participativo de revisão do Zoneamento.</label>
                        </div>
                    </div>
                    
                    <div class="page44">
                        <div class="meio">
                            <label>Para ver as demais fotos acesse a <a href="http://177.22.129.23/zoneamento-galeria/"  data-ajax="false">Galeria</a></label>
                        </div>
                    </div>
                    
                    <div class="page45">
                        <div class="meio">
                            <label>Para acompanhar as demais atividades, visite o <a href="http://177.22.129.23"  data-ajax="false">Gestão Urbana SP</a></label>
                        </div>
                    </div>
                    
                    <div class="page46">
                        <div class="meio">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/logo_secretaria.png">
                        </div>
                    </div>
                <div>
                    <fieldset>
                        <div data-role="fieldcontain">
                            
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        
        
        
        <script>
            
/*$(document).ready(function(){
            var foo = localStorage.getItem("myKey");
            
            
                $("#form").show();
            if (!localStorage.getItem("myKey"))
            {
                //alert (foo);
                //$("#cadastro").hide();
                $("#cadastro").show();
            }	
            
            //alert (<?php //echo ajaxurl; ?>);
            
            //$.mobile.loading('show');
});*/
    
    function selecionar()
    {
        //alert($("#status").val());
        if( $("#status").val() == 'on' )
        {
            showAndroidToast('selecionar');
        }
    }
    
    function showAndroidToast(toast)
    {
        Android.showToast(toast);
    }
    
    function sendPhoto(photo)
    {
        //alert(verificaInternet());
        //alert(localGet());
        if (verificaInternet())
        {
            //Android.showToast1('entrou sendPhoto');
            //Android.showToast1('<?php //echo admin_url( 'admin-ajax.php' ); ?>');

            //$('#display').html(photo).show();
            
            $("#status").val('off');
            
            $.ajax({
                type: 'POST',
                url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                data: { action: 'sendPhoto', token: localGet(), photo: photo, parametros: $('#parametros2').val(), regiao: $('#regiao2').val(), endereco: $('#endereco2').val(), numero: $('#numero2').val() },
                success: function(html){
                    if (html == "erro1")
                    {
                        //alerta('Não foi possível enviar sua imagem!', 'page2');
                        alerta('Ocorreu um erro ao enviar sua foto. Por favor tente mais tarde.', 'page2');
                        $("#status").val('on');
                    }
                    else if (html == "erro2")
                    {
                        alerta('Ocorreu um erro ao enviar sua foto. Por favor tente mais tarde.', 'page2');
                        $("#status").val('on');
                    }
                    else
                    {
                        //$('#display').html(id).show();
                        //Android.showToast1('completou ok');
                        $("#idimagem2").val(html);
                        //$.mobile.changePage($("#page3"), "slide" );
                        $.mobile.changePage($("#page4"), "slide" );
                        //$.mobile.changePage($("#page3"), { transition: "slide", data:{id: id} } );

                        /*var nextpage = $(this).next('div[data-role="pag"]').attr('id');
                        if (nextpage.length > 0) {
                            $.mobile.changePage(nextpage, 'slide',false,true);
                        }*/
                    }
                }
                ,beforeSend: function()
                {
                    showProgressDialog();
                }
                ,complete: function()
                {
                    hideProgressDialog();
                }
            });
        }
        else
        {
            alerta('Você não está conectado à Internet. Espere voltar ou conecte-se e tente novamente.', 'page2');
        }
    }
    
    function sendPhoto1()
    {
        
        $.ajax({
        type: 'POST',
        url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
        //data: { action: 'sendPhoto', id: id, photo: photo },
        data: { action: 'sendPhoto', id: 1 },
        success: function(html){
            $('#display').html(html).show();
        }
        });
    }
	
    function showProgressDialog()
    {
        //$("#progressDialog").show();
        $.mobile.loading( 'show', {
            text: 'Aguarde...',
            textVisible: true,
            theme: 'b',
            html: ""
        });
    }
 
    function hideProgressDialog()
    {
        //$("#progressDialog").hide();
        $.mobile.loading('hide');
    }
    
    $(document).on('pagebeforeshow', '#page2', function(e, data)
    {
        var parametros3 = data.prevPage.find('#parametros3').val();
        //alerta(idimagem2);
        /*
        if (idimagem2)
        {
            if (idimagem2.charAt(idimagem2.length-1) == '0')
            {
                idimagem2 = idimagem2.slice(0,idimagem2.length-1);
            }
        }
        */
        $('#parametros2').val(parametros3);
        
        var regiao3 = data.prevPage.find('#regiao3').val();
        $('#regiao2').val(regiao3);
        
        var endereco3 = data.prevPage.find('#endereco').val();
        $('#endereco2').val(endereco3);
        
        var numero3 = data.prevPage.find('#numero').val();
        $('#numero2').val(numero3);
        
        $("#status").val('on');
    });
    
    $(document).on('pagebeforeshow', '#page3', function(e, data)
    {
        //var idimagem2 = data.prevPage.find('#idimagem2').val();
        //alerta(idimagem2);
        /*
        if (idimagem2)
        {
            if (idimagem2.charAt(idimagem2.length-1) == '0')
            {
                idimagem2 = idimagem2.slice(0,idimagem2.length-1);
            }
        }
        */
        //$('#idimagem3').val(idimagem2);
    });
    
    $( '#envioParametro' ).bind( 'click', function(event, ui)
    {
        var categorias = '0';
        var checkado = false;
        
        if ($('input[name=checkbox1]').is(':checked'))
        {
            checkado = true;
            categorias += ';1';
        }
        if ($('input[name=checkbox2]').is(':checked'))
        {
            checkado = true;
            categorias += ';2';
        }
        if ($('input[name=checkbox3]').is(':checked'))
        {
            checkado = true;
            categorias += ';3';
        }
        if ($('input[name=checkbox4]').is(':checked'))
        {
            checkado = true;
            categorias += ';4';
        }
        if ($('input[name=checkbox5]').is(':checked'))
        {
            checkado = true;
            categorias += ';5';
        }
        if ($('input[name=checkbox6]').is(':checked'))
        {
            checkado = true;
            categorias += ';6';
        }
        
        var regiao = false;
        $("input[name*=radio-choice]:checked").each(function()
        {
            regiao = true;
            $('#regiao3').val($(this).val());
        });
        
        if (!checkado)
        {
            alerta('Clique em pelo menos um dos Parâmetros', 'page3');
        }
        else if (!regiao)
        {
            alerta('Selecione a Região da sua foto.', 'page3');
        }
        
        if (checkado && regiao)
        {
            $('#parametros3').val(categorias);
            $.mobile.changePage($("#page2"), "slide" );
            /*
            $( '#envioParametro' ).addClass("ui-btn-active");
            if (verificaInternet())
            {
                sendCategoria($("#idimagem3").val(), categorias);
            }
            else
            {
                alerta('Você não está conectado à Internet. Espere voltar ou conecte-se e tente novamente.', 'page3');
                $( '#envioParametro' ).removeClass("ui-btn-active");
            }
            */
        }
    });
    
    function sendCategoria(id, categorias)
    {
        $.ajax({
            type: 'POST',
            url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
            //data: { action: 'sendPhoto', id: id, photo: photo },
            data: { action: 'sendCategorias', id: id, categorias: categorias },
            success: function(html){
                //$('#display3').html(html).show();
                $.mobile.changePage($("#page4"), "slide" );
            }
            ,beforeSend: function()
            {
                showProgressDialog();
            }
            ,complete: function()
            {
                hideProgressDialog();
            }
        });
    }
    
    $( '#envioCadastro' ).bind( 'click', function(event, ui)
    {
        var nome = $('#nome').val();
        var email = $('#email').val();
        var senha = $('#senha').val();
        
        if (nome == '' || email == '' || senha == '')
        {
            if (nome == '')
            {
                alerta('Preencher Nome!', 'start');
            }
            else
            {
                if (email == '')
                {
                    alerta('Preencher Email!', 'start');
                }
                else
                {
                    if (senha == '')
                    {
                        alerta('Preencher Senha!', 'start');
                    }
                }
            }
        }
        else
        {
            if (validateEmail(email))
            {
                if (verificaInternet())
                {
                    //sendCategoria($("#idimagem3").val(), categorias);
                    userGrava(nome, email, senha);
                }
                else
                {
                    alerta('Você não está conectado à Internet. Espere voltar ou conecte-se e tente novamente.', 'start');
                }
            }
            else
            {
                alerta('Email Inválido! Por favor Digite seu Email Corretamente.', 'start');
            }
        }
    });
    
    $( '#paraLogin' ).bind( 'click', function(event, ui)
    {
        if (verificaInternet())
        {
            $.mobile.changePage($("#startLogin"), "slide" );
        }
        else
        {
            alerta('Você não está conectado à Internet. Espere voltar ou conecte-se e tente novamente.', 'start');
        }
    });
    
    $( '#envioLogin' ).bind( 'click', function(event, ui)
    {
        var email = $('#emailLogin').val();
        var senha = $('#senhaLogin').val();
        
        if (email == '' || senha == '')
        {
            if (email == '')
            {
                alerta('Digite seu Email.', 'startLogin');
            }
            else
            {
                if (senha == '')
                {
                    alerta('Digite sua Senha.', 'startLogin');
                }
            }
        }
        else
        {
            if (validateEmail(email))
            {
                if (verificaInternet())
                {
                    userLogin(email, senha);
                }
                else
                {
                    alerta('Você não está conectado à Internet. Espere voltar ou conecte-se e tente novamente.', 'startLogin');
                }
            }
            else
            {
                alerta('Email Inválido! Por favor Digite seu Email Corretamente.', 'startLogin');
            }
        }
    });
    
    function alerta(texto, page)
    {
        $("#texto" + page).text(texto);
        $("#alerta" + page).popup("open");
        
        setTimeout(function()
        {
            $("#alerta" + page).popup("close");
        }, 4000);
    }
    
    function ScaleContentToDevice(page)
    {
        scroll(0, 0);
        //alert('height:' + $(window).height())
        var viewportHeight = $(window).height();

        var content = $("#" + page + ":visible");
        var contentMargins =  content.outerHeight() - content.height();
        //alert('contentMargins:' + contentMargins)

        var contentheight = viewportHeight - contentMargins;
        //alert('height:' + contentheight);

        content.height(contentheight);

        $(".ui-mobile").css("min-height", contentheight);
        $(".ui-page").css("min-height", contentheight);
        $(".ui-page").css("height", contentheight);
        
        /*
        scroll(0, 0);
        alert('width:' + $(window).width())
        var viewportWidth = $(window).width();

        var content = $("#" + page + ":visible");
        var contentMargins =  content.outerWidth() - content.width();
        alert('contentMargins:' + contentMargins)

        var contentwidth = viewportWidth - contentMargins;
        alert('width:' + contentwidth);

        content.width(contentwidth);

        $(".ui-mobile").css("max-width", contentwidth);
        $(".ui-page").css("max-width", contentwidth);
        $("#home").css("max-width", contentwidth);
        */
    };

    $(document).on("pageshow", "#start",  function()
    {
        //ScaleContentToDevice('start');
    });

    $(document).on("pageshow", "#page2",  function()
    {
        ScaleContentToDevice('page2');
    });

    $(document).on("pageshow", "#page4",  function()
    {
        ScaleContentToDevice('page4');
    });

    $(document).on("pagebeforecreate", "#start0",  function()
    {
        var id = localGet();
        //alert(id);
        
        if (id)
        {
            //alert('entrou no if');
            //$.mobile.changePage($("#page2"), "slide" );
            $.mobile.changePage($("#page3"), "slide" );
        }
        else
        {
            $.mobile.changePage($("#start"), "slide" );
        }
    });
    
    
    function userVerifica(id)
    {
        $.ajax({
        type: 'POST',
        url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
        data: { action: 'userVerifica', id: id },
        success: function(html){
            //$('#display3').html(html).show();
            if (html.indexOf("id") >= 0)
            {
                
            }
            else
            {
                
            }
        }
        });
    }
    
    function userLogin(email, senha)
    {
        $.ajax({
        type: 'POST',
        url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
        data: { action: 'userLogin', email: email, senha: senha },
        success: function(html){
            //$('#display3').html(html).show();
            if (html == "false")
            {
                alerta('Email e/ou Senha incorretos!', 'startLogin');
            }
            else
            {
                localSet(html);
                //$.mobile.changePage($("#page2"), "slide" );
                $.mobile.changePage($("#page3"), "slide" );
            }
        }
        });
    }
    
    function userGrava(nome, email, senha)
    {
        $.ajax({
        type: 'POST',
        url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
        data: { action: 'userGrava', nome: nome, email: email, senha: senha },
        success: function(html){
            //$('#display3').html(html).show();
            if (html.indexOf("email") >= 0)
            {
                alerta("Este Email já existe no cadastro.", 'start');
            }
            else
            {
                localSet(html);
                //$.mobile.changePage($("#page2"), "slide" );
                $.mobile.changePage($("#page3"), "slide" );
            }
        }
        });
    }
    
    function localSet(id)
    {
        Zepto(function($)
        {
            try
            {
                //we replace default localStorage with our Android Database one
                window.localStorage = LocalStorage;
                localStorage.setItem('id', id);
                return false;
            }
            catch(e)
            {
                //LocalStorage class was not found. be sure to add it to the webview
                alert("Erro ao acessar o banco de dados local")
            }
        });
    }
    
    function localGet()
    {
            try
            {
                //we replace default localStorage with our Android Database one
                window.localStorage = LocalStorage;
                var item = localStorage.getItem('id');
                return item;
                //$('#result').html(item); 
            }
            catch(e)
            {
                //LocalStorage class was not found. be sure to add it to the webview
                alert("Erro ao acessar o banco de dados local")
            }
    }
    
    function verificaInternet()
    {
        var conexao;
        $.ajax({
            type: 'GET',
            url: 'http://www.html5rocks.com/en/tutorials/file/xhr2/',
            async: false,
            cache: false,
            success: function(data, textStatus, XMLHttpRequest)
            {
                conexao = true;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown)
            {
                conexao = false;
            }
            ,beforeSend: function()
            {
                showProgressDialog();
            }
            ,complete: function()
            {
                hideProgressDialog();
            }
        });
        return conexao;
    }
    
    function validateEmail(email)
    {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var valid = re.test(email);

	if(!valid)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    
        </script>
        
    </body>
</html>


<?php //get_footer(); ?>
