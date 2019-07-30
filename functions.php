<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

require_once get_stylesheet_directory() . '/inc/define_messages.php';

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_parent_css')):
    function chld_thm_cfg_parent_css()
{
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array());
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);

// END ENQUEUE PARENT ACTION

require_once get_stylesheet_directory() . '/inc/nav.php';

require_once get_stylesheet_directory() . '/inc/phpmailer.php';

require_once get_stylesheet_directory() . '/inc/enqueue.php';

require_once get_stylesheet_directory() . '/inc/shortcodes/shortcodes.php';

require_once get_stylesheet_directory() . '/inc/ajax/shortcodes/shortcodes-ajax.php';

require_once get_stylesheet_directory() . '/inc/ajax/quote-form-ajax.php';

require_once get_stylesheet_directory() . '/inc/builder/service.php';

require_once get_stylesheet_directory() . '/include_utilites.php';
