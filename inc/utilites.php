<?php

add_filter('body_class', 'cserv_add_wp_body_classes');

function cserv_add_wp_body_classes($classes)
{
    if (is_page_template()) {

        if (strpos(get_page_template(), '/forms-quote/') !== false) {
            $classes[] = 'et_pb_quote_form_layout';
        }

    }
    return $classes;

}


function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {

        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}