<?php
require_once('groups_for_email.php');

// column_for_2_values( $label_1, $value_1, $label_2, $value_2 );
// line_for_1_value( $label, $value );
// line_for_1_value_input_box_with_text( $value, $value_with_text );
// line_for_1_value_input_box_with_error( $label, $value );
// lines_for_multiple_values( $label, $value );
// line_for_1_header( $header );

function make_body_2_1_1 ($post) {

  $body = '';
  $body .= '<table align="center" width="600" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #ccc;">';
  $body .= '<tbody>';
  
  $body .= column_for_2_values( 'Full Name', $_POST['contact_name'], 'Phone', $_POST['contact_phone'] );

  $body .= column_for_2_values( 'Company', $_POST['contact_company'], 'E-mail', $_POST['contact_email'] );

  $body .= line_for_1_value( 'TYPE OF INSTALLATION SERVICE NEEDED', $_POST['installation_service_type'] );

  $body .= line_for_1_header('TYPES OF FURNITURE TO INSTALL');

  $types_of_furniture_to_install = [ // placeholder here for having the same array as for fromt
    'input_type_modular_furniture' => ['label' => 'Modular Furniture', 'placeholder' => 'Describe ( # of units, desks, etc. )' ],
    'input_type_system_furniture' => ['label' => 'System Furniture', 'placeholder' => 'Describe (the furniture brand, #, etc.)' ],
    'input_type_cubicles_partition_walls' => ['label' => 'Cubicles and Partition Walls', 'placeholder' => 'Describe ( # of units, desks, etc. )' ],
    'input_type_conference_room_furniture' => ['label' => 'Conference Room Furniture', 'placeholder' => 'Describe (size of table, brand, etc.)' ],
    'input_type_casework_lab_furniture' => ['label' => 'Casework or Lab Furniture', 'placeholder' => 'Describe (worksurface material, upper...)' ],
    'input_type_industrial_worksrations' => ['label' => 'Industrial Workstations', 'placeholder' => 'Describe (# of units, conveyors, etc.)' ],
    'input_type_trade_show_setup' => ['label' => 'Trade Show Setup', 'placeholder' => 'Describe (square ft of booth, furniture ...)' ],
    'input_type_srorage_racking_system' => ['label' => 'Storage & Racking Systems', 'placeholder' => 'Describe (# of units, material, type ...)' ],
    'input_type_seating_systems' => ['label' => 'Seating Systems', 'placeholder' => 'Describe (the furniture brand, #, etc.)' ],
    'input_type_other' => ['label' => 'Others', 'placeholder' => 'Describe (# of units, material, type ...)' ]
  ];

  foreach ($types_of_furniture_to_install as $checkbox_input_group => $types_of_furniture){
      
    $body .= line_for_1_value_input_box_with_text( $types_of_furniture['label'], $_POST[$checkbox_input_group], $_POST[ $checkbox_input_group . '_text'] );
    
  }

  $radio__title = 'ARE YOU ABLE TO PROVIDE ASSEMBLY INSTRUCTIONS';
  $radio__name = 'provide_assembly_instructions';
  $radio__value_for_text = 'NO'; 

  $body .= line_for_1_value_radio_with_text( $radio__title, $_POST[$radio__name], $radio__value_for_text, $_POST[$radio__name . '_text'] );
  
  
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