<?php

function make_body_2_7_1($POST)
{

    $body = '';

    $title = 'FREE RECYCLE<br>FURNITURE QUOTE';

    $body .= row_with_title____group_of_single___page_title($title);

    $main_header = 'Project details';

    $body .= row_with_header___group_of_single___main_header($main_header);

    $multiple_inputs = [
        'contact_name' => ['label' => 'Name', 'placeholder' => '*Name'],
        'contact_company' => ['label' => 'Company', 'placeholder' => '*Company'],
        'contact_email' => ['label' => 'Email', 'placeholder' => '*Email'],
        'contact_phone' => ['label' => 'Phone number', 'placeholder' => '*Phone number'],
    ];

    $body .= row_with_header___group_of_multiple_textInputs($POST, null, $multiple_inputs);


    $header = 'What would you like to do with your un-needed furniture?';

    $radio_array = [
      'name' => 'what_do_with_un_needed_furniture',
      'values' => [
        'Recycle' => "[\"#recycle-furniture\"]",
        'Store' => "[\"#store-furniture\"]",
        'Sell'
        ]
    ];

    $body .= row_with_header___group_of_multiple_radioInputs( $POST, $header, $radio_array);


      $header = 'SELECT TYPES OF GOODS';

      $types_of_furniture_to_install = [
        'input_type_furniture' => ['label' => 'Furniture', 'placeholder' => 'Describe #size of table,desks,etc.' ],
        'input_type_cubicles_partition_walls' => ['label' => 'Cubicles and Partition Walls', 'placeholder' => 'Describe  #of units,etc.' ],
        'input_type_seating' => ['label' => 'Seating', 'placeholder' => 'Describe  #of units,etc.' ],
        'input_type_electronics' => ['label' => 'Electronics', 'placeholder' => 'Describe  #of units,etc.' ],
        'input_type_other' => ['label' => 'Other', 'placeholder' => 'Describe...' ]
      ];

      $body .= row_with_header___group_of_multiple_checkboxInputs_with_text( $POST, $header, $types_of_furniture_to_install );

      
      $header = 'How would you like to recycle your goods?';

      $radio_array = [
        'name' => 'how_recycle_your_goods',
        'values' => [
          'Donate',
          'Dispose (goes to landfill)'
          ]
      ];

      $body .= row_with_header___group_of_multiple_radioInputs( $POST, $header, $radio_array );
      
      $header = 'WHEN WOULD YOU LIKE TO MOVE YOUR FURNITURE?';

      $radio_array = [
        'name' => 'when_move_your_furniture',
        'values' => [
          'Don’t have a date',
          'As soon as possible'
          ]
      ];

      $body .= row_with_header___group_of_multiple_radioInputs( $POST, $header, $radio_array );

      $radio_item = [
        'name' => 'when_remove_your_furniture',
        'value' => 'Choose the date',
        'placeholder' => 'Pick a date'
      ];

      $body .= row_______________group_of_single___radioInputs_with_date( $POST, $radio_item );


    $header = 'HOW LONG DO YOU NEED TO STORE YOUR GOODS?';

    $radio_array = [
      'name' => 'how_long_store_your_goods',
      'values' => [
        'Long Term',
        'Short Term',
        'Don\'t Know'
        ]
    ];

    $body .= row_with_header___group_of_multiple_radioInputs___one_line_2_from_3( $POST, $header, $radio_array);


    $header = 'SELECT YOUR STORAGE DATES';

    $body .= row_with_header___group_of_single___header( $header );


      $dataInputData = [
        'name' => 'start_date',
        'label' => 'Start Date:',
        'placeholder' => 'Pick a start date'
      ];

      $body .= row_______________group_of_single___dateInput____date( $POST, $dataInputData );


      $dataInputData = [
        'name' => 'end_date',
        'label' => 'End Date:',
        'placeholder' => 'Pick a end date'
      ];

      $body .= row_______________group_of_single___dateInput____date( $POST, $dataInputData );


    $header = 'PICK-UP ADDRESS';

    $array_of_fields = [
      'address' => [
        'label' => '*Address',
        'name' => 'contact_address',
        'is_required' => true
      ],
      'city' => [
        'label' => '*City',
        'name' => 'contact_city',
        'is_required' => true
      ],
      'state' => [
        'label' => '*State',
        'name' => 'contact_state',
        'is_required' => true
      ],
      'zip_code' => [
        'label' => '*Zip Code',
        'name' => 'contact_zip_code',
        'is_required' => true
      ]
    ];

    $body .= row_with_header___group_of_multiple_textInputs____addresses_custom( $POST, $header, $array_of_fields );


    $textarea_opt = [
    'name' => 'contact_details',
    'placeholder' => 'Additional Comments',
    ];
  
    $body .= row_______________group_of_single___textarea____comment_custom( $POST, $textarea_opt );

    return __table__r_($body);
}
