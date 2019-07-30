<?php

function make_body_3_3_1($POST)
{

    $body = '';

    $title = 'FREE OFFICE FURNITURE<br>INSTALLATION SERVICES QUOTE';

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
        'input_type_modular_furniture' => ['label' => 'MODULAR FURNITURE', 'placeholder' => 'Describe...'],
        'input_type_system_furniture' => ['label' => 'SYSTEM FURNITURE', 'placeholder' => 'Describe...'],
        'input_type_storage_racking_systems' => ['label' => 'STORAGE AND RACKING SYSTEMS', 'placeholder' => 'Describe...'],
        'input_type_cubicles_partition_walls' => ['label' => 'CUBICLES AND PARTITION WALLS', 'placeholder' => 'Describe...'],
        'input_type_seating_systems' => ['label' => 'SEATING SYSTEMS', 'placeholder' => 'Describe...'],
        'input_type_conference_room_furniture' => ['label' => 'CONFERENCE ROOM FURNITURE', 'placeholder' => 'Describe...'],
        'input_type_other' => ['label' => 'OTHER', 'placeholder' => 'Describe...'],
    ];

    $body .= row_with_header___group_of_multiple_checkboxInputs_with_text($POST, $header, $types_of_furniture_to_install);

    $header = 'Do you need additional services?';

    $radio_array = [
        'name' => 'do_you_need_additional_services',
        'values' => [
            'Project Management Services',
            'Office Furniture Storage',
            'Office Furniture Steam Cleaning Services',
            'Office Furniture Disposal Services',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $pairs_radioInput_array_with_text = [
        ['name' => 'do_you_need_additional_services', 'value_only' => 'Office Space Planning Services', 'value_text' => 'Other', 'placeholder' => 'Describe...'],
    ];

    $body .= row_with_header___group_of_multiple_pair_radioInputs_with_text($POST, null, $pairs_radioInput_array_with_text);

    $header = 'When would you like to get the services ?';

    $radio_array = [
        'name' => 'when_get_the_services',
        'values' => [
            'Don’t have a date',
            'As soon as possible',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $radio_item = [
        'name' => 'when_get_the_services',
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
