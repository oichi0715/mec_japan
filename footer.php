<footer class="site-footer custom-footer">
    <div class="container">
        <div class="footer-main">
            <div class="footer-logo-area">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="MEC Logo" class="f-logo">
                <p>Building the next generation of entrepreneurs.</p>
            </div>

            <div class="footer-links">
                <div class="link-col">
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="<?php echo home_url('/#about'); ?>">About</a></li>
                        <li><a href="<?php echo home_url('/schedule'); ?>">Schedule</a></li>
                        <li><a href="<?php echo home_url('/judge'); ?>">Judge</a></li>
                    </ul>
                </div>
                <div class="link-col">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a></li>
                        <li><a href="<?php echo home_url('/terms'); ?>">Terms of Service</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© <?php echo date('Y'); ?> Model Entrepreneur. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>