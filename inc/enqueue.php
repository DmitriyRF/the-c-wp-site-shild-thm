<?php

function cservaustin_enqueue_front_styles()
{
    //wp_enqueue_style( $handle, $src, $deps, $ver, $media );
    wp_enqueue_style('fontawesome-all', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css', array(), null, 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Oswald:400,500,600,700|Poppins:300,400,500,600,700,900', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'cservaustin_enqueue_front_styles');

function cservaustin_enqueue_front_scripts()
{
    //wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
    wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/js/main-c-serv-file.js', array('jquery'), (string)rand(), true);

    // wp_enqueue_script('recaptcha-script', 'https://www.google.com/recaptcha/api.js', array(), null, false);
}
add_action('wp_enqueue_scripts', 'cservaustin_enqueue_front_scripts');

function cservaustin_enqueue_front_scripts_for_forms()
{
    //wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
    wp_enqueue_script('ajax-form-script', get_stylesheet_directory_uri() . '/js/form-c-serv-ajax.js', array('jquery'), (string)rand(), false);
    wp_localize_script('ajax-form-script', 'localize_data', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'action' => 'estimate_now_form',
    ));

    if (is_page_template('forms-quote/quote-2-1-1-furniture-installation.php')) {
        wp_enqueue_script('jquery-ui-datepicker');
        wp_enqueue_script('input-ui-datepicker', get_stylesheet_directory_uri() . '/js/input-ui-datepicker-cserv.js', array('jquery', 'jquery-ui-datepicker'), null, true);

        wp_enqueue_script('ajax-quote-form-script', get_stylesheet_directory_uri() . '/js/quote-form-c-serv-ajax.js', array('jquery'), (string)rand(), true);
        wp_localize_script('ajax-quote-form-script', 'localize_data', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'action' => 'quote_form',
        ));
    }

}
add_action('wp_enqueue_scripts', 'cservaustin_enqueue_front_scripts_for_forms');

function cservaustin_enqueue_divi_builder_scripts()
{
    wp_enqueue_script("cservaustin-frontend-bundle", get_stylesheet_directory_uri() . '/js/builder/frontend-bundle.min.js', array('jquery', 'et-builder-modules-script'), null, true);

    if (et_core_is_fb_enabled()) {

        wp_enqueue_script("cservaustin-builder-bundle", get_stylesheet_directory_uri() . '/js/builder/builder-bundle.min.js', array('cservaustin-frontend-bundle', 'react', 'react-dom'), null, true);
    }
}

add_action('wp_enqueue_scripts', 'cservaustin_enqueue_divi_builder_scripts', 20);