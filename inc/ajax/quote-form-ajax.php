<?php

add_action('wp_ajax_nopriv_quote_form', 'quote_form');
add_action('wp_ajax_quote_form', 'quote_form');

function quote_form()
{
    if (
        empty($_POST['estimateNonce'])
        || !wp_verify_nonce($_POST['estimateNonce'], 'quote_form')
    ) {
        $error = new WP_Error('No verify nonce', $_POST);
        wp_send_json_error($error);
    }
    $response = array();
    $response['post'] = $_POST; //sanitize_text_field

    $to = 'dmitriy_r_f@mail.ru';
    $subject = 'Installation Form';
    $body = '';
    $body .= '<table align="center" width="600" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #ccc;">';
    $body .= '<tbody>';
    
    $body .= '<tr style="background: #eeeeee;">';
    $body .= '<td width="200"  style="padding: 5px;"> Full Name : </td>';
    $body .= '<td style="padding: 5px;"> '. $_POST['estimateName'] .' </td>';
    $body .= '</tr>';
    
    $body .= '<tr style="">';
    $body .= '<td width="200"  style="padding: 5px;"> Phone : </td>';
    $body .= '<td style="padding: 5px;"> '. $_POST['estimatePhone'] .' </td>';
    $body .= '</tr>';
    
    $body .= '<tr style="background: #eeeeee;">';
    $body .= '<td width="200" style="padding: 5px;"> Company : </td>';
    $body .= '<td style="padding: 5px;"> '. $_POST['estimateCompany'] .' </td>';
    $body .= '</tr>';
    
    $body .= '<tr style="">';
    $body .= '<td width="200"  style="padding: 5px;"> E-mail : </td>';
    $body .= '<td style="padding: 5px;"> '. $_POST['estimateEmail'] .' </td>';
    $body .= '</tr>';

    $body .= '<tr style="background: #eeeeee;">';
    $body .= '<td width="200"  style="padding: 5px;"> Message : </td>';
    $body .= '<td style="padding: 5px;"> '. $_POST['estimateDetails'] .' </td>';
    $body .= '</tr>';

    $body .= '</tbody>';
    $body .= '</table>';

    $headers = array('Content-Type: text/html; charset=UTF-8');

    $response['email'] = wp_mail($to, $subject, $body, $headers);

    wp_send_json($response);
}