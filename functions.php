<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

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

require_once get_stylesheet_directory() . '/inc/enqueue.php';

require_once get_stylesheet_directory() . '/inc/shortcodes/form-estimate-now-shortcodes.php';

require_once get_stylesheet_directory() . '/inc/ajax/form-estimate-now-ajax.php';

require_once get_stylesheet_directory() . '/inc/builder/service.php';

add_action('phpmailer_init', 'smtp_email_config', 10, 1);
function smtp_email_config(PHPMailer $phpmailer)
{
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.office365.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 587;
    $phpmailer->SMTPSecure = 'TLS';
    // $phpmailer->SMTPDebug = 2;
    $phpmailer->Username = 'webquotereq@cservaustin.com';
    $phpmailer->Password = '2018Cserv$';
    $phpmailer->From = 'webquotereq@cservaustin.com';
    $phpmailer->FromName = 'Cserv-team';
    $phpmailer->CharSet = "utf-8";
}

// show wp_mail() errors
add_action('wp_mail_failed', 'onMailError', 10, 1);
function onMailError($wp_error)
{
    echo "<pre>";
    print_r($wp_error);
    echo "</pre>";
}

function cserv_add_wp_body_classes($classes)
{
    if (is_page_template()) {

        if (strpos(get_page_template(), '/forms-quote/') !== false) {
            $classes[] = 'et_pb_quote_form_layout';
        }

    }
    return $classes;

}
add_filter('body_class', 'cserv_add_wp_body_classes');
