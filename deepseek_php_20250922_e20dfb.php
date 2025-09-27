        </main>
        <footer>
            <div class="container">
                <div class="footer-container">
                    <div class="footer-logo">
                        <h2>U.P.R. <span>Solar</span></h2>
                        <p>Harnessing the power of the sun for a greener tomorrow.</p>
                    </div>
                    <div class="footer-links">
                        <h3>Quick Links</h3>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_id' => 'footer-menu',
                        ));
                        ?>
                    </div>
                    <div class="footer-contact">
                        <h3>Contact Us</h3>
                        <p>📞 (555) 123-SOLAR</p>
                        <p>✉️ info@upresolar.com</p>
                    </div>
                </div>
                <div class="copyright">
                    <p>&copy; <?php echo date('Y'); ?> U.P.R. Solar Green Energy. All rights reserved.</p>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>