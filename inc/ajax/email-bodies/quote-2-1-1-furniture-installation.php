<?php

function make_body_furniture_installation ($post) {

  $body = '';
  $body .= '<table align="center" width="600" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #ccc;">';
  $body .= '<tbody>';
  
  $body .= '<tr style="background: #eeeeee;">';
  $body .= ' <td style="padding: 5px; border: 1px solid #bbbbbb" width="300">Full Name : </td>';
  $body .= ' <td style="padding: 5px; border: 1px solid #bbbbbb" width="300">Phone : </td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= ' <td style="padding: 5px; border: 1px solid #bbbbbb"> '. $_POST['contact_name'] .' </td>';
  $body .= ' <td style="padding: 5px; border: 1px solid #bbbbbb"> '. $_POST['contact_phone'] .' </td>';
  $body .= '</tr>';
  
  $body .= '<tr style="background: #eeeeee;">';
  $body .= ' <td style="padding: 5px; border: 1px solid #bbbbbb" width="300"> Company : </td>';
  $body .= ' <td style="padding: 5px; border: 1px solid #bbbbbb" width="300"> E-mail : </td>';
  $body .= '</tr>';
  $body .= '<tr>';
  $body .= ' <td style="padding: 5px; border: 1px solid #bbbbbb"> '. $_POST['contact_company'] .' </td>';
  $body .= ' <td style="padding: 5px; border: 1px solid #bbbbbb"> '. $_POST['contact_email'] .' </td>';
  $body .= '</tr>';

  if( isset( $_POST['installation_service_type'] ) && !empty( $_POST['installation_service_type'] ) ) {
    
    switch ($_POST['installation_service_type']) {
      case 'STANDARD':
        $installation_service_type = 'C-SERV STANDARD INSTALLATION SERVICE';
        break;
      case 'TURNKEY':
        $installation_service_type = 'C-SERV TURNKEY INSTALLATION SERVICE';
        break;
      default:
        $installation_service_type = '';
        break;
    }

    $body .= '<tr style="background: #eeeeee;">';
    $body .= ' <td colspan="2" style="padding: 40px 5px 10px; text-align: center;"> TYPE OF INSTALLATION SERVICE NEEDED </td>';
    $body .= '</tr>';
    $body .= '<tr style="">';
    $body .= ' <td colspan="2" style="padding: 5px; text-align: center;"> '. $installation_service_type .' </td>';
    $body .= '</tr>';
  }

  // TYPES OF FURNITURE TO INSTALL
  $body .= '<tr style="background: #eeeeee;">';
  $body .= ' <td colspan="2" style="padding: 20px 5px 10px; text-align: center; border-top: 2px solid #888888"> TYPES OF FURNITURE TO INSTALL : </td>';
  $body .= '</tr>';

  $types_of_furniture_to_install = [
    'input_type_modular_furniture' => 'MODULAR FURNITURE',
    'input_type_system_furniture' => 'SYSTEM FURNITURE',
    'input_type_conference_room_furniture' => 'CONFERENCE ROOM FURNITURE',
    'input_type_casework_lab_furniture' => 'CASEWORK OR LAB FURNITURE',
    'input_type_industrial_worksrations' => 'INDUSTRIAL WORKSTATIONS',
    'input_type_cubicles_partition_walls' => 'CUBICLES AND PARTITION WALLS',
    'input_type_trade_show_setup' => 'TRADE SHOW SETUP',
    'input_type_srorage_racking_system' => 'STORAGE & RACKING SYSTEMS',
    'input_type_seating_systems' => 'SEATING SYSTEMS',
    'input_type_other' => 'OTHERS',
  ];

  foreach ($types_of_furniture_to_install as $key => $value){

    if( isset( $_POST[$key] )  && !empty( $_POST[$key] ) ) {

      $body .= '<tr style="background: #bbbbbb;">';
      $body .= ' <td colspan="2" style="padding: 20px 5px 10px; text-align: center;"> '.$_POST[$key].': </td>';
      $body .= '</tr>';
      
      if( isset( $_POST[ $key . '_text'] )  && !empty( $_POST[ $key . '_text'] ) ) {
  
        $body .= '<tr style="background: #444444; color: #ffffff">';
        $body .= ' <td colspan="2" style="padding: 20px 5px 10px; text-align: center;"> '.$_POST[ $key . '_text'].': </td>';
        $body .= '</tr>';
  
      }
  
    } elseif( isset( $_POST[ $key . '_text'] )  && !empty( $_POST[ $key . '_text'] ) ) {
  
      $body .= '<tr style="background: #444444; color: #ffffff">';
      $body .= ' <td colspan="2" style="padding: 20px 5px 10px; text-align: center;"> ' . $value . ' HAVE NOT CHECKED BUT FILLED </td>';
      $body .= '</tr>';
      $body .= '<tr style="background: #444444; color: #ff4444">';
      $body .= ' <td colspan="2" style="padding: 20px 5px 10px; text-align: center;"> '.$_POST[ $key . '_text'].'</td>';
      $body .= '</tr>';
    }
  } // END TYPES OF FURNITURE TO INSTALL
  
  // THE INSTALLATION SPACE
  if( isset( $_POST['installation_space'] ) && !empty( $_POST['installation_space'] ) ) {

    $body .= '<tr style="background: #eeeeee;">';
    $body .= ' <td colspan="2" style="padding: 20px 5px 10px; text-align: center; border-top: 2px solid #888888"> THE INSTALLATION SPACE: </td>';
    $body .= '</tr>';
    $body .= '<tr style="">';
    $body .= ' <td colspan="2" style="padding: 5px; text-align: center;"> '. $_POST['installation_space'] .' </td>';
    $body .= '</tr>';
  };

  if( isset( $_POST['installation_space_other'] ) && !empty( $_POST['installation_space_other'] ) ) {

    $body .= '<tr style="background: #eeeeee;  border-top: 2px solid #888888">';
    $body .= ' <td colspan="2" style="padding: 20px 5px 10px; text-align: center;"> THE OTHER SPACE: </td>';
    $body .= '</tr>';
    $body .= '<tr style="">';
    $body .= ' <td colspan="2" style="padding: 5px;"> '. $_POST['installation_space_other'] .' </td>';
    $body .= '</tr>';
  }; // END THE INSTALLATION SPACE


  
  // INSTALLATION DATE
  $body .= '<tr style="background: #eeeeee;">';
  $body .= ' <td colspan="2" style="padding: 20px 5px 10px; text-align: center; border-top: 2px solid #888888"> INSTALLATION DATE : </td>';
  $body .= '</tr>';

  $installation_date = [
    'install_must_happen_by' => 'Install Must Happen By :',
    'tentative_date' => 'Tentative Date :',
    'install_cannot_happen_before' => 'Install Cannot Happen Before :',
  ];

  foreach ($installation_date as $key => $value) {
    if( isset( $_POST[ $key ] )  && !empty( $_POST[ $key ] ) ) {

      $body .= '<tr style="background: #eeeeee;">';
      $body .= ' <td style="padding: 5px;" width="200">' . $value . '</td>';
      $body .= ' <td style="padding: 5px;" width="400">' . $_POST[ $key ] .' </td>';
      $body .= '</tr>';
    }
  }

  // END INSTALLATION DATE

  $body .= '</tbody>';
  $body .= '</table>';

  return $body;
}