<?php
/*
 * Template Name: Página - Formulários
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="news-inner">
  <div class="wrapper">
    <div class="left" style="width:100%;">
      <div class="inner">
        <div class="text">
          <?php /*<p class="news-date"><?php echo the_time('d/m/Y'); ?></p>*/ ?>
          <h3><?php //echo the_title(); ?></h3>
          <?php /*<div class="subtitle"><?php echo the_excerpt(); ?></div>*/ ?>
          <?php /*<div class="social"><img src="<?php echo bloginfo('template_url'); ?>/_tmp/news-inner-social.png" /></div>*/ ?>
          <?php /*<div class="author">Por <?php the_author(); ?> </div>*/ ?>
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
        <?php if (get_the_tags() != '') :  ?>
        <div class="tags"><?php the_tags('Tags: ', ', ', '<br />'); ?> </div>
        <?php endif; ?>
        
        <!--Comentários-->
        <?php 
        if ($post->comment_status == 'open')
        {
           comments_template( '', true );
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
    jQuery('ul#topicos-menu li.parent > a').click(function() {
            // Expande ou</span> retrai o elemento ul.sub-menu dentro do elemento pai (ul#menu li.parent)
            jQuery('ul.topicos-submenu', jQuery(this).parent()).slideToggle('fast', function() {
                    // Depois de expandir ou retrair, troca a classe 'aberto' do <a> clicado
                    jQuery(this).parent().toggleClass('aberto');
            });
            return false;
    });
});

jQuery(document).ready(function()
{
    jQuery('ul#lei-menu li.parent > a').click(function() {
            // Expande ou</span> retrai o elemento ul.sub-menu dentro do elemento pai (ul#menu li.parent)
            jQuery('ul.lei-submenu', jQuery(this).parent()).slideToggle('fast', function() {
                    // Depois de expandir ou retrair, troca a classe 'aberto' do <a> clicado
                    jQuery(this).parent().toggleClass('aberto');
            });
            return false;
    });
});

jQuery(document).ready(function()
{
    jQuery('ul.lei-submenu li.parent > a').click(function() {
            // Expande ou</span> retrai o elemento ul.sub-menu dentro do elemento pai (ul#menu li.parent)
        jQuery('ul.lei-submenu1', jQuery(this).parent()).slideToggle('fast', function() {
                    // Depois de expandir ou retrair, troca a classe 'aberto' do <a> clicado
                    jQuery(this).parent().toggleClass('aberto');
            });
            return false;
    });
});

jQuery(document).ready(function()
{
    jQuery( '#divEvento' ).hide();
    // Set up variables
    var $el, $parentWrap, $otherWrap, 
        $allTitles = jQuery("dt").css({
            padding: 5, // setting the padding here prevents a weird situation, where it would start animating at 0 padding instead of 5
            "cursor": "pointer" // make it seem clickable
        }),
        $allCells = jQuery("dd").css({
            position: "relative",
            top: -1,
            left: 0
            //,display: "none" // info cells are just kicked off the page with CSS (for accessibility)
        });
    
    // clicking on titles does stuff
    jQuery("#accordion2").delegate("dt", "click", function() {
        
        // cache this, as always, is good form
        $el = jQuery(this);
        
        // if this is already the active cell, don't do anything
        if (!$el.hasClass("current")) {
        
            $parentWrap = $el.parent().parent();
            $otherWraps = jQuery(".info-col").not($parentWrap);
            
            // remove current cell from selection of all cells
            $allTitles = jQuery("dt").not(this);
            
            // close all info cells
            $allCells.slideUp();
            
            // return all titles (except current one) to normal size
            $allTitles.animate({
            });
            
            // animate current title to larger size            
            $el.animate({
            }).next().slideDown();
            
            // make the current column the large size
            $parentWrap.animate({
                
            }).addClass("curCol");
            
            // make other columns the small size
            $otherWraps.animate({
                
            }).removeClass("curCol");
            
            // make sure the correct column is current
            $allTitles.removeClass("current");
            $el.addClass("current");  
        
        }
        
    });
    
    jQuery("#starter").trigger("click");
});

jQuery(document).ready(function()
{
     var travaNumID = ["#numero", "#texto_lei_ilustrado", "#cep", "#cpf",
         "#cnpj","#data1","#data2","#hora1","#hora2"];
    jQuery('#propostaPara').change(function() {
        var str = "";
        jQuery( "#propostaPara option:selected" ).each(function() {
            str = jQuery( this ).text();
        });
        
        if ( str == "---" )
        {
            subprefeituraDesabilita();
            temaDesabilita();
        }
        if ( str == "Toda a Cidade" )
        {
            subprefeituraDesabilita();
            temaHabilita();
        }
        if ( str == "Subprefeitura" )
        {
            temaDesabilita();
            subprefeituraHabilita();
        }
        
    }).trigger( "change" );
        
    jQuery('#tema input').change(function(){
        jQuery( '#tema input' ).each(function() {
                if (jQuery( this ).val() == "Uso")
                {
                    if (jQuery( this ).is(':checked'))
                    {
                        temaUsoHabilita();
                    }
                    else
                    {
                        temaUsoDesabilita();
                    }
                }
                if (jQuery( this ).val() == "Ocupação")
                {
                    if (jQuery( this ).is(':checked'))
                    {
                        temaOcupacaoHabilita();
                    }
                    else
                    {
                        temaOcupacaoDesabilita();
                    }
                }
                if (jQuery( this ).val() == "Tipo de Zonas")
                {
                    if (jQuery( this ).is(':checked'))
                    {
                        temaTipoZonasHabilita();
                    }
                    else
                    {
                        temaTipoZonasDesabilita();
                    }
                }
        });
    });
    
    jQuery('#textProposta').css('width', '100%');
    jQuery('#textJustificativa').css('width', '100%');
    jQuery('#nomes').css('width', '100%');
    jQuery('#emails').css('width', '100%');
    jQuery('#nome').css('width', '100%');
    jQuery('#email').css('width', '100%');
    jQuery('#para_distribuir').css('width', '100%');
    jQuery('#areaDescricao').css('width', '100%');
    jQuery('#titulo').css('width', '100%');
    jQuery('#cmbClassificacao').css('width', '30%');
    jQuery('#cmbTipo').css('width', '30%');
    jQuery('#cmbTerritorio').css('width', '30%');
    jQuery('#endereco').css('width', '100%');
    jQuery('#bairro').css('width', '100%');
    
        
    jQuery('#divEvento').css('width','100%');
    jQuery('#divEvento').css('float','right');
    jQuery('#divCombos').css('float','left');
    jQuery('#divCombos').css('width','100%');
    jQuery(' #divEvento1 ').css('width','40%');
    jQuery(' #divEvento2 ').css('width','60%');
    jQuery(' #divEvento1 ').css('float','left');
    jQuery(' #divEvento2 ').css('float','right');
    
    
    jQuery('#produtora').css('width', '100%');
    //jQuery('#cnpj').css('width', '100%');
    //jQuery('#cidade').css('width', '100%');
    //jQuery('#estado').css('width', '100%');
    jQuery('#responsavel').css('width', '100%');
    jQuery('#email').css('width', '100%');
    //jQuery('#link-portifolio').css('width', '100%');
    jQuery('#link-obra').css('width', '100%');
    
    jQuery( "#cep" ).keypress(function() {
        if (jQuery( "#cep" ).val().length == 5)
        {
            jQuery( "#cep" ).val(jQuery( "#cep" ).val() + '-');
        }
    });
    
    jQuery( "#cep" ).focusout(function() {
        //alert("Digite seu CEP Corretamente!");
        if (jQuery( "#cep" ).val().length < 9)
        {
            jQuery( "#cep" ).focus();
						/*$.each(data.invalids, function(i, n) {
							$(data.into).find(n.into).wpcf7NotValidTip(n.message);
							$(data.into).find(n.into).find('.wpcf7-form-control').addClass('wpcf7-not-valid');
						});

						ro.addClass('wpcf7-validation-errors');
						$(data.into).find('form.wpcf7-form').addClass('invalid');

						$(data.into).trigger('invalid.wpcf7');*/
        }
    });
    //mⴣara cpf
    jQuery( "#cpf" ).keypress(function() {
        if ((jQuery( "#cpf" ).val().length == 3) || (jQuery( "#cpf" ).val().length == 7))
        {
            jQuery( "#cpf" ).val(jQuery( "#cpf" ).val() + '.');
        }
        if(jQuery( "#cpf" ).val().length == 11){
            jQuery( "#cpf" ).val(jQuery( "#cpf" ).val() + '-');
        }
    });
    
    //mⴣara cnpj
    jQuery( "#cnpj" ).keypress(function() {
        if ((jQuery( "#cnpj" ).val().length == 2) || (jQuery( "#cnpj" ).val().length == 6))
        {
            jQuery( "#cnpj" ).val(jQuery( "#cnpj" ).val() + '.');
        }
        if(jQuery( "#cnpj" ).val().length == 10){
            jQuery( "#cnpj" ).val(jQuery( "#cnpj" ).val() + '/');
        }
        if(jQuery( "#cnpj" ).val().length == 15){
            jQuery( "#cnpj" ).val(jQuery( "#cnpj" ).val() + '-');
        }
    });
    
    /*Mⴣara Hora
    
        jQuery( "#hora1" ).keypress(function(key) {
            if ((jQuery( "#hora1" ).val().length == 0) && (key.charCode < 48 || key.charCode > 50))
                return false;
            if ((jQuery( "#hora1" ).val().length == 1) && (key.charCode < 48 || key.charCode > 51) && 
               (jQuery( "#hora1" ).val().charAt(0) == "2"))
                return false; 
            if ((jQuery( "#hora1" ).val().length == 3) && (key.charCode < 48 || key.charCode > 53))
                return false;
            
            if ((jQuery( "#hora1" ).val().length == 2) && (key.charCode < 48 || key.charCode > 53))
                return false;
           
            if ((jQuery( "#hora1" ).val().length === 2))
                jQuery( "#hora1" ).val(jQuery( "#hora1" ).val() + ':');    
        });
    
    
        jQuery( "#hora2" ).keypress(function(key) {
            if ((jQuery( "#hora2" ).val().length == 0) && (key.charCode < 48 || key.charCode > 50))
                return false;
            
             if ((jQuery( "#hora2" ).val().length == 1) && (key.charCode < 48 || key.charCode > 51) && 
               (jQuery( "#hora2" ).val().charAt(0) == "2"))
                return false; 
            
            if ((jQuery( "#hora2" ).val().length == 3) && (key.charCode < 48 || key.charCode > 53))
                return false;
            
            if ((jQuery( "#hora2" ).val().length == 2) && (key.charCode < 48 || key.charCode > 53))
                return false; 
            
            if ((jQuery( "#hora2" ).val().length === 2))
                jQuery( "#hora2" ).val(jQuery( "#hora2" ).val() + ':');    
        });*/
    
 
    jQuery("#letra").keyup(function() {
      jQuery(this).val(jQuery(this).val().toUpperCase());
    });
    
    jQuery('#letra').keypress(function(key) {
        if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45)) return false;
    });
    
    for(var i = 0;i<travaNumID.length;i++){
        jQuery(travaNumID[i]).keypress(function(key) {
            if(key.charCode < 48 || key.charCode > 57) return false;
        });
    }
   /* jQuery("#numero").keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57) return false;
    });
    
    jQuery("#texto_lei_ilustrado").keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57) return false;
    });
    
    jQuery("#estrategias_ilustradas").keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57) return false;
    });
   
    jQuery("#cep").keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57) return false;
    });
    
    jQuery("#cpf").keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57) return false;
    });
    
    jQuery("#cnpj").keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57) return false;
    });
    jQuery("#data1").keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57) return false;
    });
    jQuery("#data2").keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57) return false;
    });
    jQuery("#hora1").keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57) return false;
    });
    jQuery("#hora2").keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57) return false;
    });*/
    //exibindo campos de acordo com a op褯(mostra campos na op褯 "Evento")
    jQuery( '#cmbClassificacao' ).change(function() {
        var classif = jQuery(this).val();
        if (classif === 'Evento'){
            jQuery( '#data1' ).val("d-m-y");
            jQuery( '#data2' ).val("d-m-y");
            jQuery( '#hora1' ).val("");
            jQuery( '#hora2' ).val("");
            jQuery( '#data1' ).focus();
            jQuery( '#divEvento' ).show();
        }
        else{
            jQuery( '#data1' ).val("1900-01-01");
            jQuery( '#data2' ).val("1900-01-01");
            jQuery( '#hora1' ).val("00:00");
            jQuery( '#hora2' ).val("00:00");
            jQuery( '#divEvento' ).hide();
        }   
    });
            jQuery('#aprovacao').prop('type', 'hidden');
            var cont = 1
            jQuery('#data2').focusout(function(){
                var inicio = jQuery('#data1').val();
                var fim = jQuery('#data2').val();
                if (inicio > fim) {
                    //alert('Data de inicio e maior que a de fim');
                    if(cont===1)
                        jQuery(' #divEvento1 ').append(jQuery('<span role="alert" id="msgErroData" class="wpcf7-not-valid-tip"> Data inicio maior que data fim.</span>'));
                    jQuery('#data1').val("d-m-y");
                    jQuery('#data2').val("d-m-y");
                    jQuery( '#data1' ).focus();
                }
                
            });
  
    token();
    
});


function temaDesabilita()
{
    jQuery('#tema input').prop('checked', false);
    jQuery('#tema input').prop('disabled', true);
    temaUsoDesabilita();
    temaOcupacaoDesabilita();
    temaTipoZonasDesabilita();
    jQuery('#cidade').css('color', '#A0A0A0');
}

function temaHabilita()
{
    jQuery('#tema input').prop('disabled', false);
    jQuery('#cidade').css('color', '#333333');
}

function temaUsoDesabilita()
{
    jQuery('#temaUso input').prop('checked', false);
    jQuery('#temaUso input').prop('disabled', true);
    jQuery('#temasUso').css('color', '#A0A0A0');
}

function temaUsoHabilita()
{
    jQuery('#temaUso input').prop('disabled', false);
    jQuery('#temasUso').css('color', '#333333');
}

function temaOcupacaoDesabilita()
{
    jQuery('#temaOcupacao input').prop('checked', false);
    jQuery('#temaOcupacao input').prop('disabled', true);
    jQuery('#temasOcupacao').css('color', '#A0A0A0');
}

function temaOcupacaoHabilita()
{
    jQuery('#temaOcupacao input').prop('disabled', false);
    jQuery('#temasOcupacao').css('color', '#333333');
}

function temaTipoZonasDesabilita()
{
    jQuery('#temasTipoZonas').css('color', '#A0A0A0');
    
    jQuery('#temaTipoZonasZona').val('---');
    jQuery('#temaTipoZonasZona').prop('disabled', true);
    jQuery('select[name="temaTipoZonasZona"]').css('backgroundColor', '#ebebe4');
}

function temaTipoZonasHabilita()
{
    jQuery('#temasTipoZonas').css('color', '#333333');
    
    jQuery('#temaTipoZonasZona').prop('disabled', false);
    jQuery('select[name="temaTipoZonasZona"]').css('backgroundColor', 'white');
}

function subprefeituraDesabilita()
{
    jQuery('#selecaoSubprefeitura').val('---');
    jQuery('#selecaoSubprefeitura').prop('disabled', true);
    jQuery('select[name="selecaoSubprefeitura"]').css('backgroundColor', '#ebebe4');
    
    jQuery('#selecaoZona').val('---');
    jQuery('#selecaoZona').prop('disabled', true);
    jQuery('select[name="selecaoZona"]').css('backgroundColor', '#ebebe4');
    
    jQuery('#numero').val('');
    jQuery('#numero').prop('disabled', true);
    jQuery('#letra').val('');
    jQuery('#letra').prop('disabled', true);
    jQuery('#subprefeitura').css('color', '#A0A0A0');
    ruasDesabilita();
}

function subprefeituraHabilita()
{
    jQuery('#selecaoSubprefeitura').prop('disabled', false);
    jQuery('select[name="selecaoSubprefeitura"]').css('backgroundColor', 'white');
    
    jQuery('#selecaoZona').prop('disabled', false);
    jQuery('select[name="selecaoZona"]').css('backgroundColor', 'white');
    
    jQuery('#numero').prop('disabled', false);
    jQuery('#letra').prop('disabled', false);
    jQuery('#subprefeitura').css('color', '#333333');
    ruasHabilita();
}

function ruasDesabilita()
{
    jQuery('#ruas').css('color', '#A0A0A0');
    jQuery('#refRua').val('');
    jQuery('#localRef').val('');
    jQuery('#ruas input').prop('disabled', true);
}

function ruasHabilita()
{
    jQuery('#ruas').css('color', '#333333');
    jQuery('#ruas input').prop('disabled', false);
}

function token()
{
    jQuery.ajax({
    type: 'POST',
    url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
    data: { action: 'zoneamentoProposta' },
    success: function( html ){
        jQuery('#idProposta').val( html );
        jQuery('#idProposta').prop('type', 'hidden');
        //jQuery('#idProposta').css('display', 'none');
    }
    });
}


</script>

<?php get_footer(); ?>
