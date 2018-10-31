<?php

add_action('wp_ajax_nopriv_estimate_now_form', 'estimate_now_form');
add_action('wp_ajax_estimate_now_form', 'estimate_now_form');

function estimate_now_form()
{
    if (
        empty($_POST['estimateNonce'])
        || !wp_verify_nonce($_POST['estimateNonce'], 'estimate_now_form')
    ) {
        $error = new WP_Error('No verify nonce', $_POST);
        wp_send_json_error($error);
    }
    $response = array();
    $response['post'] = $_POST; //sanitize_text_field

    $to = 'dmitriy_r_f@mail.ru';
    $subject = 'Form ajax request';
    $body = 'The email body content';
    $headers = array('Content-Type: text/html; charset=UTF-8');

    $response['email'] = wp_mail($to, $subject, $body, $headers);

    wp_send_json($response);
}