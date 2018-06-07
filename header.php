<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="Content-Language" content="pt-br">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!-- <meta name="viewport" content="width=device-width, minimumscale=1.0, maximum-scale=1.0" /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gestão Urbana SP</title>
	<meta name="description" content=" Participe do planejamento de uma nova São Paulo">
	<script type="text/javascript">
	    var template_url = "<?php echo bloginfo('template_url'); ?>";
	    var slider = 'slider';
	</script>
	<?php wp_head();
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
