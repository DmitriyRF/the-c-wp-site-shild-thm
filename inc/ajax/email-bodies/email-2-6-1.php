<?php

function make_body_2_6_1($POST)
{

    $body = '';

    $title = 'FREE FURNITURE STEAM<br>CLEANING QUOTE';

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

    $header = 'SELECT REQUESTED FURNITURE STEAM CLEANING PROGRAM';

    $radio_array_with_tooltip = [
        [
            'name' => 'requested_furniture_steam_cleaning_program',
            'label' => 'IN-DEPTH CLEANING PROGRAM',
            'value' => 'IN-DEPTH CLEANING PROGRAM',
            'tooltip' => 'We provide a deep steam cleaning of desks, cubicles, chairs, and file cabinets.
            This cleaning process requires employees to be away from their workstation area
            for a short time as we need to disassemble cubicles when needed. ',
        ],
        [
            'name' => 'requested_furniture_steam_cleaning_program',
            'label' => 'CONVENIENT CLEANING PROGRAM',
            'value' => 'CONVENIENT CLEANING PROGRAM',
            'tooltip' => 'We provide steam cleaning and sanitization of desk and
            file cabinet surfaces without moving any furniture or having any employees leave their workstation area.',
        ],
    ];

    $body .= row_______________group_of_multiple_radioInputs_with_tooltip($POST, $header, $radio_array_with_tooltip);

    $header = 'TYPES OF C-SERV CLEANING SERVICES';

    $types_of_furniture_to_install = [
        'input_type_cubicle_panel_cleaning' => ['label' => 'CUBICLE PANEL CLEANING', 'placeholder' => 'Add notes...'],
        'input_type_upholstery_cleaning' => ['label' => 'UPHOLSTERY CLEANING', 'placeholder' => 'Add notes...'],
        'input_type_sanitize_desk_cabinets' => ['label' => 'SANITIZE DESK & CABINETS', 'placeholder' => 'Add notes...'],
        'input_type_chair_cleaning' => ['label' => 'CHAIR CLEANING', 'placeholder' => 'Add notes...'],
    ];

    $body .= row_with_header___group_of_multiple_checkboxInputs_with_text($POST, $header, $types_of_furniture_to_install);

    $header = 'When would you like the furniture assembled?';

    $radio_array = [
        'name' => 'when_furniture_assembled',
        'values' => [
            'Don’t have a date',
            'As soon as possible',
        ],
    ];

    $body .= row_with_header___group_of_multiple_radioInputs($POST, $header, $radio_array);

    $radio_item = [
        'name' => 'when_furniture_assembled',
        'value' => 'Choose the date',
        'placeholder' => 'Pick a date',
    ];

    $body .= row_______________group_of_single___radioInputs_with_date($POST, $radio_item);

    $header = 'INSTALLATION ADDRESS';

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
