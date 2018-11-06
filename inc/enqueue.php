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
    wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/js/main-c-serv-file.js', array('jquery'), null, true);

    wp_enqueue_script('ajax-form-script', get_stylesheet_directory_uri() . '/js/form-c-serv-ajax.js', array('jquery'), null, false);
    wp_localize_script('ajax-form-script', 'localize_data', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'action' => 'estimate_now_form',
    ));

    wp_enqueue_script('recaptcha-script', 'https://www.google.com/recaptcha/api.js', array(), null, false);
}
add_action('wp_enqueue_scripts', 'cservaustin_enqueue_front_scripts');