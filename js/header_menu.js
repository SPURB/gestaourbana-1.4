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
