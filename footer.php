    <footer>
        <div id="wrapper-projetos" class="wrapper">
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
                             <a href="https://www.facebook.com/PrefSP.smul" target="_blank" rel="noopener"><img src="<?php echo bloginfo('template_url'); ?>/images/btn-facebook-27x27.png" /></a>
                             <a href="https://twitter.com/PrefSP_smul" target="_blank" rel="noopener"><img src="<?php echo bloginfo('template_url'); ?>/images/btn-twitter-27x27.png" /></a>
                             <a href="http://www.youtube.com/user/pmspsmdu" target="_blank" rel="noopener"><img src="<?php echo bloginfo('template_url'); ?>/images/icon-youtube.png" /></a>
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

</body>

</html>