<?php
/*
 * Template Name: Centro Aberto
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="news-inner">
  <div class="wrapper">
    <div class="left" style="width:100%;">
      <div class="inner" style="margin-right: 0px;">
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

<div class="wrapper page-dialogo">
    <h2 class="breadcrumb"><span class="gray">Projetos &raquo;</span> Centro Dialogo aberto</h2>
    
    <h3 class="info">Um diálogo aberto a favor da requalificação do centro está inaugurado. Esse diálogo se expressará em projeto, e o projeto será testado por intervenções concretas nesse território singular da cidade.</h3>
    
    <div class="sessoes">
        <h3>Campo Compartilhado</h3>
        <p>A requalificação da área central é uma das metas prioritárias dessa administração. Ação que se inicia com esse seminário, cuja importância é tornar público e participativo o processo de elaboração de diretrizes que vão incidir diretamente sobre a transformação desse território. A primeira etapa é estabelecer um plano diretor que trace os caminhos pelos quais o processo de requalificação vai se seguir e, a partir de então, priorizar projetos e ações a serem realizadas por essa gestão.</p>
        <p>O centro da metrópole de São Paulo é um setor privilegiado. A ampla oferta de empregos, a pujante dinâmica do comércio popular e especializado, o amplo serviço de transporte público, a presença dos órgãos de governo, a memória do patrimônio histórico, a ampla oferta de equipamentos culturais e de espaços públicos, juntos, o singularizam.</p>
        <p>Os projetos que queremos promover não buscam construir novos espaços, mas, acima de tudo, transformar as estruturas preexistentes. O foco é renovar as suas formas de uso, ressignificar o espaço público em lugar onde se potencialize o domínio público.</p>
        <p>O centro é o espaço de representação de toda a sociedade, o que o faz ser um campo compartilhado. E, como tal, o centro se caracteriza por ser um campo de conflito. Pensar e agir sobre a transformação da área central de São Paulo exige enfrentar o campo de projeto como um campo de negociação dos conflitos, onde a coexistência pacífica se torne não apenas possível, mas sobretudo desejável.</p>
        <p>Palavras, traços e desenhos podem expressar os pactos firmados pelo processo de projeto. Mas não nos parece, ainda, serem suficientes. É necessário muni-los de estratégias e táticas precisas.</p>
        <p>A ideia de termos a cooperação do escritório do arquiteto Jan Gehl na condução desse processo nos encantou em função da metodologia usualmente praticada por ele. Sua proposta de trabalho visa reunir a população usuária do centro, poder público e projetistas em um processo colaborativo e participativo. Juntos, escutaremos, debateremos e proporemos hipóteses para o centro. Mas iremos além do desenho. Selecionaremos três intervenções estratégicas que serão </p>
        <p class="left jornal" style="width: 580px;">transformadas em projetos piloto. Provisoriamente, serão construídos para serem testados pelo uso efetivo e ativo da população. Testar projetos em escala 1:1 não é usual em urbanismo. O usual é se elaborar reduzidas maquetes, que acostumamos a olhar por cima, de forma impessoal e impenetrável.</p>
        <p class="left" style="width: 580px;">Vamos ensaiar agora uma outra forma possível de se fazer. Vamos poder vivenciar as transformações imaginadas. E então torná-las permanentes.  Até que no futuro outras formas de uso ainda inimaginadas as ressignifiquem, mais uma vez, de novo.</p>
        <div class="balao-right-bottom">
            <img src="<?php echo bloginfo('template_url') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'balao-campo-compartilhado.jpg'; ?>" align="right">
        </div>
    </div>
    
    <div class="sessoes">
        <img src="<?php echo bloginfo('template_url') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'baloes.jpg'; ?>" class="baloes">
        <img src="<?php echo bloginfo('template_url') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'quadros.jpg'; ?>">
    </div>
    
    <div class="sessoes">
        <h3>Cidades para pessoas</h3>
        <p>O espaço público tem um papel essencial na vida em sociedade, é um local de encontro, onde compartilhamos experiências e partilharmos da mesma cidade. A qualidade desse espaço está relacionada tanto à estética, ao projeto e ao desenho quanto, e fundamentalmente, à sensação de proteção, conforto e prazer.</p>
        <p>Primordialmente temos que ter uma visão muito forte do que queremos para nossa cidade no futuro para direcionar tantas pessoas quanto possível nessa direção. A cidade do século XXI precisa ser pensada a partir da perspectiva de seus habitantes, de forma holística e multidisciplinar. A sua beleza está na capacidade de apoiar diretrizes que orientem diversos planos e projetos simultaneamente.</p>
        <img src="<?php echo bloginfo('template_url') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'cidades-para-pessoas.jpg'; ?>" class="cidades-para-pessoas">
        <p class="small">Observar as pessoas, qualificar suas atividades e quantificar os pedestres são ações simples e um recurso importante para que politicamente possa-se traçar, por exemplo, o equilíbrio do uso das ruas entre as pessoas e os diversos meios de transporte. Entretanto, voltamo-nos sempre à discussão do desenho e esquecemos-nos de pensar na relação das pessoas com o espaço público, a arquitetura e a cidade. Medir o capital social, a diversidade cultural da cidade, a tolerância, segurança e acessibilidade são aspectos fundamentais.</p>
        <img src="<?php echo bloginfo('template_url') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'balao-cidade-para-pessoas.jpg'; ?>" align="right">
    </div>
    
    <div class="sessoes">
        <img src="<?php echo bloginfo('template_url') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'centro-dialogo-diagrama.png'; ?>">
    </div>
    
    <div class="sessoes">
        <h3>Projetos Piloto</h3>
        <p>Provisoriamente, serão construídos quatro projetos pilotos para serem testados pelo uso efetivo e ativo da população. Testar projetos em escala 1:1 não é usual em urbanismo. O usual é se elaborar reduzidas maquetes, que acostumamos a olhar por cima, de forma impessoal e impenetrável.</p>
        <img src="<?php echo bloginfo('template_url') . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'projetos-piloto.jpg'; ?>">
    </div>
    
    <div class="sessoes">
        <div class="download">
            <p class="saiba-mais">Quer saber mais ?</p>
            <p class="info">Baixe as brochuras com todo o conteúdo sobre os ciclos de palestras e workshops realizados sobre o Centro, Diálogo Aberto: <br/><a href="http://gestaourbana.prefeitura.sp.gov.br/arquivos/brochura_cda_7_10_13.pdf" target="_blank">&gt; Publicação do Workshop I - Projetos Piloto"</a><br /><a href="http://gestaourbana.prefeitura.sp.gov.br/arquivos/SPURB_CDA_workshop02_Vale_do_anhangabau.pdf" target="_blank">&gt; Publicação do Workshop II - Vale do Anhangabaú"</a></p>
        </div>
    </div>
</div>

            <div class="clear"></div>
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

</script>

<?php get_footer(); ?>
