<?php

function make_body_3_2_1($POST)
{

    $body = '';

    $title = 'FREE CORPORATE<br>SERVICES QUOTE';

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

    $header = 'TYPES OF CORPORATE FURNITURE INSTALLATION';

    $types_of_furniture_to_install = [
        'input_type_modular_furniture' => ['label' => 'MODULAR FURNITURE', 'placeholder' => 'Describe'],
        'input_type_system_furniture' => ['label' => 'SYSTEM FURNITURE', 'placeholder' => 'Describe'],
        'input_type_storage_racking_systems' => ['label' => 'STORAGE AND RACKING SYSTEMS', 'placeholder' => 'Describe'],
        'input_type_cubicles_partition_walls' => ['label' => 'CUBICLES AND PARTITION WALLS', 'placeholder' => 'Describe'],
        'input_type_seating_systems' => ['label' => 'SEATING SYSTEMS', 'placeholder' => 'Describe'],
        'input_type_other' => ['label' => 'OTHER', 'placeholder' => 'Describe'],
    ];

    $body .= row_with_header___group_of_multiple_checkboxInputs_with_text($POST, $header, $types_of_furniture_to_install);

    $header = 'Do you need moving services?';

    $radio_array = [
        'name' => 'do_you_need_moving',
        'values' => [
            'YES'  => "[\"#moving-services\"]",
            'NO'
        ]
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

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

    $header = 'Would you like additional services?';

    $radio_array = [
        'name' => 'corporate_additional_services',
        'values' => [
            'Corporate Storage Services',
            'Corporate Furniture Steam Cleaning Services',
            'Corporate Furniture Disposal Services',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $header = 'When would you like to get the services ?';

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
