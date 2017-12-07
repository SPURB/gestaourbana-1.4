<?php
/*
 * Template Name: Página Teste Função Social
 */
function mypage_head() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/stylefs.css">'."\n";
}
add_action('wp_head', 'mypage_head');

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="news-inner">
  <div class="wrapper">


	<script type="text/javascript">
jQuery(document).ready(function()
{
    ajaxFunction('', 'url');
});
	function ajaxFunction(id, url){
		
        var xmlHttp;
		try {// Firefox, Opera 8.0+, Safari
			xmlHttp = new XMLHttpRequest();		
		} catch (e) {// Internet Explorer
			try {
				xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {
				try {
					xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {
					alert("Your browser does not support AJAX!");
					return false;
				}
			}
		}
		
		xmlHttp.onreadystatechange = function(){
			if (xmlHttp.readyState == 4) {
				//Get the response from the server and extract the section that comes in the body section of the second html page avoid inserting the header part of the second page in your first page's element
				var respText = xmlHttp.responseText.split('<body>');
				elem.innerHTML = respText[1].split('</body>')[0];
			}
		}

		var elem = document.getElementById('test');
		if (!elem) {
			alert('The element with the passed ID doesn\'t exists in your page');
			return;
		}
	
		xmlHttp.open("GET", '/funcao-social/contribuir', true);
		xmlHttp.send(null);
	}		
</script>
	<div id="test"></div>

    <div class="clear"></div>

  </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
