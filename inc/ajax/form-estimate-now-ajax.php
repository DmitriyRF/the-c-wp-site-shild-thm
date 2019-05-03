<?php

add_action('wp_ajax_nopriv_estimate_now_form', 'estimate_now_form');
add_action('wp_ajax_estimate_now_form', 'estimate_now_form');

if ( ! function_exists( 'wp_handle_upload' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
  }

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
    $error = array();

    
      if (  isset( $_FILES['estimateFile'] )  &&  !empty( $_FILES['estimateFile'] )  ) {
          $attachments = array();
          
          $_FILES_FORMAT = reArrayFiles( $_FILES['estimateFile'] ) ;
    
        foreach( $_FILES_FORMAT as  $key => $file )  {
            // $response['file'. $key] = $file;
          $upload_overrides = array( 'test_form' => false ); // DEFAULT
    
          $uploadedfile = $file;
    
          $movefile = wp_handle_upload( $uploadedfile, $upload_overrides,  (string)date("Y/m") );
        //   $response['movefile'. $key] = $movefile;
          if ( $movefile && ! isset( $movefile['error'] ) ) {
    
              array_push($attachments,  '@' . $movefile['file']);
    
          } else {
            $error[] =  $movefile['error'];
          }
    
        }
        $response['estimateFile_errors'] = $error;
    
      }


    $to = 'quotes@cservaustin.com';
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
    $response['attachments']  = $attachments;

    $response['wp_mail_response_quotes'] = wp_mail($to, $subject, $body, $headers);
    $response['wp_mail_response'] = wp_mail('marketing@cservaustin.com', $subject, $body, $headers );

    wp_send_json($response);
}

// function googleRecaptchaVerification()
// {
//     if (  isset( $_POST['g-recaptcha-response'] )  &&  !empty( $_POST['g-recaptcha-response'] )  ) {
			
//         $gResponseValidation = gRecaptchaValidation( $_POST["g-recaptcha-response"] );
    
//         if($gResponseValidation == 0){
    
//                 $response_return = array(
//                     'message'  => 'You are bot!'
//                 );
    
//                 wp_send_json($response_return);
    
//         }
//     }
// }