    <footer>
        <div id="wrapper-projetos" class="wrapper">
            <h3 class="section-title">Projetos</h3> 
            <?php 
                $args = array(
                        'menu' => 'Menu Primário do Header',
                        'depth' => 2,
                        'menu_id' => 'indice_projetos',
                        'container_class' => 'wrapper',
                        'menu_class' => 'menu_index'
                    )
            ?>
            <?php wp_nav_menu($args);?>
        </div>
        <div class="clear"></div>

        <div class="wrapper">
            <div class="footer-col">
                <div class="footer-row">
                    <a href="<?php echo get_bloginfo( 'url' ); ?>" title="home"><img src="<?php echo bloginfo('template_url'); ?>/images/logo_gestao_footer.jpg" /></a>
                </div>
            </div>
            <div class="footer-col">
                <?php
                    wp_nav_menu( 
                        array( 
                            'theme_location' => 'footer-menu',
                            'container_class' => 'footer-row contato'
                        )
                    );
                ?>
            </div>
            <div class="footer-col">
                <div class="footer-row">
                     <div class="left label">
                             Redes sociais:
                     </div>
                     <div class="left social-buttons">
                             <a href="https://www.facebook.com/PrefSP.smul" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/images/btn-facebook-27x27.png" /></a>
                             <a href="https://twitter.com/PrefSP_smul" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/images/btn-twitter-27x27.png" /></a>
                             <a href="http://www.youtube.com/user/pmspsmdu" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/images/icon-youtube.png" /></a>
                     </div>
                     <div class="clear"></div>
                 </div>
            </div>
            <div class="clear"></div>
            <div class="wrapper">
                <div class="footer-col">
                    <div class="footer-row">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/logo_prefeitura_sem_smdu_footer.jpg">
                    </div>
                </div>
                <div class="footer-col">
                    <div class="footer-row contato">
                            Secretaria Municipal de Urbanismo e Licenciamento (SMUL)<br />
                            Prefeitura de São Paulo<br />
                            Rua São Bento, 405, Centro - 18º andar<br />
                            CEP 01011-100 - São Paulo - SP<br />
                            Telefone: (11) 3113 7500<br />
                    </div>
                </div>
                <div class="footer-col">
                     <div class="footer-row contato">
                         Todo o conteúdo do site está disponível sob licença Creative Commons. Acesse a página <a href="<?php echo get_bloginfo( 'url' ); ?>/index.php/desenvolvimento">Desenvolvimento</a> e saiba mais.
                     </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    
    <script type="text/javascript">
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
    </script>
</body>

</html>