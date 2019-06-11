<?php


add_action('template_redirect', 'cserv_loading_forms_utilites');

function cserv_loading_forms_utilites(){

  if (is_page_template()) {
    //if page page has page template and 
    //it's template locates under forms-quote folder
    if ( strpos(get_page_template(), '/forms-quote/') ) {

      //add utilites for froms templates
      require_once __DIR__ . '/forms-quote/groups_for_browser.php';
      require_once __DIR__ . '/forms-quote/utilites.php';

    }
  }

}

add_filter('body_class', 'cserv_add_wp_body_classes');

function cserv_add_wp_body_classes($classes)
{
    if (is_page_template()) {
        //if page page has page template and 
        //it's template locates under forms-quote folder
        if (strpos(get_page_template(), '/forms-quote/') !== false) {
            $classes[] = 'et_pb_quote_form_layout';
        }

    }
    return $classes;

}

require_once __DIR__ . '/inc/utilites.php';
