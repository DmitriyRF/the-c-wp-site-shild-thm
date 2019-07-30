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

    global $post;
    //add js for shortcode form 
	if( is_a( $post, 'WP_Post' ) ) {
        $content = $post->post_content;
        // implies one form for on the page
        $shortcode_form_acton = '';
        $shortcodes = [
            'form_estimate' => 'estimate_now_form',
            'career_form' => 'career_form'
        ];

        foreach ($shortcodes as $short_code => $form_action) {

            if(has_shortcode( $content, $short_code)){
                $shortcode_form_acton = $form_action;
                break;
            }
        }

        if (! empty ($shortcode_form_acton) ){

            wp_enqueue_script('ajax-form-script', get_stylesheet_directory_uri() . '/js/shortcode-form-c-serv-ajax.js', array('jquery'), (string)rand(), false);
            wp_localize_script('ajax-form-script', 'localize_data', array(
                'ajax_url' => admin_url('admin-ajax.php'),
                'action' => $shortcode_form_acton,
            ));
        }
    }
    
    $quote_pages = [ 
        'forms-quote/quote-2-1-1-furniture-installation.php',
        'forms-quote/quote-first-template.php',
        'forms-quote/quote-second-template.php',
        'forms-quote/quote-2-1-1.php',
        'forms-quote/quote-2-2-1.php',
        'forms-quote/quote-2-3-1.php',
        'forms-quote/quote-2-4-1.php',
        'forms-quote/quote-2-5-1.php',
        'forms-quote/quote-2-6-1.php',
        'forms-quote/quote-2-7-1.php',
        'forms-quote/quote-2-8-1.php',
        'forms-quote/quote-3-1-1.php',
        'forms-quote/quote-3-2-1.php',
        'forms-quote/quote-3-3-1.php',
        'forms-quote/quote-3-4-1.php',
        'forms-quote/quote-3-5-1.php',
        'forms-quote/quote-3-6-1.php',
        'forms-quote/quote-3-7-1.php'
    ];

    if (is_page_template($quote_pages)
    ) {

        wp_enqueue_script('jquery-ui-datepicker');
        wp_enqueue_script('cserv-ui-datepicker', get_stylesheet_directory_uri() . '/js/ui-datepicker-cserv.js', array('jquery', 'jquery-ui-datepicker'), null, true);
        wp_enqueue_script('jquery-ui-tooltip');
        wp_enqueue_script('jquery-ui-position');
        wp_enqueue_script('cserv-ui-tooltip', get_stylesheet_directory_uri() . '/js/ui-tooltip-cserv.js', array('jquery', 'jquery-ui-position', 'jquery-ui-tooltip'), (string)rand(), true);

        wp_enqueue_script('ajax-quote-form-script', get_stylesheet_directory_uri() . '/js/quote-form-c-serv-ajax.js', array('jquery'), (string)rand(), true);
        wp_localize_script('ajax-quote-form-script', 'localize_data', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'action' => 'quote_form',
            'messages' => [
                'doneMessage' => _SUCCESSFULLY_REQUEST_ ,
                'failMessage' => _FAILED_REQUEST_
            ]
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