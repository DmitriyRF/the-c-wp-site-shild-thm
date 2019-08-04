<?php

function make_body_3_4_1($POST)
{

    $body = '';

    $title = 'FREE LAB FURNITURE<br>SERVICES QUOTE';

    $body .= row_with_title____group_of_single___page_title($title);

    $main_header = 'Project details';

    $body .= row_with_header___group_of_single___main_header($main_header);

    $multiple_inputs = [
        'contact_name' => ['label' => 'Name', 'placeholder' => '*Name'],
        'contact_company' => ['label' => 'Company', 'placeholder' => '*Company'],
        'contact_email' => ['label' => 'Email', 'placeholder' => '*Email'],
        'contact_phone' => ['label' => 'Phone number', 'placeholder' => '*Phone number'],
    ];

    $body .= row_with_header___group_of_multiple_textInputs( $POST, null, $multiple_inputs );

    $header = 'NEED LAB FURNITURE INSTALLATION SERVICES?';

    $types_of_furniture_to_install = [
        'input_type_laboratory_furniture_installation' => ['label' => 'LABORATORY FURNITURE INSTALLATION', 'placeholder' => 'Describe'],
        'input_type_cleanroom_installation' => ['label' => 'CLEANROOM INSTALLATION', 'placeholder' => 'Describe'],
        'input_type_chemical_resistant_countertop_installation' => ['label' => 'CHEMICAL RESISTANT COUNTERTOP INSTALLATION', 'placeholder' => 'Describe'],
        'input_type_other' => ['label' => 'OTHER', 'placeholder' => 'Describe'],
    ];

    $body .= row_with_header___group_of_multiple_checkboxInputs_with_text($POST, $header, $types_of_furniture_to_install);

    $header = 'Need to move laboratory facilities?';

    $radio_array = [
        'name' => 'need_move_laboratory_facilities',
        'values' => [
          'YES' => "[\"#moving-services\"]",
          'NO'
          ]
      ];

    $body .= row_with_header___group_of_multiple_radioInputs___one_line_2_from_3($POST, $header, $radio_array);

    $header = 'TYPE OF MOVING SERVICES NEEDED';

    $radio_array_with_tooltip = [
        [
            'name' => 'moving_services_needed',
            'label' => 'MOVING TO A NEW LOCATION',
            'value' => 'MOVING TO A NEW LOCATION',
            'tooltip' => 'C-Serv’s Standard Moving Plan supplies a labor-only
          commercial services team. Additional services, such as RDI,
          can be requested during quote stage.',
        ],
        [
            'name' => 'moving_services_needed',
            'label' => 'MOVING WITHIN CAMPUS',
            'value' => 'MOVING WITHIN CAMPUS',
            'tooltip' => 'Our Turnkey Moving Services handles all details for your
          in-campus move – to another building, up three flights,
          or down the hall – so your relocation is painless and smooth.',
        ],
    ];

    $body .= row_______________group_of_multiple_radioInputs_with_tooltip($POST, $header, $radio_array_with_tooltip);

    $header = 'When would you like to get service?';

    $radio_array = [
        'name' => 'when_get_services',
        'values' => [
            'Don’t have a date',
            'As soon as possible',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $radio_item = [
        'name' => 'when_get_services',
        'value' => 'Choose the date',
        'placeholder' => 'Pick a date',
    ];

    $body .= row_______________group_of_single___radioInputs_with_date($POST, $radio_item);

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
