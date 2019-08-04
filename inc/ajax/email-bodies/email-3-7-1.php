<?php

function make_body_3_7_1($POST)
{

    $body = '';

    $title = 'FREE GOVERNMENT CONTRACT<br>SERVICES QUOTE';

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

    $header = "Do you require any government sales contract?";

    $radio_array = [
      'name' => 'require_government_sales_contract',
      'values' => [
        'TXMAS',
        'GSA'
        ]
    ];

    $radio_item = [
      'name' => 'require_government_sales_contract',
      'value' => 'Other',
      'placeholder' => 'Describe the services'
    ];

    $body .= row_with_header___group_of_multiple_radioInputs( $POST, $header, $radio_array );

    $body .= row_with_header___group_of_single___radioInputs_with_text( $POST, null, $radio_item );

    $header = 'REQUIRED SERVICE TYPE';

    $radio_array_with_tooltip = [
      [
        'name' => 'required_service_type',
        'label' => 'GOVERNMENT FURNITURE INSTALLATION',
        'value' => 'GOVERNMENT FURNITURE INSTALLATION',
        'tooltip' => null,
        'dynamic' => "[\"#furniture-installation\"]"
      ],
      [
        'name' => 'required_service_type',
        'label' => 'GOVERNMENT FACILITIES MOVING',
        'value' => 'GOVERNMENT FACILITIES MOVING',
        'tooltip' => null,
        'dynamic' => "[\"#facilities-moving\"]"
      ],
    ];

    $body .= row_______________group_of_multiple_radioInputs_with_tooltip( $POST, $header, $radio_array_with_tooltip );

    $header = 'Types of furniture to install: ';

    $types_of_furniture_to_install = [
      'input_type_modular_furniture' => ['label' => 'Modular Furniture', 'placeholder' => 'Describe ( # of units, desks, etc. )' ],
      'input_type_system_furniture' => ['label' => 'System Furniture', 'placeholder' => 'Describe (the furniture brand, #, etc.)' ],
      'input_type_cubicles_partition_walls' => ['label' => 'Cubicles and Partition Walls', 'placeholder' => 'Describe ( # of units, desks, etc. )' ],
      'input_type_conference_room_furniture' => ['label' => 'Conference Room Furniture', 'placeholder' => 'Describe (size of table, brand, etc.)' ],
      'input_type_casework_lab_furniture' => ['label' => 'Casework or Lab Furniture', 'placeholder' => 'Describe (worksurface material, upper...)' ],
      'input_type_industrial_worksrations' => ['label' => 'Industrial Workstations', 'placeholder' => 'Describe (# of units, conveyors, etc.)' ],
      'input_type_srorage_racking_system' => ['label' => 'Storage & Racking Systems', 'placeholder' => 'Describe (# of units, material, type ...)' ],
      'input_type_seating_systems' => ['label' => 'Seating Systems', 'placeholder' => 'Describe (the furniture brand, #, etc.)' ],
      'input_type_other' => ['label' => 'Others', 'placeholder' => 'Describe (# of units, material, type ...)' ]
    ];

    $body .= row_with_header___group_of_multiple_checkboxInputs_with_text(  $POST, $header, $types_of_furniture_to_install );

    $header = "Are you able to provide assembly instructions?";

    $pairs_radioInput_array_with_text = [
      ['name' => 'provide_assembly_instructions', 'value_only' => 'YES' , 'value_text' => 'NO', 'placeholder' => 'Make and model of the furniture' ],
    ];

    $body .= row_with_header___group_of_multiple_pair_radioInputs_with_text( $POST, $header, $pairs_radioInput_array_with_text );

    $header = 'TYPE OF MOVING SERVICES NEEDED';

    $radio_array_with_tooltip = [
      [
        'name' => 'moving_services_needed',
        'label' => 'MOVING TO A NEW LOCATION',
        'value' => 'MOVING TO A NEW LOCATION',
        'tooltip' => 'C-Serv’s Standard Moving Plan supplies a labor-only 
          commercial services team. Additional services, such as RDI,
          can be requested during quote stage.' 
      ],
      [
        'name' => 'moving_services_needed',
        'label' => 'MOVING WITHIN CAMPUS',
        'value' => 'MOVING WITHIN CAMPUS',
        'tooltip' => 'Our Turnkey Moving Services handles all details for your 
          in-campus move – to another building, up three flights,
          or down the hall – so your relocation is painless and smooth.'
      ],
    ];

    $body .= row_______________group_of_multiple_radioInputs_with_tooltip( $POST, $header, $radio_array_with_tooltip );
    
    $header = 'WHEN WOULD YOU LIKE TO RECEIVE THE SERVICE?';

    $radio_array = [
      'name' => 'when_you_like_move',
      'values' => [
        'Don’t have a date',
        'As soon as possible'
        ]
    ];

    $body .= row_with_header___group_of_multiple_radioInputs( $POST, $header, $radio_array );

    $radio_item = [
      'name' => 'when_you_like_move',
      'value' => 'Choose the date',
      'placeholder' => 'Pick a date'
    ];

    $body .= row_______________group_of_single___radioInputs_with_date( $POST, $radio_item );
    $header = 'SERVICE ADDRESS';

    $array_of_fields = [
        'address' => [
            'label' => '*Address',
            'name' => 'contact_address',
            'is_required' => true,
        ],
        'city' => [
            'label' => '*City',
            'name' => 'contact_city',
            'is_required' => true,
        ],
        'state' => [
            'label' => '*State',
            'name' => 'contact_state',
            'is_required' => true,
        ],
        'zip_code' => [
            'label' => '*Zip Code',
            'name' => 'contact_zip_code',
            'is_required' => true,
        ],
    ];

    $body .= row_with_header___group_of_multiple_textInputs____addresses_custom($POST, $header, $array_of_fields);

    $textarea_opt = [
        'name' => 'contact_details',
        'placeholder' => 'Additional Comments',
    ];

    $body .= row_______________group_of_single___textarea____comment_custom($POST, $textarea_opt);

    return __table__r_($body);
}
