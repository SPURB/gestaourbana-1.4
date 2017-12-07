<?php
/*
 * Template Name: Zoneamento - Olhares Urbanos
 */

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
                        
                <div style="display: table; height: 100px; background-color: #f7f7f7; border: 0px solid black; vertical-align: middle; width: 100%;">
                    <div style="display: table-row; vertical-align: middle; text-align: center;">
                        <div style="width: 35%; display: table-cell; vertical-align: middle;">
                            <img alt="" src="/wp-content/themes/gestaourbana-1.2/images/logo_app_horizontal.png"/>
                        </div>
                        <div style="width: 30%; display: table-cell; vertical-align: middle;">
                            <a href="https://play.google.com/store/apps/details?id=br.gov.sp.prefeitura.gestaourbana.olharesurbanos" target="_blank">
                                <img style="vertical-align: middle; margin: 0 auto;" alt="Get it on Google Play" src="http://developer.android.com/images/brand/pt-br_generic_rgb_wo_45.png" />
                            </a>
                        </div>
                        <div style="width: 35%; display: table-cell; vertical-align: middle;">
                            <button id="create-user" class="jqueryuifontsize">Cadastro</button>
                            <button id="user-login" class="jqueryuifontsize">Login</button>
                            <?php
                                if( !session_id() )
                                {
                                    session_start();
                                }
                            ?>
                            <input type="hidden" name="token" id="token" value="<?php echo $_SESSION['token'] ?>">
                            <button id="foto-envio" class="jqueryuifontsize">Colabore</button>
                        </div>
                    </div>
                </div>
                
                <br/>
                        
                <div>
                    
                </div>
                
                <br/>
                <br/>
                
                <div class="filtro">
                    <div class="titulo">
                    Filtrar por: 
                    </div>
                    <div>
                        <div class="itens">
                            <input type="checkbox" name="checkbox1" checked>Uso Misto
                        </div>
                        <div class="itens">
                            <input type="checkbox" name="checkbox2" checked>Fachada Ativa
                        </div>
                        <div class="itens">
                            <input type="checkbox" name="checkbox3" checked>Fruição Pública
                        </div>
                        <div class="itens">
                            <input type="checkbox" name="checkbox4" checked>Permeabilidade visual do térreo
                        </div>
                        <div class="itens">
                            <input type="checkbox" name="checkbox5" checked>Calçada com qualidade urbana
                        </div>
                        <div class="itens">
                            <input type="checkbox" name="checkbox6" checked>Fachada ou teto verde
                        </div>
                    </div>
                </div>
                
                <br/>
                <br/>
                
                <div id="display">
                    
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

<div id="dialog-form" title="Novo Usuário">
    <p class="validateTips">Digite seu email e uma senha.</p>
    <form>
        <fieldset>
            <p>
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" value="" maxlength="150" class="text ui-widget-content ui-corner-all">
            </p>
            <p>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="" maxlength="100" class="text ui-widget-content ui-corner-all">
            </p>
            <p>
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" value="" maxlength="100" class="text ui-widget-content ui-corner-all">
            </p>
            <!-- Allow form submission with keyboard without duplicating the dialog button -->
            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
        </fieldset>
    </form>
</div>

<div id="dialog-form1" title="Login">
    <p class="validateTips">Digite seu email e sua senha.</p>
    <form>
        <fieldset>
            <input type="hidden" name="name" id="name1" value="Jane Smith" class="text ui-widget-content ui-corner-all">
            <p>
                <label for="email">Email</label>
                <input type="text" name="email" id="email1" value="" maxlength="100" class="text ui-widget-content ui-corner-all">
            </p>
            <p>
                <label for="password">Senha</label>
                <input type="password" name="password" id="password1" value="" maxlength="100" class="text ui-widget-content ui-corner-all">
            </p>
            <!-- Allow form submission with keyboard without duplicating the dialog button -->
            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
        </fieldset>
    </form>
</div>

<div id="dialog-form2" title="Colabore">
    <form>
        <fieldset>
            <p style="font-size: 13px; line-height: normal;">
                Clique em um ou mais Parâmetros que se encaixam na sua foto.
            </p>
            <p style="font-size: 13px; line-height: normal; margin: 5px 0px;">
                <input type="checkbox" name="checkbox1a" style="margin: 0px; margin-right: 5px;">Uso Misto
            </p>
            <p style="font-size: 13px; line-height: normal; margin: 5px 0px;">
                <input type="checkbox" name="checkbox2a" style="margin: 0px; margin-right: 5px;">Fachada Ativa
            </p>
            <p style="font-size: 13px; line-height: initial; margin: 5px 0px;">
                <input type="checkbox" name="checkbox3a" style="margin: 0px; margin-right: 5px;">Fruição Pública
            </p>
            <p style="font-size: 13px; line-height: normal; margin: 5px 0px;">
                <input type="checkbox" name="checkbox4a" style="margin: 0px; margin-right: 5px;">Permeabilidade visual do térreo
            </p>
            <p style="font-size: 13px; line-height: normal; margin: 5px 0px;">
                <input type="checkbox" name="checkbox5a" style="margin: 0px; margin-right: 5px;">Calçada com qualidade urbana
            </p>
            <p style="font-size: 13px; line-height: normal; margin: 5px 0px;">
                <input type="checkbox" name="checkbox6a" style="margin: 0px; margin-right: 5px;">Fachada ou teto verde
            </p>
            <p style="font-size: 13px;">
                Selecione a foto que deseja enviar. (JPG)
                <br/>
                <input type="file" name="file" id="file" value="" accept="image/jpeg">
            </p>
            <p style="font-size: 13px;">
                Região da Foto:
                <select id="regiao">
                    <option></option>
                    <option>Centro</option>
                    <option>Norte</option>
                    <option>Sul</option>
                    <option>Leste</option>
                    <option>Oeste</option>
                </select>
            </p>
            <p style="font-size: 13px;">
                <label style="width: 16%;">Endereço:</label>
                <input type="text" name="endereco" id="endereco" style="width: 84%;" value="" maxlength="150" class="text ui-widget-content ui-corner-all">
                <br/>
                * não obrigatório
            </p>
            <p style="font-size: 13px;">
                <label>Número:</label>
                <input type="text" name="numero" id="numero" value="" maxlength="25" class="text ui-widget-content ui-corner-all">
            </p>
            <!-- Allow form submission with keyboard without duplicating the dialog button -->
            <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
        </fieldset>
    </form>
    <p class="validateTips" style="font-size: 13px; line-height: normal;">&nbsp;</p>
</div>

<script type="text/javascript">

jQuery(document).ready(function()
{
    parametros();
    
    if ( jQuery( "#token" ).val() == "" )
    {
        jQuery( "#foto-envio" ).attr("disabled", true);
    }
    else
    {
        jQuery( "#user-login" ).attr("disabled", true);
    }
    
});

jQuery(document).ready(function()
{
    jQuery('input[name=checkbox1]').change(function(){
       parametros();
    });
    jQuery('input[name=checkbox2]').change(function(){
       parametros();
    });
    jQuery('input[name=checkbox3]').change(function(){
       parametros();
    });
    jQuery('input[name=checkbox4]').change(function(){
       parametros();
    });
    jQuery('input[name=checkbox5]').change(function(){
       parametros();
    });
    jQuery('input[name=checkbox6]').change(function(){
       parametros();
    });
});

function parametros()
{
    var categorias = '0';

    if (jQuery('input[name=checkbox1]').is(':checked'))
    {
        categorias += ';1';
    }
    if (jQuery('input[name=checkbox2]').is(':checked'))
    {
        categorias += ';2';
    }
    if (jQuery('input[name=checkbox3]').is(':checked'))
    {
        categorias += ';3';
    }
    if (jQuery('input[name=checkbox4]').is(':checked'))
    {
        categorias += ';4';
    }
    if (jQuery('input[name=checkbox5]').is(':checked'))
    {
        categorias += ';5';
    }
    if (jQuery('input[name=checkbox6]').is(':checked'))
    {
        categorias += ';6';
    }
    //alert(categorias);

    jQuery.ajax({
        type: 'POST',
        url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
        data: { action: 'imagensAprovadas', parametros: categorias },
        success: function(html){
            jQuery('#display').html(html).show();
            //location.reload(true);
        }
    });
}

jQuery(function() {
    var dialog, dialogLogin, dialogEnvio, form, formLogin, formEnvio, fille,
 
      // From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29
      emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
      name = jQuery( "#name" ),
      email = jQuery( "#email" ),
      password = jQuery( "#password" ),
      name1 = jQuery( "#name1" ),
      email1 = jQuery( "#email1" ),
      password1 = jQuery( "#password1" ),
      allFields = jQuery( [] ).add( name ).add( email ).add( password ),
      allFields1 = jQuery( [] ).add( name1 ).add( email1 ).add( password1 ),
      allFields2 = jQuery( [] ).add( jQuery( "input[name=checkbox1a]" ) ).add( jQuery( "input[name=checkbox2a]" ) ).add( jQuery( "input[name=checkbox3a]" ) ).add( jQuery( "input[name=checkbox4a]" ) ).add( jQuery( "input[name=checkbox5a]" ) ).add( jQuery( "input[name=checkbox6a]" ) ).add( jQuery( "#file" ) ),
      tips = jQuery( ".validateTips" );
 var files1 = [];

    function updateTips( t ) {
      tips
        .text( t )
        .addClass( "ui-state-highlight" );
      setTimeout(function() {
        tips.removeClass( "ui-state-highlight", 1500 );
      }, 500 );
    }
 
    function checkLength( o, n, min, max ) {
      if ( o.val().length > max || o.val().length < min ) {
        o.addClass( "ui-state-error" );
        updateTips( "Length of " + n + " must be between " +
          min + " and " + max + "." );
        return false;
      } else {
        return true;
      }
    }
 
    function checkRegexp( o, regexp, n ) {
      if ( !( regexp.test( o.val() ) ) ) {
        o.addClass( "ui-state-error" );
        updateTips( n );
        return false;
      } else {
        return true;
      }
    }
 
    function addUser()
    {
        var valid = true;
        allFields.removeClass( "ui-state-error" );

        //valid = valid && checkLength( name, "username", 3, 16 );
        //valid = valid && checkLength( email, "email", 6, 80 );
        //valid = valid && checkLength( password, "password", 5, 16 );

        //valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\s])+$/i, "Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter." );
        valid = valid && checkRegexp( name, /^([a-zA-Z ])+$/, "Nome somente com letras." );
        valid = valid && checkRegexp( email, emailRegex, "Email Inválido" );
        valid = valid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Senha somente com letras e números." );

        if ( valid )
        {
            /*jQuery( "#users tbody" ).append( "<tr>" +
            "<td>" + name.val() + "</td>" +
            "<td>" + email.val() + "</td>" +
            "<td>" + password.val() + "</td>" +
            "</tr>" );*/
            userGrava(name.val(), email.val(), password.val());
            //dialog.dialog( "close" );
        }
        return valid;
    }
 
    function loginUser()
    {
        var valid = true;
        allFields1.removeClass( "ui-state-error" );
        valid = valid && checkRegexp( email1, emailRegex, "Email Inválido" );
        valid = valid && checkRegexp( password1, /^([0-9a-zA-Z])+$/, "Senha somente com letras e números." );

        if ( valid )
        {
            userLogin(email1.val(), password1.val());
        }
        return valid;
    }
 
    function envio()
    {
        //var valid = true;
        allFields2.removeClass( "ui-state-error" );
        //valid = valid && checkRegexp( email1, emailRegex, "Email Inválido" );
        //valid = valid && checkRegexp( password1, /^([0-9a-zA-Z])+$/, "Senha somente com letras e números." );
        
        var categorias = '0';
        var checkado = false;
        
        if (jQuery('input[name=checkbox1a]').is(':checked'))
        {
            checkado = true;
            categorias += ';1';
        }
        if (jQuery('input[name=checkbox2a]').is(':checked'))
        {
            checkado = true;
            categorias += ';2';
        }
        if (jQuery('input[name=checkbox3a]').is(':checked'))
        {
            checkado = true;
            categorias += ';3';
        }
        if (jQuery('input[name=checkbox4a]').is(':checked'))
        {
            checkado = true;
            categorias += ';4';
        }
        if (jQuery('input[name=checkbox5a]').is(':checked'))
        {
            checkado = true;
            categorias += ';5';
        }
        if (jQuery('input[name=checkbox6a]').is(':checked'))
        {
            checkado = true;
            categorias += ';6';
        }
        
        var photo = false;
        var file = false;
        if (jQuery( "#file" ).val() != "")
        {
            var val = jQuery('#file').val();
            switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
                case 'jpg': case 'jpeg':
                    file = true;
                    photo = true;
                    break;
                default:
                    jQuery('#file').val('');
                    // error message here
                    updateTips( 'Somente fotos em jpg/jpeg' );
                    break;
            }
        }
        
        var regiao = false;
        if ( jQuery( "#regiao" ).val().length != "" )
        {
            regiao = true;
        }
        
        if ( !checkado )
        {
            updateTips( "Clique em pelo menos um dos Parâmetros." );
        }
        else if ( !photo )
        {
            updateTips( "Selecione a foto que deseja enviar." );
        }
        else if ( !regiao )
        {
            updateTips( "Selecione a Região da sua foto." );
        }
        
        if ( file && checkado && regiao )
        {
            var formdata = new FormData();
            jQuery.each(jQuery('#file')[0].files, function(i, file) {
             formdata.append('image_pe', file);
             //alert(file.data);
            //envioAjax(file.data);
            });
            
            jQuery.each(files1, function(index, file) {
                envioAjax(file.data, categorias, jQuery( "#regiao" ).val(), jQuery( "#endereco" ).val(), jQuery( "#numero" ).val());
            });
            
            //alert(jQuery( "#file" )[0].files.length);
            //alert(jQuery( "#file" )[0].files[0].name);
            
            //envioAjax(jQuery( "#file" ).val());
            //envioAjax(jQuery( "#file" )[0].files[0]);
            
            return true;
        }
        else
        {
            return false;
        }
    }
    

    
    jQuery("input[type=file]").change(function(event) {
  jQuery.each(event.target.files, function(index, file) {
    var reader = new FileReader();
    reader.onload = function(event) {  
      object = {};
      object.filename = file.name;
      object.data = event.target.result;
      files1.push(object);
    };  
    reader.readAsDataURL(file);
  });
});
 
    dialog = jQuery( "#dialog-form" ).dialog({
        autoOpen: false,
        height: 350,
        width: 350,
        modal: true,
        buttons: {
            "Cadastrar": addUser,
            "Cancela": function() {
              dialog.dialog( "close" );
            }
        },
        close: function() {
            form[ 0 ].reset();
            allFields.removeClass( "ui-state-error" );
        }
    });
 
    dialogLogin = jQuery( "#dialog-form1" ).dialog({
        autoOpen: false,
        height: 300,
        width: 350,
        modal: true,
        buttons: {
            "Login": loginUser,
            "Cancela": function() {
              dialogLogin.dialog( "close" );
            }
        },
        close: function() {
            formLogin[ 0 ].reset();
            allFields1.removeClass( "ui-state-error" );
        }
    });
 
    dialogEnvio = jQuery( "#dialog-form2" ).dialog({
        autoOpen: false,
        height: 530,
        width: 550,
        modal: true,
        buttons: {
            "Enviar": envio,
            "Cancela": function() {
              dialogEnvio.dialog( "close" );
            }
        },
        close: function() {
           formEnvio[ 0 ].reset();
            allFields2.removeClass( "ui-state-error" );
        }
    });
 
    form = dialog.find( "form" ).on( "submit", function( event )
    {
        event.preventDefault();
        addUser();
    });
 
    formLogin = dialogLogin.find( "form" ).on( "submit", function( event )
    {
        event.preventDefault();
        loginUser();
    });
 
    formEnvio = dialogEnvio.find( "form" ).on( "submit", function( event )
    {
        event.preventDefault();
        envio();
    });
 
    jQuery( "#create-user" ).button().on( "click", function()
    {
        dialog.dialog( "open" );
    });
 
    jQuery( "#user-login" ).button().on( "click", function()
    {
        dialogLogin.dialog( "open" );
    });
 
    jQuery( "#foto-envio" ).button().on( "click", function()
    {
        dialogEnvio.dialog( "open" );
    });
    
    function userGrava(nome, mail, senha)
    {
        jQuery.ajax({
        type: 'POST',
        url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
        data: { action: 'userGrava', nome: nome, email: mail, senha: senha },
        success: function(html){
            //$('#display3').html(html).show();
            if (html.indexOf("email") >= 0)
            {
                updateTips( 'Este Email já existe no cadastro.' );
                email.addClass( "ui-state-error" );
            }
            else
            {
                jQuery( "#token" ).val(html);
                sessao(html);
                dialog.dialog( "close" );
                jQuery( "#foto-envio" ).removeAttr('disabled').button("refresh");
                jQuery( "#user-login" ).attr("disabled", true).button("refresh");
            }
        }
        });
    }
    
    function userLogin(mail, senha)
    {
        jQuery.ajax({
        type: 'POST',
        url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
        data: { action: 'userLogin', email: mail, senha: senha },
        success: function(html){
            //$('#display3').html(html).show();
            if (html == "false")
            {
                updateTips( 'Email e/ou Senha incorretos!' );
                email1.addClass( "ui-state-error" );
                password1.addClass( "ui-state-error" );
            }
            else
            {
                jQuery( "#token" ).val(html);
                sessao(html);
                dialogLogin.dialog( "close" );
                jQuery( "#foto-envio" ).removeAttr('disabled').button("refresh");
                jQuery( "#user-login" ).attr("disabled", true).button("refresh");
            }
        }
        });
    }
    
    function sessao(token)
    {
        jQuery.ajax({
        type: 'POST',
        url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
        data: { action: 'zoneamentoSessao', token: token },
        success: function(html){
            
        }
        });
    }
 
    
    function envioAjax(photo, parametros, regiao, endereco, numero)
    {
        jQuery.ajax({
        type: 'POST',
        url: '<?php echo admin_url( 'admin-ajax.php' ); ?>'
        ,data: { action: 'sendPhotoSite', token: jQuery( "#token" ).val(), photo: photo, parametros: parametros, regiao: regiao, endereco: endereco, numero: numero }
        //,processData: false
        //,contentType: false
        //,cache: false
        //,contentType: 'application/json'
        ,success: function(html){
            updateTips( html );
            if (html == "false")
            {
                //updateTips( 'Não foi possível enviar sua imagem!' );
                updateTips( 'Ocorreu um erro ao enviar sua foto. Por favor tente mais tarde.' );
            }
            else if (html == "erro")
            {
                updateTips( 'Ocorreu um erro ao enviar sua foto. Por favor tente mais tarde.' );
            }
            else
            {
                //dialogEnvio.dialog( "close" );
                location.reload();
            }
        }
        });
    }
    
    function uint8ToString(buf) {
    var i, length, out = '';
    for (i = 0, length = buf.length; i < length; i += 1) {
        out += String.fromCharCode(buf[i]);
    }
    return out;
    }
    
    function loadImageFileAsURL()
    {
        var filesSelected = document.getElementById("file").files;
        //alert(filesSelected);
        if (filesSelected.length > 0)
        {
            var fileToLoad = filesSelected[0];

            var fileReader = new FileReader();

            fileReader.onload = function(fileLoadedEvent) 
            {
                    var textAreaFileContents = document.getElementById
                    (
                            "textAreaFileContents"
                    );

                    //textAreaFileContents.innerHTML = fileLoadedEvent.target.result;
                    //alert(fileLoadedEvent.target.result);
                    fille = fileLoadedEvent.target.result;
                    //alert("3...." + fille);
                    return fille;
            };

            fileReader.readAsDataURL(fileToLoad);
            //alert(fille);
            
        }
    }

});



</script>

<?php get_footer(); ?>
