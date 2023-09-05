<?php

/**
 * Contains methods for customizing the theme customization screen.
 * 
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @since MyTheme 1.0
 */
class CtTheme_Customize
{

    public static function addPhoneNumber($wpCustomize)
    {
        // Register "phone number" settings and control
        $wpCustomize->add_setting(
            'phone_number',
            [
                'default'    => "0000000000",
                'type'       => 'option',
                'capability' => 'edit_theme_options',
                'transport'  => 'postMessage',
                'sanitize_callback' => 'absint'
            ]
        );
        $wpCustomize->add_control(new WP_Customize_Control(
            $wpCustomize,
            'ctTheme_phone_number',
            [
                'label'      => 'Phone Number',
                'settings'   => 'phone_number',
                'priority'   => 10,
                'section'    => 'ctTheme_options',
                'type'       => 'text',
                'description' => 'Only 10-12 digits numbers will be saved in database. Other character will be removed upon save.',
                'input_attrs' => [
                    'placeholder' => "09876543212",
                    'minlength'   => 10,
                    'maxlength'   => 12,
                ]
            ]
        ));
    }

    public static function addFaxNumber($wpCustomize)
    {
        // Register "fax number" settings and control
        $wpCustomize->add_setting(
            'fax_number',
            [
                'default'    => "0000000000",
                'type'       => 'option',
                'capability' => 'edit_theme_options',
                'transport'  => 'postMessage',
                'sanitize_callback' => 'absint'
            ]
        );
        $wpCustomize->add_control(new WP_Customize_Control(
            $wpCustomize,
            'ctTheme_fax_number',
            [
                'label'      => 'Fax Number',
                'settings'   => 'fax_number',
                'priority'   => 10,
                'section'    => 'ctTheme_options',
                'type'       => 'text',
                'description' => 'Only 10-12 digit numbers will be saved in database. Other character will be removed upon save.',
                'input_attrs' => [
                    'placeholder' => "09876543212",
                    'minlength'   => 10,
                    'maxlength'   => 12,
                ]
            ]
        ));
    }

    public static function addAddressInfo($wpCustomize)
    {
        // Register "address info" settings and control
        $wpCustomize->add_setting(
            'address_info',
            [
                'default'    => "",
                'type'       => 'option',
                'capability' => 'edit_theme_options',
                'transport'  => 'postMessage',
                'sanitize_callback' => 'wp_kses'
            ]
        );
        $wpCustomize->add_control(new WP_Customize_Control(
            $wpCustomize,
            'ctTheme_address_info',
            [
                'label'      => 'Address Info',
                'settings'   => 'address_info',
                'priority'   => 10,
                'section'    => 'ctTheme_options',
                'type'       => 'textarea',
                'description' => 'Free text area to place address info here. Not more then 150 character',
                'input_attrs' => [
                    'minlength'   => 0,
                    'maxlength'   => 100,
                ]
            ]
        ));
    }

    public static function addSiteLogo($wpCustomize)
    {
        // Register "Site logo " settings and control
        $wpCustomize->add_setting(
            'custom_site_logo',
            [
                'type'       => 'option',
                'capability' => 'edit_theme_options',
                'transport'  => 'postMessage',
            ]
        );
        $wpCustomize->add_control(new WP_Customize_Image_Control(
            $wpCustomize,
            'ctTheme_custom_site_logo',
            [
                'label'      => 'Site Logo',
                'settings'   => 'custom_site_logo',
                'priority'   => 10,
                'section'    => 'ctTheme_options',
                'description' => "Only images are allow ex: jpeg, png, gif"
            ]
        ));
    }

    public static function addSocialURLs($wpCustomize)
    {
        $wpCustomize->add_setting(
            'social_url_fb',
            [
                'default'    => "",
                'type'       => 'option',
                'capability' => 'edit_theme_options',
                'transport'  => 'postMessage',
                'sanitize_callback' => 'esc_url_raw'
            ]
        );
        $wpCustomize->add_control(new WP_Customize_Control(
            $wpCustomize,
            'ctTheme_social_url_fb',
            [
                'label'      => 'Facebook Profile URL',
                'settings'   => 'social_url_fb',
                'priority'   => 10,
                'section'    => 'ctTheme_options',
                'type'       => 'url',
                'description' => 'Only web URL is allowed',
                'input_attrs' => [
                    'placeholder' => "https://facebook.com/profile-name",
                ]
            ]
        ));

        $wpCustomize->add_setting(
            'social_url_twitter',
            [
                'default'    => "",
                'type'       => 'option',
                'capability' => 'edit_theme_options',
                'transport'  => 'postMessage',
                'sanitize_callback' => 'esc_url_raw'
            ]
        );
        $wpCustomize->add_control(new WP_Customize_Control(
            $wpCustomize,
            'ctTheme_social_url_twitter',
            [
                'label'      => 'Twitter Profile URL',
                'settings'   => 'social_url_twitter',
                'priority'   => 10,
                'section'    => 'ctTheme_options',
                'type'       => 'url',
                'description' => 'Only web URL is allowed',
                'input_attrs' => [
                    'placeholder' => "https://twitter.com/@profile-name",
                ]
            ]
        ));

        $wpCustomize->add_setting(
            'social_url_linkedin',
            [
                'default'    => "",
                'type'       => 'option',
                'capability' => 'edit_theme_options',
                'transport'  => 'postMessage',
                'sanitize_callback' => 'esc_url_raw'
            ]
        );
        $wpCustomize->add_control(new WP_Customize_Control(
            $wpCustomize,
            'ctTheme_social_url_linkedin',
            [
                'label'      => 'LinkedIn Profile URL',
                'settings'   => 'social_url_linkedin',
                'priority'   => 10,
                'section'    => 'ctTheme_options',
                'type'       => 'url',
                'description' => 'Only web URL is allowed',
                'input_attrs' => [
                    'placeholder' => "https://linkedin.com/profile-name",
                ]
            ]
        ));

        $wpCustomize->add_setting(
            'social_url_pinterest',
            [
                'default'    => "",
                'type'       => 'option',
                'capability' => 'edit_theme_options',
                'transport'  => 'postMessage',
                'sanitize_callback' => 'esc_url_raw'
            ]
        );
        $wpCustomize->add_control(new WP_Customize_Control(
            $wpCustomize,
            'ctTheme_social_url_pinterest',
            [
                'label'      => 'Pinterest Profile URL',
                'settings'   => 'social_url_pinterest',
                'priority'   => 10,
                'section'    => 'ctTheme_options',
                'type'       => 'url',
                'description' => 'Only web URL is allowed',
                'input_attrs' => [
                    'placeholder' => "https://pinterest.com/profile-name",
                ]
            ]
        ));
    }

    public static function register($wpCustomize)
    {
        $wpCustomize->add_section(
            'ctTheme_options',
            [
                'title'       => 'CT Theme Custom Options',
                'priority'    => 10,
                'capability'  => 'edit_theme_options',
                'description' => 'Extra option that CT Theme supports',
            ]
        );

        self::addPhoneNumber($wpCustomize);
        self::addFaxNumber($wpCustomize);
        self::addAddressInfo($wpCustomize);
        self::addSiteLogo($wpCustomize);
        self::addSocialURLs($wpCustomize);
    }


    public function ctTheme_partial_phoneNumber()
    {
        bloginfo("phone_number");
    }

    public function ctTheme_partial_faxNumber()
    {
        bloginfo("fax_number");
    }

    public function ctTheme_partial_addressInfo()
    {
        bloginfo("address_info");
    }

    public static function addEditSettingActionToTheme($wp_customize)
    {
        $wp_customize->get_setting('phone_number')->transport = 'postMessage';
        $wp_customize->get_setting('address_info')->transport = 'postMessage';

        if (isset($wp_customize->selective_refresh)) {
            $wp_customize->selective_refresh->add_partial('phone_number', array(
                'selector'        => '#contactNumber a, #contactNumberOnPage a',
                'render_callback' => 'ctTheme_partial_phoneNumber',
            ));
            $wp_customize->selective_refresh->add_partial('fax_number', array(
                'selector'        => '#faxNumber',
                'render_callback' => 'ctTheme_partial_faxNumber',
            ));
            $wp_customize->selective_refresh->add_partial('address_info', array(
                'selector'        => '#companyAddress',
                'render_callback' => 'ctTheme_partial_addressInfo',
            ));
        }
    }

    public static function headerOutput()
    {
    }

    public static function livePreview()
    {
        wp_enqueue_script('ctTheme-customizer', get_template_directory_uri() . '/js/ctTheme-customizer.js', ['jquery', 'customize-preview'], '20230904', true);
    }
}

add_action('customize_register', ['CtTheme_Customize', 'register']);
add_action('customize_register', ['CtTheme_Customize', 'addEditSettingActionToTheme']);
add_action('wp_head', ['CtTheme_Customize', 'headerOutput']);
add_action('customize_preview_init', ['CtTheme_Customize', 'livePreview']);
