<div class="action-bar">
    <div class="wrapper">
        <div class="action-bar-content">
            <div class="contact-number">
                call us now!
                <div id="contactNumber">
                    <a href="tel:<?php echo get_option("phone_number"); ?>"><?php echo get_option("phone_number"); ?></a>
                </div>
            </div>

            <div class="auth-link">
                <a href="<?php echo wp_login_url() ?>">login</a>
                <a href="<?php echo wp_registration_url() ?>"><span>signup</span></a>
            </div>
        </div>
    </div>
</div>