<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, minimumscale=1.0, maximum-scale=1.0" />
	<title>Gestão Urbana SP</title>
	<meta name="description" content=" Participe do planejamento de uma nova São Paulo">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>?<?php echo time(); ?>"/>	
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-menu-navbar.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-agenda-interna.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-agenda-sidebar.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-agenda.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-biblioteca.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-contato.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-entenda-etapas.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-entenda-introducao.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-entenda-perguntas.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-equipe.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-home.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-interna.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-noticias-interna.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-noticias-sidebar.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-noticias.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/style-comments.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/glDatePicker.flatwhite.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/jquery.fancybox.css"/>
	<script type="text/javascript">
	  var template_url = "<?php echo bloginfo('template_url'); ?>";
	  var slider = 'slider';
	</script>

<?php
wp_enqueue_script('respond', get_stylesheet_directory_uri() . '/js/respond.min.js');
wp_enqueue_script('vanillaMasker', get_stylesheet_directory_uri() . '/js/vanilla-masker.min.js', array( 'jquery' ));
wp_enqueue_script('vanillaMaskerValidations', get_stylesheet_directory_uri() . '/js/validationsFields.js', array( 'jquery', 'vanillaMasker' ));
wp_enqueue_script('site-script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ));
wp_enqueue_script('bjqs', get_stylesheet_directory_uri() . '/js/bjqs-1.3.js', array( 'jquery' ));
wp_enqueue_script('glDatePicker', get_stylesheet_directory_uri() . '/js/glDatePicker.js', array( 'jquery' ));
wp_enqueue_script('jquery.fancybox', get_stylesheet_directory_uri() . '/js/jquery.fancybox.js', array( 'jquery' ));

wp_head();

?>
</head>
<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
<!--[if IE 7 ]> <body class="ie7"> <![endif]-->
<!--[if IE 8 ]> <body class="ie8"> <![endif]-->
<!--[if IE 9 ]> <body class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->
	<header>
		<div class="inner" id="topGestaoHeader">
			<div class="wrapper">
				<ul>
					<li id="first">
	                    <a href="<?php echo get_bloginfo( 'url' ); ?>" title="home"><img src="<?php echo bloginfo('template_url'); ?>/images/logo_gestao.jpg" /></a>
					</li>
					<li  id="second">
                        <img src="<?php echo bloginfo('template_url'); ?>/images/logo_prefeitura_sem_smdu.jpg" />
					</li>
					<li>
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                    </li>
                    <li style="margin-top: 14px; margin-left: 5px;">
                        <a href="http://gestaourbana.prefeitura.sp.gov.br/master-plan/" style="color: black; font-size: 11px;">English</a> | <a href="http://gestaourbana.prefeitura.sp.gov.br/plandirector_es/" style="color: black; font-size: 11px;">Español</a>
                    </li>					
				</ul>
				<div class="clear"></div>
			</div>
		</div>
	</header>	
	<div id="project-nav" class="nodisp">
		<div class="wrapper" id="wrapper-first">
			<!-- Menu Principal -->
			<?php wp_nav_menu( array( 
				'theme_location' => 'header-menu-primary',
				'menu_class' => 'menu_container'
				) 
			); ?>
			<!-- Breadcrumbs -->
			<?php echo do_shortcode( '[flexy_breadcrumb]'); ?>
			<!-- Braedcrumb dropshadow -->	
			<div id="bcrumbfade" class="noheight">&nbsp;</div>
		</div>		
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function() {			
			// Remove menuinterno sobressalente
			jQuery(".menu-do-projeto").remove();			
			// Exibe menu
			jQuery("#project-nav").removeClass("nodisp");
			// Fixa a navbar
			var navpos = jQuery('#project-nav').offset();
			var paddiv = '<div id="inpaddiv" style="height: 130px; background-color: white;"></div>';
			var isScrolled = false;
			jQuery(window).bind('scroll', function() {
				if (jQuery(window).scrollTop() > 45 && jQuery(window).innerWidth() > 915) {
					jQuery('#project-nav').addClass('fixed_topwrapper');
					jQuery('#bcrumbfade').removeClass('noheight');
					if(!isScrolled){
						// Corrige area branca em paginas sem bcrumb
						if(jQuery('.fbc-page').length <= 0) {
							paddiv = '<div id="inpaddiv" style="height: 50px; background-color: white;"></div>';
							jQuery('#project-nav').addClass('navhtcorrect');
							jQuery('.menu_container').after('<div id="bcrumbfade" style="margin-top: 0">&nbsp;</div>');
						}
						jQuery(paddiv).insertAfter('#project-nav');
						
					}				
					isScrolled = true;
				}
				else {
					jQuery('#project-nav').removeClass('fixed_topwrapper');
					jQuery('#bcrumbfade').addClass('noheight');
					jQuery('#inpaddiv').remove();
					if(jQuery('.fbc-page').length <= 0) {jQuery('#bcrumbfade').remove();}
					isScrolled = false;
				}
			});
		});
	</script>