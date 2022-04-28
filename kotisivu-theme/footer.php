<!-- Closing tag for site content 'div' (accessibility) -->
</div>

<!-- Footer start -->
<footer class="footer" role="contentinfo">
    <?php if ( is_active_sidebar( 'footer-section-1' ) ) : ?>
        <div class="footer-section-one">
            <?php dynamic_sidebar( 'footer-section-1' ); ?>
        </div>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'footer-section-2' ) ) : ?>
        <div class="footer-section-two">
            <?php dynamic_sidebar( 'footer-section-2' ); ?>
        </div>
    <?php endif; ?>
    <div class="footer-section-legal">
        <aside class="footer__copyright">
                <div>
                    <?php echo '© ' . date('Y') . ' ' . get_bloginfo( 'name' ) ?>
                    <?php if (!isset(get_option('other_settings')['branding']) ) : ?> 
                        <br>Theme powered by: <a href="https://www.kotisivu.dev" rel="nofollow">Kotisivu Dev</a>
                    <?php endif; ?>
                <div>
        </aside>
        <?php if (has_nav_menu('legal-menu')) : ?>
            <nav class="legal__nav">
                <?php wp_nav_menu(array(
                    'theme_location' => 'legal-menu', 
                    'container' => false, 
                    'menu_class' => 'legal__menu')); ?>
            </nav>
        <?php endif; ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>