</main>
<footer class="site-footer main-footer">
    <div class="container footer-container">

        <!-- Footer Branding: Replicate Header Brand -->
        <div class="footer-branding">
            <a href="<?php echo home_url(); ?>" class="brand">
                <div class="logo-circle">
                    <span class="logo-th">
                        <span class="t">T</span><span class="h">H</span>
                    </span>
                </div>
                <span class="brand-text">STENSLAND</span>
            </a>
        </div>

        <div class="footer-contact-info">
            <a href="mailto:haakonstensland@email.com" class="footer-email">haakonstensland@email.com</a>
        </div>

        <div class="footer-social-icons">
            <a href="mailto:haakonstensland@email.com" class="social-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.png" alt="Email">
            </a>
            <a href="#" class="social-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt="Linkedin">
            </a>
            <a href="tel:#" class="social-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.png" alt="Phone">
            </a>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
