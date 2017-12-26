jQuery(document).ready(function() {
    var userBrowser = jQuery.browser;
    if (userBrowser.msie) {
        var userBrowserVersion = userBrowser.version;
        if (userBrowserVersion == "7.0" || userBrowserVersion == "6.0") {
            jQuery('#asn-warning').css('display', 'block');
        }
    }
});
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-40469751-1', 'sp.gov.br');
 ga('send', 'pageview');