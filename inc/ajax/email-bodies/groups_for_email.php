<?php

function column_for_2_values( $label_1, $value_1, $label_2, $value_2) {

  if( isset( $value_1 ) && isset( $value_2 )  ) { 

    $html = '';
    $html .= '<tr style="background: #eeeeee;">';
    $html .= ' <td style="padding: 5px; border: 1px solid #bbbbbb" width="300">' . ( empty( $label_1 ) ? '' : $label_1 ) . ': </td>';
    $html .= ' <td style="padding: 5px; border: 1px solid #bbbbbb" width="300">' . ( empty( $label_2 ) ? '' : $label_2 ) . ': </td>';
    $html .= '</tr>';

    $html .= '<tr>';
    $html .= ' <td style="padding: 5px; border: 1px solid #bbbbbb"> '. ( empty( $value_1 ) ? '' : $value_1 ) .' </td>';
    $html .= ' <td style="padding: 5px; border: 1px solid #bbbbbb"> '. ( empty( $value_2 ) ? '' : $value_2 ) .' </td>';
    $html .= '</tr>';

    return $html;

  } else {

    return isset( $value_1 )
      ? line_for_1_value( $label_1, $value_1 )
      : isset( $value_2 )
        ? line_for_1_value( $label_2, $value_2 )
        : '';
  } 

}


function line_for_1_value( $label, $value) {

  if( isset( $value ) && !empty( $value )  ) { 

    $html = '';
    $html .= '<tr style="background: #eeeeee;">';
    $html .= ' <td colspan="2" style="padding: 40px 5px 10px; text-align: center;"> ' . ( empty( $label ) ? '' : strtoupper($label) ) . '</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= ' <td colspan="2" style="padding: 5px; text-align: center;"> '. $value . '</td>';
    $html .= '</tr>';

    return $html;

  }
  
  return '';

}


function line_for_1_value_input_box_with_text( $label, $input_box, $input_box_with_text ) {


  if( isset(  $input_box  )  && !empty(  $input_box  ) ) {
    $html = '';
    $html .= '<tr style="background: #bbbbbb;">';
    $html .= ' <td colspan="2" style="padding: 20px 5px 10px; text-align: center;"> '. $input_box .': </td>';
    $html .= '</tr>';
    
    if( isset( $input_box_with_text )  && !empty( $input_box_with_text ) ) {
      
      $html .= '<tr style="background: #444444; color: #ffffff">';
      $html .= ' <td colspan="2" style="padding: 20px 5px 10px; text-align: center;"> '.$input_box_with_text.': </td>';
      $html .= '</tr>';

    }else {

      $html .= '</tr>';
      $html .= '<tr style="background: #444444; color: #ffffff">';
      $html .= ' <td colspan="2" style="padding: 10px 5px 40px; text-align: center;"> WAS ONLY CHECKED </td>';
      $html .= '</tr>';

    }

    return $html;

  } else {

    $warning_label = $label . ' HAVE NOT CHECKED BUT FILLED ';

    return line_for_1_value_input_box_with_error( $warning_label, $input_box_with_text );
  }

}


function line_for_1_value_input_box_with_error( $label, $value) {

  if( isset( $value ) && !empty( $value )  ) { 

    $html = '';
    $html .= '<tr style="background: #444444; color: #ffffff">';
    $html .= ' <td colspan="2" style="padding: 20px 5px 10px; text-align: center;"> ' . ( empty( $label ) ? '' : strtoupper($label) ) . '</td>';
    $html .= '</tr>';
    $html .= '<tr style="background: #444444; color: #ff4444">';
    $html .= ' <td colspan="2" style="padding: 20px 5px 10px; text-align: center;"> '. $value .'</td>';
    $html .= '</tr>';

    return $html;

  }
  
  return '';

}


function line_for_1_value_radio_with_text( $label, $radio, $radio_value_for_text, $filled_text ) {
  
    if( isset( $radio ) && !empty( $radio ) ) {

      if( $radio != $radio_value_for_text ){
        return line_for_1_value( $label, $radio);
      } else {
        return line_for_1_value_radio_text( $label, $radio, $filled_text );
      }

    }
}


function line_for_1_value_radio_text( $label, $radio, $filled_text ) {
  
    if( isset( $radio ) ) {

      if( isset( $filled_text ) ){

        $html = '';
        $html .= '<tr style="background: #eeeeee;  border-top: 2px solid #888888">';
        $html .= ' <td colspan="2" style="padding: 20px 5px 10px; text-align: center;">' . ( empty( $radio ) ? '' : strtoupper($radio) ) . ' </td>';
        $html .= '</tr>';
        $html .= '<tr style="">';
        $html .= ' <td colspan="2" style="padding: 5px;"> '. ( empty( $filled_text ) ? '' : strtoupper($filled_text) ) .' </td>';
        $html .= '</tr>';
  
        return $html;

      }else{

        return line_for_1_value_input_box_with_error( $label, $filled_tex );
        
      }

    }
    return '';
}


function line_for_1_header( $header ) {

  if( isset( $header ) && !empty( $header )  ) { 

    $html = '';
    $html .= '<tr style="background: #eeeeee;">';
    $html .= ' <td colspan="2" style="padding: 20px 5px 10px; text-align: center; border-top: 2px solid #888888"> ' . $header . ': </td>';
    $html .= '</tr>';

    return $html;

  }
  
  return '';

}