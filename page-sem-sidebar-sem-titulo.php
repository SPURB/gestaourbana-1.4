<?php
/*
 * Template Name: Página sem sidebar Sem Título
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
            ,display: "none" // info cells are just kicked off the page with CSS (for accessibility)
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
    
    jQuery("#CEP").keydown(function(e)
    {
        return cepKeyDown(e);
    });
    
    jQuery("#CEP").keyup(function(e)
    {
        var elemento = "#CEP";
        return cepKeyUp(elemento, e);
    });
    
    //mascara cpf/cnpj
    jQuery('#rdbWifiTipoDocumento :checkbox').live('click', function()
    {
        var tipoPessoa = jQuery(this).val();
        jQuery("#CPFCNPJ").val("");
        
        if(tipoPessoa === "CNPJ")
        {
            //jQuery("#CPFCNPJ").attr("pattern",".{14,14}");
            jQuery("#CPFCNPJ").attr("minlength","18");
            jQuery("#CPFCNPJ").attr("maxlength","18");
            
            jQuery("#CPFCNPJ").keypress(function()
            {
               jQuery("#CPFCNPJ").val(cpfCnpj(jQuery("#CPFCNPJ").val()));
            }); 
        }
        else
        {
            //jQuery("#CPFCNPJ").attr("pattern",".{11,11}");   
            jQuery("#CPFCNPJ").attr("minlength","14");
            jQuery("#CPFCNPJ").attr("maxlength","14");
            
            jQuery("#CPFCNPJ").keypress(function()
            {
               jQuery("#CPFCNPJ").val(cpfCnpj(jQuery("#CPFCNPJ").val()));
            }); 
        }
    });
    
    jQuery("#CPFCNPJ").keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57)
        {    
            if (key.keyCode != 8 && key.keyCode != 46 && !(key >= 96 && key <= 105))
                return false;
        }
    });
});

function cpfCnpj(v)
{
    if (v.length <= 14) //CPF
    {
        //Remove tudo o que não é dígito
        v = v.replace(/\D/g, "");
        
        //Coloca um ponto entre o terceiro e o quarto dígitos
        v = v.replace(/(\d{3})(\d)/, "$1.$2");

        //Coloca um ponto entre o terceiro e o quarto dígitos
        //de novo (para o segundo bloco de números)
        v = v.replace(/(\d{3})(\d)/, "$1.$2");

        //Coloca um hífen entre o terceiro e o quarto dígitos
        v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    }
    else //CNPJ
    {
        //Remove tudo o que não é dígito
        v = v.replace(/\D/g, "");
        
        //Coloca ponto entre o segundo e o terceiro dígitos
        v = v.replace(/^(\d{2})(\d)/, "$1.$2");

        //Coloca ponto entre o quinto e o sexto dígitos
        v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");

        //Coloca uma barra entre o oitavo e o nono dígitos
        v = v.replace(/\.(\d{3})(\d)/, ".$1/$2");

        //Coloca um hífen depois do bloco de quatro dígitos     
        v = v.replace(/(\d{4})(\d)/, "$1-$2");
    }
    
    return v;
}

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

</script>

<?php get_footer(); ?>
