<?php

function cservaustin_enqueue_front_styles()
{
    //wp_enqueue_style( $handle, $src, $deps, $ver, $media );
    wp_enqueue_style('fontawesome-all', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'cservaustin_enqueue_front_styles');