	
        <footer class="site-footer">
            <nav class="footer-nav">
                <?php 

                    $args = array(
                        'theme_location' => 'footer'
                    );

                ?>

                <?php wp_nav_menu( $args); ?>
            </nav>

            <div class="main-sponsor">
                <a href="https://www.pobal.ie/Pages/Home.aspx">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Sponsors.jpg" />
                </a>
            </div>
            <div class="sub-sponsor">
                <a href="https://www.pobal.ie/BetterStart/Pages/Home.aspx">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/BetterStartLogo.png" />
                </a>
                <a href="http://www.tusla.ie/">
                    <img class="tulsa-logo" src="<?php echo get_template_directory_uri(); ?>/images/Tulsa.png" />
                </a>
            </div>
            <div style="clear:both"></div>
            <p><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?></p>
            <span class="admin-link"><a href="<?php echo get_admin_url(); ?>">admin page</a></span>
        </footer>
    </div>

<?php wp_footer(); ?>
</body>
</html>