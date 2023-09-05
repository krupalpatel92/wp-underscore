<?php

/**
 * Template Name: Home Page
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main">
        <?php
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/content', get_post_type());

            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

        <div class="contact-info-content">
            <div class="contact-us-col">
                <h2>contact us</h2>
                <div class="contact-form">
                    <?php
                    /**
                     * Can be done by providing dropdown with contact form list in backend.
                     * So user can select whatever form he wants to show here.
                     */
                    echo do_shortcode('[contact-form-7 id="343ef8a" title="Contact form 1"]');
                    ?>
                </div>
            </div>
            <div class="reach-us-col">
                <h2>reach us</h2>
                <div class="reach-us">
                    <address id="companyAddress"><?php echo nl2br(get_option("address_info")); ?></address>
                    <div>
                        <?php $phone = get_option("phone_number"); ?>
                        Phone: <div id="contactNumberOnPage"><a href="tel: <?php echo $phone; ?>"><?php echo $phone; ?></a></div>
                    </div>
                    <div>
                        Fax: <div id="faxNumber"><?php echo get_option("fax_number"); ?></div>
                    </div>
                    <div class="social-links">
                        <?php
                        $socialLinks = [
                            "facebook" => get_option("social_url_fb"),
                            "twitter" => get_option("social_url_twitter"),
                            "linkedin" => get_option("social_url_linkedin"),
                            "pinterest" => get_option("social_url_pinterest"),
                        ];

                        foreach ($socialLinks as $lKey => $link) {
                        ?>
                            <a href="<?php echo $link; ?>"><img src="<?php echo get_template_directory_uri() . "/images/" . $lKey . ".png"; ?>" alt=<?php echo $lKey; ?> /></a>
                        <?php } ?>
                    </div>
                </div>
            </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
