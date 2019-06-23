<?php

require_once('utilites-html.php');
define("TEXT", "_text");
define("DATE", "_date");
// __table__r_
// line__one__header__
// line__one__1__d__
// line__two__2__d__
// line__one__1__g__
// line__two__2__g__
// line__one__1__r__
// line__two__2__r__


// $title = '';
function row_with_title____group_of_single___page_title($title){
  if( isset( $title ) && !empty( $title )  ) {
    return line__one__header__($title);
  }
  return '';
}

// $main_header = '';
function row_with_header___group_of_single___main_header($main_header){
  if( isset( $main_header ) && !empty( $main_header )  ) {
    return line__one__1__g__($main_header);
  }
  return '';
}

// $multiple_inputs = [
//   'name' => ['label' => '', 'placeholder' => '' ],
// ];
function row_with_header___group_of_multiple_textInputs($POST, $header, $multiple_inputs){
  $html = '';
  foreach ( $multiple_inputs as $name => $inputs){
    if( isset( $POST[$name] ) && !empty( $POST[$name] )  ) {
      $html .= line__two__2__r__( $inputs['label'], $POST[$name] );
    }
  }

  return  empty($html) ? $html : row_with_header___group_of_single___main_header($header) . $html ;
}

// $header = '';
function row_with_header___group_of_single___header( $header ){
  if( isset( $header ) && !empty( $header )  ) {
    return line__one__1__r__( $header );
  }
  return '';
}

// $radio_array_with_tooltip = [
//   [
//     'name' => '',
//     'label' => '',
//     'value' => '',
//     'tooltip' => '' 
//   ],
// ]
function row_______________group_of_multiple_radioInputs_with_tooltip( $POST, $header, $radio_array_with_tooltip ){
  $html = '';
  $value = $POST[$radio_array_with_tooltip[0]['name']] ;

  if( isset( $value ) && !empty( $value )  ) {
    $html .= line__one__1__r__( $value );
  }

  return  empty($html) ? $html : row_with_header___group_of_single___main_header($header) . $html ;
}

// $types_of_furniture_to_install = [
//   'name' => ['label' => '', 'placeholder' => '' ],
// ];
function row_with_header___group_of_multiple_checkboxInputs_with_text(  $POST, $header, $types_of_furniture_to_install ){
  $html = '';
  
  foreach ( $types_of_furniture_to_install as $name => $checkbox){
    $name_text = $name . TEXT;
    if( isset( $POST[$name] ) && !empty( $POST[$name] )  ) {
        
        if( isset( $POST[$name_text] ) && !empty( $POST[$name_text] )  ) {
            $html .= line__two__2__r__( $POST[$name], $POST[$name_text] );
        }else{
            $html .= line__two__2__r__( $POST[$name], 'NO DESCRIPTION WAS PROVIDED' );
        }
    }else{
      if( isset( $POST[$name_text] ) && !empty( $POST[$name_text] )  ) {
        $html .= line__two__2__r__( 'WAS NOT CHECKED', $POST[$name_text] );
      }
    }
  }

  return  empty($html) ? $html : row_with_header___group_of_single___main_header($header) . $html ;
}

// $pairs_radioInput_array_with_text = [
//   ['name' => '', 'value_only' => '' , 'value_text' => '', 'placeholder' => '' ],
// ];
function row_with_header___group_of_multiple_pair_radioInputs_with_text( $POST, $header, $pairs_radioInput_array_with_text ){
  $html = '';

  foreach ( $pairs_radioInput_array_with_text as $radio){
    $name = $radio['name'];
    $name_text = $radio['name'] . TEXT;

    if( isset( $POST[$name] ) && !empty( $POST[$name] )  ) {
      if( isset( $POST[$name_text] ) && !empty( $POST[$name_text] )  ) {
        $html .= line__two__2__r__(  $POST[$name], $POST[$name_text] );
      }else{
        $html .= line__one__1__r__( $POST[$name] );
      }
    }
  }
  return  empty($html) ? $html : row_with_header___group_of_single___main_header($header) . $html ;

}

// $radio_array = [
//   'name' => 'name',
//   'values' => [
//     '',
//     ''
//     ]
// ];
function row_with_header___group_of_multiple_radioInputs___one_line_2_from_3( $POST, $header, $radio_array){
  return row_with_header___group_of_multiple_radioInputs( $POST, $header, $radio_array );
}
// $checkbox_array = [
//   'name'   => 'value',
// ];
function row_with_header___group_of_multiple_checkboxInputs( $POST, $header, $checkbox_array ){
  $html = '';

  foreach ( $checkbox_array as $checkbox_name => $value){
    if( isset( $POST[$checkbox_name] ) && !empty( $POST[$checkbox_name] )  ) {
        $html .= line__one__1__r__( $POST[$checkbox_name] );
    }
  }

  return  empty($html) ? $html : row_with_header___group_of_single___main_header($header) . $html ;
}

// $radio_array = [
//   'name' => '',
//   'values' => [
//     '',
//     ''
//     ]
// ];
function row_with_header___group_of_multiple_radioInputs( $POST, $header, $radio_array ){
  $html = '';
  $name = $radio_array['name'];

  if( isset( $POST[$name] ) && !empty( $POST[$name] )  ) {
      $html .= line__one__1__r__( $POST[$name] );
  }

  return  empty($html) ? $html : row_with_header___group_of_single___main_header($header) . $html ;
}


// $dataInputData = [
//   'name' => '',
//   'label' => ':',
//   'placeholder' => ''
// ];
 function row_______________group_of_single___dateInput____date( $POST, $dataInputData ){
    $html = '';
    $name = $dataInputData['name'];

    if( isset( $POST[$name] ) && !empty( $POST[$name] )  ) {
        $html .= line__one__1__r__( $POST[$name] );
    }
    return $html;
 }

//  $radio_item = [
//   'name' => '',
//   'value' => '',
//   'placeholder' => ''
// ];
function row_______________group_of_single___radioInputs_with_date( $POST, $radio_item ){
  $html = '';
  $name_date = $radio_item['name'] . DATE;

  if( isset( $POST[$name_date] ) && !empty( $POST[$name_date] )  ) {
      $html .= line__two__2__r__( 'The date : ', $POST[$name_date] );
  }

  return $html;
}

// $radio_item = [
//   'name' => '',
//   'value' => '',
//   'placeholder' => ''
// ];
function row_with_header___group_of_single___radioInputs_with_text( $POST, $header, $radio_item ){
  $html = '';
  $name_text = $radio_item['name'] . TEXT;

  if( isset( $POST[$name_text] ) && !empty( $POST[$name_text] )  ) {
      $html .= line__one__1__r__( $POST[$name_text] );
  }

  return  empty($html) ? $html : row_with_header___group_of_single___main_header($header) . $html ;

}

// $array_of_fields = [
//   'address' => [
//     'label' => '',
//     'name' => '',
//     'is_required' => 
//   ],
//   'city' => [
//     'label' => '',
//     'name' => '',
//     'is_required' => 
//   ],
//   'state' => [
//     'label' => '',
//     'name' => '',
//     'is_required' => 
//   ],
//   'zip_code' => [
//     'label' => '',
//     'name' => '',
//     'is_required' => 
//   ]
// ];
 function row_with_header___group_of_multiple_textInputs____addresses_custom( $POST, $header, $array_of_fields ){
    $html = '';

    foreach ( $array_of_fields as $address_type => $array_of_field ){
      $name = $array_of_field['name'];
      $label = $array_of_field['label'];

      if( isset( $POST[$name] ) && !empty( $POST[$name] )  ) {
          $html .= line__two__2__r__( $label, $POST[$name] );
      }
    }
    return  empty($html) ? $html : row_with_header___group_of_single___main_header($header) . $html ;
 }

//  $textarea_opt = [
//   'name' => '',
//   'placeholder' => '',
//   ];
function row_______________group_of_single___textarea____comment_custom( $POST, $textarea_opt ){
  $html = '';
  $name = $textarea_opt['name'];
  $placeholder = $textarea_opt['placeholder'];
  // 2
  if( isset( $POST[$name] ) && !empty( $POST[$name] )  ) {
      $html .= line__one__1__g__( $placeholder );
      $html .= line__one__1__r__( $POST[$name] );
  }
  return $html;
}



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

function line_for_1_title( $title ) {

  if( isset( $title ) && !empty( $title )  ) { 

    $html = '';
    $html .= '<tr style="background: #eb7719;">';
    $html .= ' <td colspan="2" style="padding: 50px 10px 30px; text-align: center; border-bottom: 10px solid #0f4879; color: #0f4879; font-size: 30px;">';
    $html .=    $title;
    $html .= '  </td>';
    $html .= '</tr>';

    return $html;

  }
  
  return '';

}
