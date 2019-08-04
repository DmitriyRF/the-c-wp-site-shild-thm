<?php

add_action('wp_ajax_nopriv_quote_form', 'quote_form');
add_action('wp_ajax_quote_form', 'quote_form');

function quote_form()
{
    $response = array();
    $error = array();

    if (
        empty($_POST['estimateNonce'])
        || !wp_verify_nonce($_POST['estimateNonce'], 'quote_form')
    ) {
        $error['nonce_verify'] = new WP_Error('No verify nonce', $_POST);
        wp_send_json_error($error);
    }

    if ( ! empty($_POST['gRecaptchaResponse']) ) {

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array('secret' => RECAPTCHA_SECRET_KEY, 'response' => $_POST['gRecaptchaResponse'] );

            // use key 'http' even if you send the request to https://...
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
            );
            $context  = stream_context_create($options);

            $result = file_get_contents($url, false, $context);

            if ($result === FALSE) { 
                $error['google_recaptcha'] = new WP_Error('No Google recaptcha passed', $_POST);
                wp_send_json_error($error);
             }
             $google_recaptcha_response = json_decode($result);
             if(! $google_recaptcha_response->success){
                wp_send_json_error($google_recaptcha_response);
             }
             $response['google_recaptcha']=$google_recaptcha_response;
    }else{
        $error['google_recaptcha'] = new WP_Error('No Google recaptcha passed', $_POST);
        wp_send_json_error($error);
    }

    $response['post'] = $_POST; //sanitize_text_field

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

    $subject = 'Installation Form';
    $body = '<div></div>';
    if ( isset( $_POST['quote_form_type'] ) && !empty( $_POST['quote_form_type'] ) ){
        
        require_once('email-bodies/groups_for_email.php');

        switch ($_POST['quote_form_type'] ) {

            case 'installation_form':
                $subject = 'INSTALLATION FORM';
                require_once('email-bodies/quote-2-1-1-furniture-installation.php');
                $body = make_body_furniture_installation($_POST);
                break;

            case 'furniture_installation':
                $subject = 'FREE FURNITURE INSTALLATION QUOTE';
                require_once('email-bodies/email-2-1-1.php');
                $body = make_body_2_1_1($_POST);
                break;

            case 'reconfiguration_quote':
                $subject = 'FREE WORKPLACE RECONFIGURATION QUOTE';
                require_once('email-bodies/email-2-2-1.php');
                $body = make_body_2_2_1($_POST);
                break;

            case 'moving_quote':
                $subject = 'FREE WORKPLACE MOVING QUOTE';
                require_once('email-bodies/email-2-3-1.php');
                $body = make_body_2_3_1($_POST);
                break;

            case 'storage_logistics_quote':
                $subject = 'FREE STORAGE & LOGISTICS QUOTE';
                require_once('email-bodies/email-2-4-1.php');
                $body = make_body_2_4_1($_POST);
                break;

            case 'furniture_project_management_quote':
                $subject = 'FREE FURNITURE PROJECT MANAGEMENT QUOTE';
                require_once('email-bodies/email-2-5-1.php');
                $body = make_body_2_5_1($_POST);
                break;

            case 'furniture_steam_cleaning_quote':
                $subject = 'FREE FURNITURE STEAM CLEANING QUOTE';
                require_once('email-bodies/email-2-6-1.php');
                $body = make_body_2_6_1($_POST);
                break;

            case 'recycle_furniture_quote':
                $subject = 'FREE RECYCLE FURNITURE QUOTE';
                require_once('email-bodies/email-2-7-1.php');
                $body = make_body_2_7_1($_POST);
                break;

            case 'office_space_planning_design_quote':
                $subject = 'FREE OFFICE SPACE PLANNING & DESIGN QUOTE';
                require_once('email-bodies/email-2-8-1.php');
                $body = make_body_2_8_1($_POST);
                break;

                
            case 'dealership_services_quote':
                $subject = 'FREE DEALERSHIP SERVICES QUOTE';
                require_once('email-bodies/email-3-1-1.php');
                $body = make_body_3_1_1($_POST);
                break;

            case 'corporate_services_quote':
                $subject = 'FREE CORPORATE SERVICES QUOTE';
                require_once('email-bodies/email-3-2-1.php');
                $body = make_body_3_2_1($_POST);
                break;

            case 'office_furniture_installation_services_quote':
                $subject = 'FREE OFFICE FURNITURE INSTALLATION SERVICES QUOTE';
                require_once('email-bodies/email-3-3-1.php');
                $body = make_body_3_3_1($_POST);
                break;

            case 'lab_furniture_services_quote':
                $subject = 'FREE LAB FURNITURE SERVICES QUOTE';
                require_once('email-bodies/email-3-4-1.php');
                $body = make_body_3_4_1($_POST);
                break;

            case 'education_furniture_services_quote':
                $subject = 'FREE EDUCATION FURNITURE SERVICES QUOTE';
                require_once('email-bodies/email-3-5-1.php');
                $body = make_body_3_5_1($_POST);
                break;

            case 'healthcare_furniture_services_quote':
                $subject = 'FREE HEALTHCARE FURNITURE SERVICES QUOTE';
                require_once('email-bodies/email-3-6-1.php');
                $body = make_body_3_6_1($_POST);
                break;

            case 'government_contract_services_quote':
                $subject = 'FREE GOVERNMENT CONTRACT SERVICES QUOTE';
                require_once('email-bodies/email-3-7-1.php');
                $body = make_body_3_7_1($_POST);
                break;
            
            default:
                break;
        }
    }
    $to = QUOTES_EMAIL;
    $to_copy = MARKETING_EMAIL;
    // $to = DEVELOPER_EMAIL;

    $headers = array('Content-Type: text/html; charset=UTF-8');

    $response['email'] = wp_mail($to, $subject, $body, $headers);
    if($to_copy){
        $response['marketing'] = wp_mail( $to_copy, $subject, $body, $headers );
    }
    if ( isset( $_POST['contact_email'] ) && !empty( $_POST['contact_email'] ) ){
        $response['customer'] = wp_mail( $_POST['contact_email'] , $subject, $body, $headers );
    }

    // for debug
    // wp_send_json($response);

    wp_send_json(['success' => $response['email'] && $response['customer'] ]);
}