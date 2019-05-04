<?php

function make_body_2_1_1 ($post) {

  $body = '';
  $body .= '<table align="center" width="600" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #ccc;">';
  $body .= '<tbody>';
  
  $body .= '<tr style="background: #eeeeee;">';
  $body .= ' <td style="padding: 5px;" width="300">Full Name : </td>';
  $body .= ' <td style="padding: 5px;" width="300">Phone : </td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= ' <td style="padding: 5px; border: 1px solid #bbbbbb"> '. $_POST['contact_name'] .' </td>';
  $body .= ' <td style="padding: 5px; border: 1px solid #bbbbbb"> '. $_POST['contact_phone'] .' </td>';
  $body .= '</tr>';
  
  $body .= '<tr style="background: #eeeeee;">';
  $body .= ' <td style="padding: 5px;" width="300"> Company : </td>';
  $body .= ' <td style="padding: 5px;" width="300"> E-mail : </td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= ' <td style="padding: 5px; border: 1px solid #bbbbbb"> '. $_POST['contact_company'] .' </td>';
  $body .= ' <td style="padding: 5px; border: 1px solid #bbbbbb"> '. $_POST['contact_email'] .' </td>';
  $body .= '</tr>';

  if( isset( $_POST['installation_service_type'] ) && !empty( $_POST['installation_service_type'] ) ) {

    $installation_service_type = $_POST['installation_service_type'] == 'STANDARD' 
                                  ? 'C-SERV STANDARD INSTALLATION SERVICE'
                                    : $_POST['installation_service_type'] == 'TURNKEY' 
                                      ? 'C-SERV TURNKEY INSTALLATION SERVICE' 
                                        : '';

    $body .= '<tr style="background: #eeeeee;">';
    $body .= '  <td width="600" style="padding: 20px 5px;"> Type of installation service needed </td>';
    $body .= '</tr>';
    $body .= '<tr style="">';
    $body .= ' <td width="600"  style="padding: 5px;"> E-mail : </td>';
    $body .= ' <td style="padding: 5px;"> '. $installation_service_type .' </td>';
    $body .= '</tr>';

  }

  

  // $body .= '<tr style="background: #eeeeee;">';
  // $body .= '<td width="200"  style="padding: 5px;"> Full Name : </td>';
  // $body .= '<td style="padding: 5px;"> '. $_POST['contact_name'] .' </td>';
  // $body .= '</tr>';
  
  // $body .= '<tr style="">';
  // $body .= '<td width="200"  style="padding: 5px;"> Phone : </td>';
  // $body .= '<td style="padding: 5px;"> '. $_POST['contact_phone'] .' </td>';
  // $body .= '</tr>';


  // $body .= '<tr style="background: #eeeeee;">';
  // $body .= '<td width="200"  style="padding: 5px;"> Message : </td>';
  // $body .= '<td style="padding: 5px;"> '. $_POST['estimateDetails'] .' </td>';
  // $body .= '</tr>';

  $body .= '</tbody>';
  $body .= '</table>';

  return $body;
}