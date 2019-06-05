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

    // $to = 'quotes@cservaustin.com';
    $to = 'dmitriy_r_f@mail.ru';
    $subject = 'Installation Form';
    $body = '<div></div>';
    if ( isset( $_POST['quote_form_type'] ) && !empty( $_POST['quote_form_type'] ) ){

        switch ($_POST['quote_form_type'] ) {

            case 'installation_form':
                $subject = 'Installation Form';
                require_once('email-bodies/quote-2-1-1-furniture-installation.php');
                $body = make_body_furniture_installation($_POST);
                break;

            case 'furniture_installation':
                $subject = 'FREE FURNITURE INSTALLATION QUOTE';
                require_once('email-bodies/quote-2-1-1.php');
                $body = make_body_2_1_1($_POST);
                break;
            
            default:
                break;
        }
    }


    $headers = array('Content-Type: text/html; charset=UTF-8');

    $response['email'] = wp_mail($to, $subject, $body, $headers);
    // $response['wp_mail_response'] = wp_mail('marketing@cservaustin.com', $subject, $body, $headers );

    wp_send_json($response);
}