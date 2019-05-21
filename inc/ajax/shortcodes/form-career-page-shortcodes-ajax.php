<?php

add_action('wp_ajax_nopriv_career_form', 'career_form');
add_action('wp_ajax_career_form', 'career_form');

if ( ! function_exists( 'wp_handle_upload' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
  }

function career_form()
{
    if (
        empty($_POST['careerNonce'])
        || !wp_verify_nonce($_POST['careerNonce'], 'career_form')
    ) {
        $error = new WP_Error('No verify nonce', $_POST);
        wp_send_json_error($error);
    }
    $response = array();
    // $response['post'] = $_POST; //sanitize_text_field
    $error = array();

    
      if (  isset( $_FILES['shortcodeFormFile'] )  &&  !empty( $_FILES['shortcodeFormFile'] )  ) {
          $attachments = array();
          
          $_FILES_FORMAT = reArrayFiles( $_FILES['shortcodeFormFile'] ) ;
    
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
        $response['shortcodeFormFile_errors'] = $error;
    
      }


    $to = 'quotes@cservaustin.com';
    // $to = 'dmitriy_r_f@mail.ru';
    $subject = 'CAREER PAGE REQUEST!';
    $body = '';
    $body .= '<table align="center" width="600" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #ccc;">';
    $body .= '<tbody>';
    
    $body .= '<tr style="background: #eeeeee;">';
    $body .= '<td width="200"  style="padding: 5px;"> Full Name : </td>';
    $body .= '<td style="padding: 5px;"> '. $_POST['careerName'] .' </td>';
    $body .= '</tr>';
    
    $body .= '<tr style="">';
    $body .= '<td width="200"  style="padding: 5px;"> Phone : </td>';
    $body .= '<td style="padding: 5px;"> '. $_POST['careerPhone'] .' </td>';
    $body .= '</tr>';
    
    $body .= '<tr style="background: #eeeeee;">';
    $body .= '<td width="200" style="padding: 5px;"> Company : </td>';
    $body .= '<td style="padding: 5px;"> '. $_POST['careerInterest'] .' </td>';
    $body .= '</tr>';
    
    $body .= '<tr style="">';
    $body .= '<td width="200"  style="padding: 5px;"> E-mail : </td>';
    $body .= '<td style="padding: 5px;"> '. $_POST['careerEmail'] .' </td>';
    $body .= '</tr>';

    $body .= '<tr style="background: #eeeeee;">';
    $body .= '<td width="200"  style="padding: 5px;"> Message : </td>';
    $body .= '<td style="padding: 5px;"> '. $_POST['careerDetails'] .' </td>';
    $body .= '</tr>';

    $body .= '</tbody>';
    $body .= '</table>';

    $headers = array('Content-Type: text/html; charset=UTF-8');
    // $response['attachments']  = $attachments;

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